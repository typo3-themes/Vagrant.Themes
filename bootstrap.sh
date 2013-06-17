#!/usr/bin/env bash

function getExtensionFromGitHub {
	echo "TYPO3 Extension $1 from $2/$3"
	echo "      Downloading"
	rm -R -f $1
	wget -q https://github.com/$2/$3/archive/master.zip -O temp.zip
	echo "      Unzip"
	unzip -qq temp.zip
	rm temp.zip
	mv 	$3-master $1
	echo "      Done"
} 

function getExtensionFromSvn {
	echo "TYPO3 Extension $1 from $2"
	echo "      Downloading"
	rm -R -f $1
	svn -q checkout $2 $1
	echo "      Done"
}

# ensure fast booting with grub ;)

cp /etc/default/grub /etc/default/grub.orig
sed -i -e 's/GRUB_TIMEOUT=\([0-9]\)\+/GRUB_TIMEOUT=0/' /etc/default/grub
update-grub

# checkout from git ...

cd /var/www/t3-latest/typo3conf/ext/

# typo3-themes repositories

getExtensionFromGitHub themes                           typo3-themes   themes
getExtensionFromGitHub themes_adapter_directory	        typo3-themes   themes_adapter_directory
getExtensionFromGitHub themes_adapter_tvframework       typo3-themes   themes_adapter_tvframework
getExtensionFromGitHub themes_adapter_wordpress         typo3-themes   themes_adapter_wordpress
getExtensionFromGitHub themes_builder                   typo3-themes   themes_builder
getExtensionFromGitHub themes_fces_fluidcontent_basic   typo3-themes   themes_fces_fluidcontent_basic
getExtensionFromGitHub themes_library                   typo3-themes   themes_library
getExtensionFromGitHub themes_manager                   typo3-themes   themes_manager
getExtensionFromGitHub themes_settings                  typo3-themes   themes_settings

getExtensionFromGitHub theme_bootstrap                  typo3-themes   theme_bootstrap

# independent repositories fedext

getExtensionFromGitHub fluidcontent                     FluidTYPO3     fluidcontent
getExtensionFromGitHub fluidpages                       FluidTYPO3     fluidpages
getExtensionFromGitHub flux                             FluidTYPO3     flux
getExtensionFromGitHub vhs                              FluidTYPO3     vhs
getExtensionFromGitHub view                             FluidTYPO3     view

# Do this to fix a shared folder problem in vms

getExtensionFromGitHub uncache                          NamelessCoder  uncache

# other usefull tools, not all needed until now, but interesting

getExtensionFromGitHub beskin                           kaystrobach    TYPO3.beskin
getExtensionFromGitHub coreupdate                       kaystrobach    TYPO3.coreupdate
getExtensionFromGitHub dyncss                           kaystrobach    TYPO3.dyncss
getExtensionFromGitHub dyncss_phpsass                   kaystrobach    TYPO3.dyncss_phpsass
getExtensionFromGitHub dyncss_less                      kaystrobach    TYPO3.dyncss_less
getExtensionFromGitHub dyncss_scss                      kaystrobach    TYPO3.dyncss_scss
getExtensionFromGitHub dyncss_test                      kaystrobach    TYPO3.dyncss_test
getExtensionFromGitHub dyncss_turbine                   kaystrobach    TYPO3.dyncss_turbine
getExtensionFromGitHub easylogin                        kaystrobach    TYPO3.easylogin

# get svn extensions from forge :D

getExtensionFromSvn    static_info_tables               https://svn.typo3.org/TYPO3v4/Extensions/static_info_tables/tags/Version-6-0-3/

# import database

mysql -u root           < /serverData/data/sql/prepare.sql
mysql -u root t3-latest < /serverData/data/sql/t3-latest.sql

# copy configuration

cp /serverData/data/file/LocalConfiguration.php /var/www/t3-latest/typo3conf/

# clear cache

rm -R -f /serverData/www/t3-latest/typo3temp/Cache
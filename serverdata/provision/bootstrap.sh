#!/usr/bin/env bash

function getExtensionFromGitHub {
	echo "TYPO3 Extension $1 from $2/$3"
	if [ ! -d $1 ]; then
		rm -R -f $1
		git clone https://github.com/$2/$3.git $1
		echo "      Done"
	else
		echo "      Already there"
		cd $1
		git pull
		cd ..
	fi
}

function getExtensionFromSvn {
	echo "TYPO3 Extension $1 from $2"
	if [ ! -d $1 ]; then
		echo "      Downloading"
		rm -R -f $1
		svn checkout $2 $1 --quiet
		echo "      Done"
	else
		echo "      Already there"
		cd $1
		svn update --quiet
		cd ..
	fi
}

function getExtensionFromGit {
	echo "TYPO3 Extension from $1 from $2"
	if [ ! -d $1 ]; then
		echo "      Downloading"
		rm -R -f $1
		git clone $2 $1
		echo "      Done"
	else
		echo "      Already there"
		cd $1
		git pull
		cd ..
	fi
}
# ensure fast booting with grub ;)

#cp /etc/default/grub /etc/default/grub.orig
#sed -i -e 's/GRUB_TIMEOUT=\([0-9]\)\+/GRUB_TIMEOUT=0/' /etc/default/grub
#update-grub

# clean up

cp /etc/phpmyadmin/apache.conf /etc/apache2/sites-enabled/phpmyadmin
cp /vagrant/serverdata/etc/phpmyadmin/config.inc.php /etc/phpmyadmin/config.inc.php


if [ ! -d "/var/www/typo3conf" ]; then

	rm -rf /var/www/*

	# checkout TYPO3 from Github

	cd /var/www
	curl -L -o latestSource.tar.gz http://get.typo3.org/6.2
	tar xzf latestSource.tar.gz
	rm latestSource.tar.gz
	typo3sourceDir=$(find . -mindepth 1 -maxdepth 1 -type d)
	ln -s $typo3sourceDir typo3_src
	ln -s typo3_src/index.php index.php
	ln -s typo3_src/typo3 typo3

	ln -s /serverdata/project/fileadmin fileadmin
	ln -s /serverdata/project/uploads uploads
	mkdir typo3conf
	cd typo3conf
	ln -s /serverdata/project/typo3conf/ext ext


	# checkout from git ...

	cd /var/www/typo3conf/ext/
fi

# copy configuration
cp /serverdata/project/typo3conf/LocalConfiguration.php /var/www/typo3conf/
cp /serverdata/project/typo3conf/PackageStates.php /var/www/typo3conf/

# import db
mysql -u root           < /serverdata/serverdata/data/sql/prepare.sql
mysql -u root t3-latest < /serverdata/serverdata/data/sql/t3-latest.sql


# ensure extdir exists
if [ ! -d "/serverdata/project/typo3conf/ext" ]; then
	mkdir /serverdata/project/typo3conf/ext
fi

cd /var/www/typo3conf/ext/

#base extensions
getExtensionFromGit    gridelements                     git://git.typo3.org/TYPO3CMS/Extensions/gridelements.git
getExtensionFromGitHub belayout_fileprovider            georgringer    belayout_fileprovider

# typo3-themes repositories
getExtensionFromGitHub themes                           typo3-themes   themes
getExtensionFromGitHub themes_gridelements              typo3-themes   themes_gridelements
getExtensionFromGitHub themes_builder                   typo3-themes   themes_builder
getExtensionFromGitHub themes_library                   typo3-themes   themes_library
getExtensionFromGitHub themes_manager                   typo3-themes   themes_manager

getExtensionFromGitHub themes_adapter_directory	        typo3-themes   themes_adapter_directory
getExtensionFromGitHub themes_adapter_tvframework       typo3-themes   themes_adapter_tvframework
getExtensionFromGitHub themes_adapter_wordpress         typo3-themes   themes_adapter_wordpress

getExtensionFromGitHub theme_bootstrap                  typo3-themes   theme_bootstrap
getExtensionFromGitHub basictemplate                    kaystrobach    TYPO3.basictemplate

# independent repositories fedext
getExtensionFromGitHub flux                             FluidTYPO3     flux
getExtensionFromGitHub vhs                              FluidTYPO3     vhs
getExtensionFromGitHub view                             FluidTYPO3     view

# Do this to fix a shared folder problem in vms
getExtensionFromGitHub uncache                          NamelessCoder  uncache

# other usefull tools, not all needed until now, but interesting
getExtensionFromGitHub beskin                           kaystrobach    TYPO3.beskin
getExtensionFromGitHub dyncss                           kaystrobach    TYPO3.dyncss
getExtensionFromGitHub dyncss_phpsass                   kaystrobach    TYPO3.dyncss_phpsass
getExtensionFromGitHub dyncss_less                      kaystrobach    TYPO3.dyncss_less
getExtensionFromGitHub dyncss_scss                      kaystrobach    TYPO3.dyncss_scss
getExtensionFromGitHub dyncss_test                      kaystrobach    TYPO3.dyncss_test
getExtensionFromGitHub easylogin                        kaystrobach    TYPO3.easylogin

# get svn extensions from forge :D

getExtensionFromSvn    t3jquery                         https://svn.typo3.org/TYPO3v4/Extensions/t3jquery/trunk/

# import database



# clear cache

rm -R -f /serverdata/www/typo3temp/Cache

chmod 777 -R /var/www/


echo "======================================================================="
echo "  Access the vm in your Browser via:"
echo "      - 192.168.31.16    32bit 1GB Ram    (Virtualbox Provider)"
echo "======================================================================="
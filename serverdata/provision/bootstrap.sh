#!/usr/bin/env bash

function getExtensionFromGitHub {
	echo " "
	echo "TYPO3 Extension $1"
	echo "  From $2/$3"
	if [ ! -d $1/.git ]; then
		rm -R -f $1
	fi
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
	echo "--------------------------------------------------"
}

function getExtensionFromSvn {
	echo " "
	echo "TYPO3 Extension $1"
	echo "  From $2"
	if [ ! -d $1 ]; then
		echo "      Downloading"
		rm -R -f $1
		git svn clone $2 $1 --quiet
		echo "      Done"
	else
		echo "      Already there"
		cd $1
		git svn fetch
		cd ..
	fi
	echo "--------------------------------------------------"
}

function getExtensionFromGit {
	echo " "
	echo "TYPO3 Extension from $1"
	echo "  From $2"
	if [ ! -d $1 ]; then
		echo "      Downloading"
		rm -R -f $1
		git clone $2 $1
		git log -3 --date-order --oneline
		echo "      Done"
	else
		echo "      Already there"
		cd $1
		git pull
		git log -3 --date-order --oneline
		cd ..
	fi
	echo "--------------------------------------------------"
}

function getTypo3FromGit {
	echo "TYPO3"
	cd /var/www/


	if [ ! -d typo3_src/.git ]; then
		echo "      Downloading"
		rm -R -f typo3_src
		git clone --branch TYPO3_6-2 --depth 50 git://git.typo3.org/Packages/TYPO3.CMS.git typo3_src
		cd typo3_src
		echo "      Done"
		git log -10 --date-order --oneline
	else
		echo "      Already there"
		cd typo3_src
		git pull
		git log -10 --date-order --oneline
		cd ..
	fi
	echo "--------------------------------------------------"
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

	getTypo3FromGit

	ln -s typo3_src/index.php index.php
	ln -s typo3_src/typo3 typo3

	ln -s /serverdata/project/fileadmin fileadmin
	ln -s /serverdata/project/uploads uploads
	mkdir typo3conf
	cd typo3conf
	ln -s /serverdata/project/typo3conf/ext ext


	# checkout from git ...

	cd /var/www/typo3conf/ext/
else
	# just update TYPO3 from git here
	getTypo3FromGit
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
getExtensionFromGitHub belayout_tsprovider              kaystrobach    TYPO3.belayout_tsprovider

# typo3-themes repositories
getExtensionFromGitHub themes_distribution              typo3-themes   themes_distribution
getExtensionFromGitHub themes                           typo3-themes   themes
getExtensionFromGitHub themes_gridelements              typo3-themes   themes_gridelements
getExtensionFromGitHub themes_builder                   typo3-themes   themes_builder
getExtensionFromGitHub themes_library                   typo3-themes   themes_library
getExtensionFromGitHub themes_manager                   typo3-themes   themes_manager

getExtensionFromGitHub themes_adapter_directory	        typo3-themes   themes_adapter_directory
getExtensionFromGitHub themes_adapter_tvframework       typo3-themes   themes_adapter_tvframework
getExtensionFromGitHub themes_adapter_wordpress         typo3-themes   themes_adapter_wordpress

getExtensionFromGitHub theme_bootstrap                  typo3-themes   theme_bootstrap
getExtensionFromGitHub theme_bootstrap_slate            typo3-themes   theme_bootstrap_slate

getExtensionFromGitHub basictemplate                    kaystrobach    TYPO3.basictemplate

# independent repositories fedext
getExtensionFromGitHub flux                             FluidTYPO3     flux
getExtensionFromGitHub vhs                              FluidTYPO3     vhs

# other usefull tools, not all needed until now, but interesting
getExtensionFromGitHub beskin                           kaystrobach    TYPO3.beskin
getExtensionFromGitHub dyncss                           kaystrobach    TYPO3.dyncss
getExtensionFromGitHub dyncss_phpsass                   kaystrobach    TYPO3.dyncss_phpsass
getExtensionFromGitHub dyncss_less                      kaystrobach    TYPO3.dyncss_less
getExtensionFromGitHub dyncss_scss                      kaystrobach    TYPO3.dyncss_scss
getExtensionFromGitHub dyncss_test                      kaystrobach    TYPO3.dyncss_test
getExtensionFromGitHub easylogin                        kaystrobach    TYPO3.easylogin
getExtensionFromGitHub bootstrap_package                benjaminkott   bootstrap_package

# get svn extensions from forge :D
getExtensionFromGitHub t3jquery                         TYPO3-svn-archive t3jquery
getExtensionFromGitHub static_info_tables               TYPO3-svn-archive static_info_tables

# import database



# clear cache


chmod 777 -R /var/www/

sudo rm -rf /serverdata/www/typo3temp/Cache
sudo service apache2 restart


echo "======================================================================="
echo "  Access the vm in your Browser via:"
echo "      - 192.168.31.16    32bit 1GB Ram    (Virtualbox Provider)"
echo "======================================================================="
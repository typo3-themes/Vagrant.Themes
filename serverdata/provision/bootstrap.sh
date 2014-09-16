#!/usr/bin/env bash



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


	getTypo3FromGit

	cd /var/www
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

bash /vagrant/serverdata/provision/install-extensions.sh

# import database



# clear cache


chmod 777 -R /var/www/

sudo rm -rf /serverdata/www/typo3temp/Cache
sudo chmod -R 777 /var/www/typo3temp
sudo service apache2 restart

echo "get languages defined in the system"
cd /var/www
php typo3/cli_dispatch.phpsh extbase language:update

echo "run scheduler once"
php typo3/cli_dispatch.phpsh scheduler

echo "======================================================================="
echo "  Access the vm in your Browser via:"
echo "      - 192.168.31.16    32bit 1GB Ram    (Virtualbox Provider)"
echo "======================================================================="
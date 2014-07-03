#!/usr/bin/env bash
function getExtensionFromGitHub {
	#getExtensionFromGit $1 https://github.com/$2/$3.git
	if [ "$GITTYPE" = "HTTP" ]; then
		getExtensionFromGit $1 http://github.com/$2/$3.git
	else
		getExtensionFromGit $1 git@github.com:$2/$3.git
	fi
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

#base extensions
getExtensionFromGit    gridelements                     git://git.typo3.org/TYPO3CMS/Extensions/gridelements.git
getExtensionFromGit    phpunit                          git://git.typo3.org/TYPO3CMS/Extensions/phpunit.git

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
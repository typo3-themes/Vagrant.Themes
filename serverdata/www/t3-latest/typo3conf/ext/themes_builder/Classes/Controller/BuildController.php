<?php

class Tx_ThemesBuilder_Controller_BuildController extends Tx_Extbase_MVC_Controller_ActionController {


	/**
	 * @var string Key of the extension this controller belongs to
	 */
	protected $extensionName = 'ThemesBuilder';

	/**
	 * @var t3lib_PageRenderer
	 */
	protected $pageRenderer;

	/**
	 * Initializes the controller before invoking an action method.
	 *
	 * @return void
	 */
	protected function initializeAction() {
		#$this->pageRenderer->addInlineLanguageLabelFile('EXT:workspaces/Resources/Private/Language/locallang.xml');
	}

	public function indexAction() {
		$this->view->assign(
			'extensionDepencies',
			array(
				'fluid' => 'fluid',
				'themes_adapter_templavoilaframework' => 'themes_adapter_templavoilaframework',
				'dyncss_less' => 'Dyncss_less',
				'dyncss_scss' => 'Dyncss_scss',
				'fluidcontent' => 'fluidcontent',
				'fluidcontent_bootstrap' => 'fluidcontent_bootstrap',
				'fluidpages' => 'fluidpages',
				'fluidpages_bootstrap' => 'fluidpages_bootstrap'
			)
		);
	}

	/**
	 * Simple action to list some stuff
	 */
	public function listAction() {

	}

	/**
	 * Creates the directories and replaces all the stuff
	 *
	 * @param string $themeKey
	 * @param array  $options
	 * @param array  $information
	 *
	 * @return void
	 */
	public function createAction($themeKey, array $options, array $information) {

		$this->options               = $options;
		$this->information           = $information;
		$this->information['extKey'] = $themeKey;

		try {
			$extensionInstallPath    = PATH_site . 'typo3conf/ext/';
			$themePath               = PATH_site . 'typo3conf/ext/' . $themeKey . '/';
			if(file_exists($themePath)) {
				throw new Exception('Extension already existent, nothing to do.');
			}


			t3lib_div::mkdir_deep($extensionInstallPath, $themeKey);
			$this->copyRecursiveAndReplace(
				t3lib_div::getFileAbsFileName('EXT:themes_builder/Resources/Private/DummyFiles/'),
				$themePath
			);

			$this->flashMessageContainer->add(
				'Extension created',
				'Successfully created extension: ' . $themeKey,
				t3lib_FlashMessage::OK
			);

			$this->processPhpFiles($themePath);

		} catch(Exception $e) {
			$this->view->assignMultiple(
				array(
					'errorMsg' => $e->getMessage(),
				)
			);
		}
	}

	protected function copyRecursiveAndReplace($source, $destination, $exclude = array()) {
		/**
		 * @var array $files
		 */
		$files = array();

		$files = t3lib_div::getAllFilesAndFoldersInPath(
			array(),
			$source,
			'',   // extensionList
			TRUE  // inclusive directories
		);

		foreach($files as $entry) {
			$shortEntry = str_replace($source,'',$entry);
			if($shortEntry!='' && $shortEntry!='.') {
				if(!in_array($shortEntry, $exclude)) {
					if(is_dir($entry)) {
						$cmd['newfolder'][] = array(
							'data'   => basename($shortEntry),
							'target' => dirname($destination . $shortEntry),
						);
						@mkdir($destination . $shortEntry);
					} elseif(is_file($entry)) {
						$cmd['copy'][] = array(
							'data'   => $entry,
							'target' => $destination . $shortEntry,
						);
						@copy(
							$entry,
							$destination . $shortEntry
						);
						$this->replaceMarkersInFile($destination . $shortEntry);
					}
				}
			}
		}
	}
	protected function replaceMarkersInFile($file) {
		$fileContent = file_get_contents($file);
		foreach($this->information as $key => $value) {
			$fileContent = str_replace(
				'{###' . $key . '###}',
				addslashes($value),
				$fileContent
			);
		}
		file_put_contents($file, $fileContent);
	}

	protected function processPhpFiles($path) {

		if($this->options['includeStatic']) {
			$fileContent  = file_get_contents($path . 'ext_tables.php');
			$fileContent .= "\n";
			$fileContent .= "\n";
			$fileContent .= "if(!t3lib_extMgm::isLoaded('themes')) {\n";
			$fileContent .=	'	t3lib_extMgm::addStaticFile($_EXTKEY, \'Configuration/TypoScript\', $_EXTKEY . \': theme\');' . "\n";
			$fileContent .=	"}\n";
			file_put_contents($path . 'ext_tables.php', $fileContent);
		}

		$this->flashMessageContainer->add(
			'Please add the depencies manually, this is currently not supported',
			'',
			t3lib_FlashMessage::WARNING
		);
	}
}
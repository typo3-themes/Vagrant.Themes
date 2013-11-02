<?php

class tx_coreupdate_Hook_Reports_VersionStatusProvider implements tx_reports_StatusProvider {
	function getStatus() {
		return array(
			'Core Version' => $this->checkCoreVersion()
		);
	}
	function checkCoreVersion() {
		$GLOBALS['LANG']->includeLLFile('EXT:coreupdate/locallang.xml');
		$status = tx_Coreupdate_Lib_Helper::getInstance()->isUpToDate();
		switch($status['systemState']) {
			case 'error':
				$versionState = tx_reports_reports_status_Status::ERROR;
			break;
			case 'noUpdate':
				$versionState = tx_reports_reports_status_Status::OK;
			break;
			case 'newMinorUpdate':
				$versionState = tx_reports_reports_status_Status::WARNING;
			break;
			case 'newMajorUpdate':
				$versionState = tx_reports_reports_status_Status::ERROR;
			break;
			case 'newSecurityUpdate':
				$versionState = tx_reports_reports_status_Status::ERROR;
			break;
			default:
				$versionState = tx_reports_reports_status_Status::ERROR;
			break;
		}

		$titleMessage = $GLOBALS['LANG']->getLL('coreupdate_Hooks_Reports_VersionStatusProvider_' . $status['systemState'] . 'Title');
		$message      = '<p>' . $GLOBALS['LANG']->getLL('coreupdate_Hooks_Reports_VersionStatusProvider_' . $status['systemState']) . '</p>';
		$message     .= $GLOBALS['LANG']->getLL('coreupdate_Hooks_Reports_VersionStatusProvider_description');
		$message     .= '<a href="http://http://typo3.org/download/" target="_blank">Download</a> | <a href="http://wiki.typo3.org/TYPO3_' . $status['latest_installed_branch'] . '" target="_blank">Information</a>';

		return t3lib_div::makeInstance('tx_reports_reports_status_Status',
					'Latest TYPO3 Core Version of your branch',
					$status['latest_installed_branch'] . ' - ' . $titleMessage,
					$message,
					$versionState
				);
	}
}
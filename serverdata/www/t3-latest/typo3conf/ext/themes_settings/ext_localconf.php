<?php


if(TYPO3_MODE=='FE') {
	$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-output'][] = 'tx_ThemesSettings_Hooks_TsLibFeContentPostProcAllHook->contentPostProc_output';
}
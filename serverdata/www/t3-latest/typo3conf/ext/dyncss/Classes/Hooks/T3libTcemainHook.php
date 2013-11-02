<?php

class tx_dyncss_Hooks_T3libTcemainHook {
	function clearCachePostProc($params, &$pObj) {
		t3lib_div::rmdir(
			PATH_site . 'typo3temp/Cache/Data/DynCss',
			TRUE
		);
	}
}
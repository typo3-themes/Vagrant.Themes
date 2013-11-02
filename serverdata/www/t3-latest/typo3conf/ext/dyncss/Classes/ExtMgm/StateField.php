<?php

class tx_Dyncss_ExtMgm_Statefield {
	function main() {
		$buffer = '';
		$registry = t3lib_div::makeInstance('tx_DynCss_Configuration_BeRegistry');
		$handlers = $registry->getAllFileHandler();
		if(count($handlers)) {
			foreach($handlers as $extension => $class) {
				$buffer .= '<tr><td>*.' . $extension . '</td><td>' . $class . '</td></tr>';
			}
			$flashMessage = new t3lib_FlashMessage(
				'<table><cols><col width="70" /><col width="*"></cols>' . $buffer . '</table>',
				'Registered Handlers',
				t3lib_FlashMessage::OK
			);
		} else {
			$flashMessage = new t3lib_FlashMessage(
				'Please install one of the dyncss_* extensions',
				'No handler registered! - No dynamic css is handled at all ;/',
				t3lib_FlashMessage::ERROR
			);
		}
		return $flashMessage->render();
	}
}
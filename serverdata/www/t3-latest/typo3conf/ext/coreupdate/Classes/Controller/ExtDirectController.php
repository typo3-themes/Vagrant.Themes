<?php

require_once(dirname(__FILE__) . '/../Lib/Helper.php');

class tx_Coreupdate_Controller_ExtDirectController {
    /**
     * contains the extension key
     * @var string
     */
    protected $EXTKEY = 'coreupdate';
	public function isUpToDate() {
		return tx_Coreupdate_Lib_Helper::getInstance()->isUpToDate();
	}
}
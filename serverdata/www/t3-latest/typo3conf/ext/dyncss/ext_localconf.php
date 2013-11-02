<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2012 Kay Strobach <typo3@kay-strobach.de>
*
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * @author Kay Strobach
 * @package Less
 */
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
#if(TYPO3_MODE === 'BE') {
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][] = 'tx_Dyncss_Hooks_T3libPageRendererRenderPreProcessHook->execute';
#} elseif(TYPO3_MODE === 'FE') {
#	$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-all'][] = 'EXT:dyncss/Classes/Hooks/TslibFeContentPostProcAllHook.php:tx_Dyncss_TslibFeContentPostProcAllHook->main';
#}


// @todo ClearCacheActionsHookInterface
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc'][] = 'tx_dyncss_Hooks_T3libTcemainHook->clearCachePostProc';
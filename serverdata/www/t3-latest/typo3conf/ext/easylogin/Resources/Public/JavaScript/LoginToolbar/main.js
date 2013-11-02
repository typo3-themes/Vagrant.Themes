/***************************************************************
*  Copyright notice
*
*  (c) 2010 Kay Strobach (typo3@kay-strobach.de)
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
*  A copy is found in the textfile GPL.txt and important notices to the license
*  from the author is found in LICENSE.txt distributed with these scripts.
*
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * mod1/extjs.js
 *
 * backendviewport
 *
 * $Id$
 *
 * @author Kay Strobach <typo3@kay-strobach.de>
 */
/*******************************************************************************
 * Register Namespace
 * Initialize some vars 
 ******************************************************************************/ 	
	Ext.ns('TYPO3.Easylogin.Components');
/*******************************************************************************
 * create standard button
 ******************************************************************************/
	TYPO3.Easylogin.Components.LoginButton = Ext.extend(Ext.Button, {
		icon     :'gfx/typo3.png',
		cls      :'easylogin-toolbar-button',
		iconAlign: TYPO3.settings.easylogin.config.iconPlacement,
		//scale    :'medium',
		constructor: function(config) {
			config = Ext.apply({
				handler  :function() {
					TYPO3BackendLogin.switchToDefault();
					$('t3-username').value=this.username;
					$('t3-password').value=this.password;
					$('t3-login-submit').click();
				}
	        }, config);
			TYPO3.Easylogin.Components.LoginButton.superclass.constructor.call(this, config);
		}
	});
	Ext.reg('easylogin-loginbutton',TYPO3.Easylogin.Components.LoginButton);
/*******************************************************************************
 * create openid button
 ******************************************************************************/
	TYPO3.Easylogin.Components.LoginButtonOpenId = Ext.extend(TYPO3.Easylogin.Components.LoginButton, {
		icon     :'sysext/openid/ext_icon.gif',
		cls      :'easylogin-toolbar-button-openid',
		constructor: function(config) {
			config = Ext.apply({
				handler  :function() {
					TYPO3BackendLogin.switchToOpenId();
					$('t3-username').value=this.password;
					$('t3-password').value='';
					$('t3-login-submit').click();
				}
	        }, config);
			TYPO3.Easylogin.Components.LoginButtonOpenId.superclass.constructor.call(this, config);
		}
	});
	Ext.reg('easylogin-loginbutton-openid',TYPO3.Easylogin.Components.LoginButtonOpenId);
/*******************************************************************************
 * app
 ******************************************************************************/
	TYPO3.Easylogin.App = {
		init: function() {
			users = [
				{
					icon:'sysext/t3skin/icons/module_user.gif',
					cls :'noborder'
				}, '-'
			];
			users = users.concat(TYPO3.settings.easylogin.users);
			if(TYPO3.settings.easylogin.config.toolbarType == 'bottom') {
				toolbar = {
					autoScroll: true,
					bbar  : users,
					contentEl: Ext.DomQuery.selectNode('form')
				}
			} else {
				toolbar = {
					autoScroll: true,
					tbar  : users,
					contentEl: Ext.DomQuery.selectNode('form')
				}
			}
			
			this.viewport = new Ext.Viewport({
				layout: 'fit',
				items: [
					toolbar
				]
			});
		}
	}
/*******************************************************************************
 * initialization script - executed, after dom ready
 ******************************************************************************/
	Ext.onReady(function() {
		Ext.QuickTips.init();
		TYPO3.Easylogin.App.init();
	});
	
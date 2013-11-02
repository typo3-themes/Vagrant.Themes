/***************************************************************
*  Copyright notice
*
*  (c) 2008-2010 Kay Strobach <typo3@kay-strobach.de>
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
 *
 */
var coreupdate = Class.create({
	ajaxScript: 'ajax.php',
	menu: null,
	toolbarItemIcon: null,
	toolbarIcons: {
		'neutral'           : 'shield-blue.png',
		'error'             : 'shield-gray.png',
		'loading'           : 'shield-blue.png',
		'noUpdate'          : 'shield-green.png',
		'newSecurityUpdate' : 'shield-red.png',
		'newMinorUpdate'    : 'shield-yellow.png',
		'newMajorUpdate'    : 'shield-yellow.png'
	},
	/**
	 * registers for resize event listener and executes on DOM ready
	 */
	initialize: function() {
		Event.observe(window, 'resize', this.positionMenu);

		Ext.onReady(function() {
			this.positionMenu();
			this.toolbarItemIcon        = $$('#tx-coreupdate-menu .toolbar-item img.t3-icon')[0];
			this.resourceDirectory      = this.toolbarItemIcon.src;
			this.setIcon('neutral');
			this.ajaxScript             = top.TS.PATH_typo3 + this.ajaxScript; // can't be initialized earlier
			this.audioElem              =  $$('#coreupdateAudio')[0];

			Event.observe($$('#tx-coreupdate-menu .toolbar-item')[0], 'click', this.toggleMenu);
			this.menu     = $$('#tx-coreupdate-menu .toolbar-item-menu-dynamic')[0];
			this.menuItem = $$('#tx-coreupdate-menu')[0];

			this.menuTemplate = new Ext.XTemplate(
				'<div class="typo3-message message-{flashmessageClass}">'
					+ '<table>'
						+ '<colgroup><col width="50%" /><col width="50%" /></colgroup>'
						+ '<tr><td>Version installed</td><td><a href="http://wiki.typo3.org/TYPO3_{installed}" target="_blank">{installed}</a></td></tr>'
						+ '<tr><td>Latest Patch</td><td><a href="http://wiki.typo3.org/TYPO3_{latest_installed_branch}" target="_blank">{latest_installed_branch}</a></td></tr>'
					+ '</table>'
				+ '</div>'
				+ '<tpl if="systemState!=\'error\'">'
					+ '<div class="typo3-message message-notice">'
						+ '<table>'
							+ '<colgroup><col width="50%" /><col width="50%" /></colgroup>'
							+ '<tr><td>Latest Stable</td><td><a href="http://wiki.typo3.org/TYPO3_{latest_stable}" target="_blank">{latest_stable}</a></td></tr>'
							+ '<tr><td>LTS Stable</td><td><a href="http://wiki.typo3.org/TYPO3_{latest_lts}" target="_blank">{latest_lts}</a></td></tr>'
							+ '<tr class="dimmed"><td>Old Stable</td><td>{latest_old_stable}</td></tr>'
							+ '<tr class="dimmed"><td>Deprecated Stable</td><td>{latest_deprecated}</td></tr>'
						+ '</table>'
					+ '</div>'
				+'</tpl>'
			);

			this.updateMenu();

		}, this);
	},
	/**
	 * positions the menu below the toolbar icon, let's do some math!
	 */
	positionMenu: function() {
		var calculatedOffset = 0;
		var parentWidth      = $('tx-coreupdate-menu').getWidth();
		var currentToolbarItemLayer = $$('#tx-coreupdate-menu .toolbar-item-menu')[0];
		var ownWidth         = currentToolbarItemLayer.getWidth();
		var parentSiblings   = $('tx-coreupdate-menu').previousSiblings();

		parentSiblings.each(function(toolbarItem) {
			calculatedOffset += toolbarItem.getWidth() - 1;
			// -1 to compensate for the margin-right -1px of the list items,
			// which itself is necessary for overlaying the separator with the active state background

			if(toolbarItem.down().hasClassName('no-separator')) {
				calculatedOffset -= 1;
			}
		});
		calculatedOffset = calculatedOffset - ownWidth + parentWidth;

			// border correction
		if (currentToolbarItemLayer.getStyle('display') !== 'none') {
			calculatedOffset += 2;
		}

		$$('#tx-coreupdate-menu .toolbar-item-menu')[0].setStyle({
			left: calculatedOffset + 'px'
		});
	},

	/**
	 * toggles the visibility of the menu and places it under the toolbar icon
	 */
	toggleMenu: function(event) {
		var toolbarItem = $$('#tx-coreupdate-menu > a')[0];
		var menu        = $$('#tx-coreupdate-menu .toolbar-item-menu')[0];
		toolbarItem.blur();

		if(!toolbarItem.hasClassName('toolbar-item-active')) {
			toolbarItem.addClassName('toolbar-item-active');
			Effect.Appear(menu, {duration: 0.2});
			TYPO3BackendToolbarManager.hideOthers(toolbarItem);
		} else {
			toolbarItem.removeClassName('toolbar-item-active');
			Effect.Fade(menu, {duration: 0.1});
		}

		if(event) {
			Event.stop(event);
		}
	},

	/**
	 * displays the menu and does the AJAX call to the TYPO3 backend
	 */
	updateMenu: function() {
		$$('.toolbar-item-menu-dynamic')[0].update('Loading');
		this.setIcon('loading');
		TYPO3.Coreupdate.isUpToDate(this.updateMenuAjaxHandler, this);
	},
	setIcon: function(state) {
		if(this.toolbarIcons[state]) {
			return this.toolbarItemIcon.src = this.resourceDirectory + this.toolbarIcons[state];
		} else {
			return this.toolbarItemIcon.src = this.resourceDirectory + this.toolbarIcons['error'];
		}
	},
	/**
	 * handle ajax return
	 * @param state
	 */
	updateMenuAjaxHandler: function(state) {
		switch(state.systemState) {
			case 'error':
				TYPO3.Flashmessage.display(
					TYPO3.Severity.warning,
					'Error',
					state.message,
					5
				);
				state.flashmessageClass = 'error';
			break;
			case 'newSecurityUpdate':
				if(this.audioElem && this.audioElem.play) {
					this.audioElem.play();
				}
				TYPO3.Flashmessage.display(
					TYPO3.Severity.warning,
					'<a href="http://typo3.org/news/security-bulletins/">Security update available</a>',
					'Please take a look into the update notes.',
					12
				);
				state.flashmessageClass = 'warning';
				break;
			break;
			case 'newMinorUpdate':
			case 'newMajorUpdate':
				TYPO3.Flashmessage.display(
					TYPO3.Severity.information,
					'<a href="http://typo3.org/news/development/">Maintaince update available</a>',
					'Please take a look into the update notes.',
					5
				);
				state.flashmessageClass = 'information';
			case 'noUpdate':
				state.flashmessageClass = 'ok';
			default:
			break;
		}
		this.setIcon(state.systemState);
		this.renderMenuContent(state);
	},
	renderMenuContent: function (state) {
		this.menuTemplate.overwrite(this.menu, state);
	}
});

var TYPO3BackendCoreupdate = new coreupdate();

"use strict";

/** @namespace ThemesManager */

$(document).ready(function () {

});

/**
 * Format a string give a place holder. Acts as the "sprintf" function in PHP
 *
 * Example:
 *
 * "Foo {0}".format('Bar') will return "Foo Bar"
 *
 * @param {string} key
 */
ThemesManager.format = function (key) {
	var s = ThemesManager.translate(key),
		i = arguments.length + 1;

	while (i--) {
		s = s.replace(new RegExp('\\{' + i + '\\}', 'gm'), arguments[i + 1]);
	}
	return s;
};

/**
 * Shorthand method for getting a label.
 *
 * @param {string} key
 */
ThemesManager.translate = function (key) {
	return ThemesManager.Label.get(key);
};

/**
 * Merge second object into first one
 *
 * @param {object} set1
 * @param {object} set2
 * @return {object}
 */
ThemesManager.merge = function (set1, set2) {
	for (var key in set2) {
		if (set2.hasOwnProperty(key))
			set1[key] = set2[key]
	}
	return set1
};
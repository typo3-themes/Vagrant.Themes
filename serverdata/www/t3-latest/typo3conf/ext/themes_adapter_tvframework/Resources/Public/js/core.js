jQuery(document).ready(function(){
	jQuery('.moduleGroup').each(function(){
		resizeModuleGroup(this);
	});
});

function resizeModuleGroup(moduleGroupElement) {
	var groupHeight = jQuery(moduleGroupElement).height();
	if (jQuery(moduleGroupElement).children('.module:not(.unframed)').size() > 1) {
		jQuery(moduleGroupElement).children('.module:not(.unframed)').each(function(){
			var moduleHeaderHeight = jQuery(this).children('.moduleHeader').outerHeight(true);
			var moduleFooterHeight = jQuery(this).children('.moduleFooter').outerHeight(true);
			var moduleBodyWrapHeight = groupHeight - moduleHeaderHeight - moduleFooterHeight;
			jQuery(this).children('.moduleBodyWrap').height(moduleBodyWrapHeight + 'px');
		});
	}
}
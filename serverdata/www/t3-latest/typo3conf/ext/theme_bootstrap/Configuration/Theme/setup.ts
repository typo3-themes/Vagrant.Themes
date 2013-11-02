
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluidpages/Configuration/TypoScript/setup.txt">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:themes_fces_fluidcontent_basic/Configuration/TypoScript/setup.txt">

page {
	config {
		doctype = html5
	}
	#bodyTag = <body data-spy="scroll" data-target=".subnav" data-offset="50">
	includeCSS {
		#file1 = EXT:theme_bootstrap/Resources/Public/Contrib/bootstrap/less/bootstrap.less
		#file1 = EXT:theme_bootstrap/Resources/Public/Contrib/bootstrap/css/bootstrap.css
		file1 = {$plugin.tx_theme_bootstrap.bootstrapTheme}
		#file2 = EXT:theme_bootstrap/Resources/Public/Contrib/bootstrap/less/responsive.less
		file2 = EXT:theme_bootstrap/Resources/Public/Contrib/Bootstrap/css/bootstrap-responsive.min.css
		file3 = EXT:theme_bootstrap/Resources/Public/Stylesheets/main.css
	}
	includeJS {
		file1 = EXT:theme_bootstrap/Resources/Public/Contrib/Bootstrap/js/bootstrap.js
	}
}

includeLibs.t3jquery = EXT:t3jquery/class.tx_t3jquery.php
page.75 = USER
page.75.userFunc = tx_t3jquery->addJqJS

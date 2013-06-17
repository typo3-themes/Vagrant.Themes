<?php
class FluidCache_Fluidpages_Page_action_render_44a7917f59f57fed607359251978c4664244ef59 extends TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return 'FrontPage';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Configuration
 */
public function section_754164850f38c1ecdaf6b8ed894cb192bc36c5f4(TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
		';
// Rendering ViewHelper Tx_Flux_ViewHelpers_FlexformViewHelper
$arguments1 = array();
$arguments1['id'] = 'f1a';
$arguments1['label'] = 'F1a';
$arguments1['description'] = NULL;
$arguments1['icon'] = '../typo3conf/ext/flux/Resources/Public/Icons/Plugin.png';
$arguments1['mergeValues'] = false;
$arguments1['enabled'] = true;
$arguments1['wizardTab'] = 'FCE';
$arguments1['compact'] = false;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
			';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Flexform_Field_SelectViewHelper
$arguments4 = array();
$arguments4['name'] = 'settings.showHeaderInContent';
// Rendering Array
$array5 = array();
$array5['0'] = 'default';
$array5['1'] = 'on';
$array5['2'] = 'off';
$arguments4['items'] = $array5;
$arguments4['label'] = 'Page Title as Content Headline';
$arguments4['default'] = NULL;
$arguments4['required'] = false;
$arguments4['repeat'] = 1;
$arguments4['exclude'] = false;
$arguments4['transform'] = NULL;
$arguments4['enabled'] = true;
$arguments4['requestUpdate'] = NULL;
$arguments4['displayCond'] = NULL;
$arguments4['inherit'] = 99;
$arguments4['inheritEmpty'] = true;
$arguments4['clear'] = false;
$arguments4['validate'] = 'trim';
$arguments4['commaSeparatedItems'] = NULL;
$arguments4['size'] = 1;
$arguments4['multiple'] = false;
$arguments4['minItems'] = 0;
$arguments4['maxItems'] = 1;
$arguments4['table'] = NULL;
$arguments4['condition'] = NULL;
$arguments4['mm'] = NULL;
$arguments4['showThumbs'] = true;
$arguments4['itemsProcFunc'] = NULL;
$arguments4['suggest'] = false;
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper7 = $self->getViewHelper('$viewHelper7', $renderingContext, 'Tx_Flux_ViewHelpers_Flexform_Field_SelectViewHelper');
$viewHelper7->setArguments($arguments4);
$viewHelper7->setRenderingContext($renderingContext);
$viewHelper7->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper Tx_Flux_ViewHelpers_Flexform_Field_SelectViewHelper

$output3 .= $viewHelper7->initializeArgumentsAndRender();

$output3 .= '
			';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Flexform_Field_SelectViewHelper
$arguments8 = array();
$arguments8['name'] = 'settings.bleed';
// Rendering Array
$array9 = array();
$array9['0'] = 'default';
$array9['1'] = 'on';
$array9['2'] = 'off';
$arguments8['items'] = $array9;
$arguments8['label'] = 'Bleed Feature Content';
$arguments8['default'] = NULL;
$arguments8['required'] = false;
$arguments8['repeat'] = 1;
$arguments8['exclude'] = false;
$arguments8['transform'] = NULL;
$arguments8['enabled'] = true;
$arguments8['requestUpdate'] = NULL;
$arguments8['displayCond'] = NULL;
$arguments8['inherit'] = 99;
$arguments8['inheritEmpty'] = true;
$arguments8['clear'] = false;
$arguments8['validate'] = 'trim';
$arguments8['commaSeparatedItems'] = NULL;
$arguments8['size'] = 1;
$arguments8['multiple'] = false;
$arguments8['minItems'] = 0;
$arguments8['maxItems'] = 1;
$arguments8['table'] = NULL;
$arguments8['condition'] = NULL;
$arguments8['mm'] = NULL;
$arguments8['showThumbs'] = true;
$arguments8['itemsProcFunc'] = NULL;
$arguments8['suggest'] = false;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper11 = $self->getViewHelper('$viewHelper11', $renderingContext, 'Tx_Flux_ViewHelpers_Flexform_Field_SelectViewHelper');
$viewHelper11->setArguments($arguments8);
$viewHelper11->setRenderingContext($renderingContext);
$viewHelper11->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper Tx_Flux_ViewHelpers_Flexform_Field_SelectViewHelper

$output3 .= $viewHelper11->initializeArgumentsAndRender();

$output3 .= '
			';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Flexform_Field_SelectViewHelper
$arguments12 = array();
$arguments12['name'] = 'settings.navigations';
// Rendering Array
$array13 = array();
$array13['0'] = 'static top';
$array13['1'] = 'marketing speak';
$array13['2'] = 'marketing stuff';
$arguments12['items'] = $array13;
$arguments12['label'] = 'foo';
$arguments12['default'] = '1';
$arguments12['required'] = false;
$arguments12['repeat'] = 1;
$arguments12['exclude'] = false;
$arguments12['transform'] = NULL;
$arguments12['enabled'] = true;
$arguments12['requestUpdate'] = NULL;
$arguments12['displayCond'] = NULL;
$arguments12['inherit'] = 99;
$arguments12['inheritEmpty'] = true;
$arguments12['clear'] = false;
$arguments12['validate'] = 'trim';
$arguments12['commaSeparatedItems'] = NULL;
$arguments12['size'] = 1;
$arguments12['multiple'] = false;
$arguments12['minItems'] = 0;
$arguments12['maxItems'] = 1;
$arguments12['table'] = NULL;
$arguments12['condition'] = NULL;
$arguments12['mm'] = NULL;
$arguments12['showThumbs'] = true;
$arguments12['itemsProcFunc'] = NULL;
$arguments12['suggest'] = false;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'Tx_Flux_ViewHelpers_Flexform_Field_SelectViewHelper');
$viewHelper15->setArguments($arguments12);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper Tx_Flux_ViewHelpers_Flexform_Field_SelectViewHelper

$output3 .= $viewHelper15->initializeArgumentsAndRender();

$output3 .= '
			';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Flexform_GridViewHelper
$arguments16 = array();
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
				';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Flexform_Grid_RowViewHelper
$arguments19 = array();
$arguments19['repeat'] = 1;
$arguments19['iteration'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
					';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Flexform_Grid_ColumnViewHelper
$arguments22 = array();
$arguments22['colPos'] = '1';
$arguments22['name'] = 'Feature';
$arguments22['colspan'] = NULL;
$arguments22['rowspan'] = NULL;
$arguments22['repeat'] = 1;
$arguments22['width'] = NULL;
$arguments22['style'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'Tx_Flux_ViewHelpers_Flexform_Grid_ColumnViewHelper');
$viewHelper24->setArguments($arguments22);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper Tx_Flux_ViewHelpers_Flexform_Grid_ColumnViewHelper

$output21 .= $viewHelper24->initializeArgumentsAndRender();

$output21 .= '
				';
return $output21;
};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'Tx_Flux_ViewHelpers_Flexform_Grid_RowViewHelper');
$viewHelper25->setArguments($arguments19);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper Tx_Flux_ViewHelpers_Flexform_Grid_RowViewHelper

$output18 .= $viewHelper25->initializeArgumentsAndRender();

$output18 .= '
				';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Flexform_Grid_RowViewHelper
$arguments26 = array();
$arguments26['repeat'] = 1;
$arguments26['iteration'] = NULL;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
					';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Flexform_Grid_ColumnViewHelper
$arguments29 = array();
$arguments29['colPos'] = '0';
$arguments29['name'] = 'Main Content';
$arguments29['colspan'] = NULL;
$arguments29['rowspan'] = NULL;
$arguments29['repeat'] = 1;
$arguments29['width'] = NULL;
$arguments29['style'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'Tx_Flux_ViewHelpers_Flexform_Grid_ColumnViewHelper');
$viewHelper31->setArguments($arguments29);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper Tx_Flux_ViewHelpers_Flexform_Grid_ColumnViewHelper

$output28 .= $viewHelper31->initializeArgumentsAndRender();

$output28 .= '
				';
return $output28;
};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'Tx_Flux_ViewHelpers_Flexform_Grid_RowViewHelper');
$viewHelper32->setArguments($arguments26);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper Tx_Flux_ViewHelpers_Flexform_Grid_RowViewHelper

$output18 .= $viewHelper32->initializeArgumentsAndRender();

$output18 .= '
			';
return $output18;
};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'Tx_Flux_ViewHelpers_Flexform_GridViewHelper');
$viewHelper33->setArguments($arguments16);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper Tx_Flux_ViewHelpers_Flexform_GridViewHelper

$output3 .= $viewHelper33->initializeArgumentsAndRender();

$output3 .= '
		';
return $output3;
};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'Tx_Flux_ViewHelpers_FlexformViewHelper');
$viewHelper34->setArguments($arguments1);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper Tx_Flux_ViewHelpers_FlexformViewHelper

$output0 .= $viewHelper34->initializeArgumentsAndRender();

$output0 .= '
	';

return $output0;
}/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output35 = '';

$output35 .= '
		';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Var_SetViewHelper
$arguments36 = array();
$arguments36['name'] = 'headerLayout';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments37 = array();
$arguments37['typoscriptObjectPath'] = 'plugin.tx_themes_fces_fluidcontent_basic.settings.headerLayout';
$arguments37['data'] = NULL;
$arguments37['currentValueKey'] = NULL;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper39->setArguments($arguments37);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments36['value'] = $viewHelper39->initializeArgumentsAndRender();
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper41 = $self->getViewHelper('$viewHelper41', $renderingContext, 'Tx_Vhs_ViewHelpers_Var_SetViewHelper');
$viewHelper41->setArguments($arguments36);
$viewHelper41->setRenderingContext($renderingContext);
$viewHelper41->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper Tx_Vhs_ViewHelpers_Var_SetViewHelper

$output35 .= $viewHelper41->initializeArgumentsAndRender();

$output35 .= '

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments42 = array();
// Rendering Boolean node
$arguments42['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'headerLayout', $renderingContext), '0');
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
			<div id="navbar" class="navbar navbar-inverse navbar-static-top">
				<div class="navbar-inner">
					<div class="container navbar-static-top">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments45 = array();
// Rendering Boolean node
$arguments45['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.enableSearch', $renderingContext));
$arguments45['then'] = NULL;
$arguments45['else'] = NULL;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
							<form class="navbar-search pull-right" method="get" action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$arguments48 = array();
$arguments48['pageUid'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.searchPageUid', $renderingContext);
$arguments48['additionalParams'] = array (
);
$arguments48['pageType'] = 0;
$arguments48['noCache'] = false;
$arguments48['noCacheHash'] = false;
$arguments48['section'] = '';
$arguments48['linkAccessRestrictedPages'] = false;
$arguments48['absolute'] = false;
$arguments48['addQueryString'] = false;
$arguments48['argumentsToBeExcludedFromQueryString'] = array (
);
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper');
$viewHelper50->setArguments($arguments48);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure49);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper

$output47 .= $viewHelper50->initializeArgumentsAndRender();

$output47 .= '">
								<div class="input-append">
									<input id="main-search-field" type="text" name="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments51 = array();
$arguments51['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.searchFieldName', $renderingContext);
$arguments51['keepQuotes'] = false;
$arguments51['encoding'] = NULL;
$arguments51['doubleEncode'] = true;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$value53 = ($arguments51['value'] !== NULL ? $arguments51['value'] : $renderChildrenClosure52());

$output47 .= (!is_string($value53) ? $value53 : htmlspecialchars($value53, ($arguments51['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments51['encoding'] !== NULL ? $arguments51['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments51['doubleEncode']));

$output47 .= '" class="input-nav" tabindex="2" placeholder="Search" /><button tabindex="3" type="submit" class="btn btn-inverse"><i class="icon-search"></i></button>
								</div>
							</form>
						';
return $output47;
};
$viewHelper54 = $self->getViewHelper('$viewHelper54', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper54->setArguments($arguments45);
$viewHelper54->setRenderingContext($renderingContext);
$viewHelper54->setRenderChildrenClosure($renderChildrenClosure46);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output44 .= $viewHelper54->initializeArgumentsAndRender();

$output44 .= '
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<a class="brand" href="';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Site_UrlViewHelper
$arguments55 = array();
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'Tx_Vhs_ViewHelpers_Site_UrlViewHelper');
$viewHelper57->setArguments($arguments55);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure56);
// End of ViewHelper Tx_Vhs_ViewHelpers_Site_UrlViewHelper

$output44 .= $viewHelper57->initializeArgumentsAndRender();

$output44 .= '">';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Site_NameViewHelper
$arguments58 = array();
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'Tx_Vhs_ViewHelpers_Site_NameViewHelper');
$viewHelper60->setArguments($arguments58);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper Tx_Vhs_ViewHelpers_Site_NameViewHelper

$output44 .= $viewHelper60->initializeArgumentsAndRender();

$output44 .= '</a>
						';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Page_MenuViewHelper
$arguments61 = array();
$arguments61['entryLevel'] = '1';
// Rendering Boolean node
$arguments61['useShortcutData'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments61['additionalAttributes'] = NULL;
$arguments61['class'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$arguments61['tagName'] = 'ul';
$arguments61['tagNameChildren'] = 'li';
$arguments61['levels'] = 1;
$arguments61['divider'] = NULL;
$arguments61['expandAll'] = false;
$arguments61['classActive'] = 'active';
$arguments61['classCurrent'] = 'current';
$arguments61['classHasSubpages'] = 'sub';
$arguments61['useShortcutTarget'] = false;
$arguments61['useShortcutUid'] = false;
$arguments61['classFirst'] = '';
$arguments61['classLast'] = '';
$arguments61['substElementUid'] = '';
$arguments61['includeSpacers'] = false;
$arguments61['bullet'] = NULL;
$arguments61['resolveExclude'] = false;
$arguments61['showHidden'] = false;
$arguments61['showCurrent'] = true;
$arguments61['linkCurrent'] = true;
$arguments61['linkActive'] = true;
$arguments61['titleFields'] = 'nav_title,title';
$arguments61['doktypes'] = NULL;
$arguments61['excludeSubpageTypes'] = 'SYSFOLDER';
$arguments61['deferred'] = false;
$arguments61['pageUid'] = NULL;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
							<div class="nav-collapse collapse">
								<ul class="nav">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments64 = array();
$arguments64['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'menu', $renderingContext);
$arguments64['as'] = 'mainPage';
$arguments64['iteration'] = 'iteration';
$arguments64['key'] = '';
$arguments64['reverse'] = false;
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
										<li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments67 = array();
$arguments67['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.class', $renderingContext);
$arguments67['keepQuotes'] = false;
$arguments67['encoding'] = NULL;
$arguments67['doubleEncode'] = true;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$value69 = ($arguments67['value'] !== NULL ? $arguments67['value'] : $renderChildrenClosure68());

$output66 .= (!is_string($value69) ? $value69 : htmlspecialchars($value69, ($arguments67['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments67['encoding'] !== NULL ? $arguments67['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments67['doubleEncode']));

$output66 .= '"><a tabindex="';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Math_SumViewHelper
$arguments70 = array();
$arguments70['b'] = '100';
$arguments70['a'] = NULL;
$arguments70['fail'] = false;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments72 = array();
$arguments72['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'iteration.cycle', $renderingContext);
$arguments72['keepQuotes'] = false;
$arguments72['encoding'] = NULL;
$arguments72['doubleEncode'] = true;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$value74 = ($arguments72['value'] !== NULL ? $arguments72['value'] : $renderChildrenClosure73());
return (!is_string($value74) ? $value74 : htmlspecialchars($value74, ($arguments72['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments72['encoding'] !== NULL ? $arguments72['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments72['doubleEncode']));
};
$viewHelper75 = $self->getViewHelper('$viewHelper75', $renderingContext, 'Tx_Vhs_ViewHelpers_Math_SumViewHelper');
$viewHelper75->setArguments($arguments70);
$viewHelper75->setRenderingContext($renderingContext);
$viewHelper75->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper Tx_Vhs_ViewHelpers_Math_SumViewHelper

$output66 .= $viewHelper75->initializeArgumentsAndRender();

$output66 .= '" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments76 = array();
$arguments76['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.link', $renderingContext);
$arguments76['keepQuotes'] = false;
$arguments76['encoding'] = NULL;
$arguments76['doubleEncode'] = true;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$value78 = ($arguments76['value'] !== NULL ? $arguments76['value'] : $renderChildrenClosure77());

$output66 .= (!is_string($value78) ? $value78 : htmlspecialchars($value78, ($arguments76['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments76['encoding'] !== NULL ? $arguments76['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments76['doubleEncode']));

$output66 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments79 = array();
$arguments79['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.class', $renderingContext);
$arguments79['keepQuotes'] = false;
$arguments79['encoding'] = NULL;
$arguments79['doubleEncode'] = true;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$value81 = ($arguments79['value'] !== NULL ? $arguments79['value'] : $renderChildrenClosure80());

$output66 .= (!is_string($value81) ? $value81 : htmlspecialchars($value81, ($arguments79['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments79['encoding'] !== NULL ? $arguments79['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments79['doubleEncode']));

$output66 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments82 = array();
$arguments82['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.title', $renderingContext);
$arguments82['keepQuotes'] = false;
$arguments82['encoding'] = NULL;
$arguments82['doubleEncode'] = true;
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$value84 = ($arguments82['value'] !== NULL ? $arguments82['value'] : $renderChildrenClosure83());

$output66 .= (!is_string($value84) ? $value84 : htmlspecialchars($value84, ($arguments82['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments82['encoding'] !== NULL ? $arguments82['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments82['doubleEncode']));

$output66 .= '</a></li>
									';
return $output66;
};

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
								</ul>
							</div>
						';
return $output63;
};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'Tx_Vhs_ViewHelpers_Page_MenuViewHelper');
$viewHelper85->setArguments($arguments61);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure62);
// End of ViewHelper Tx_Vhs_ViewHelpers_Page_MenuViewHelper

$output44 .= $viewHelper85->initializeArgumentsAndRender();

$output44 .= '
					</div>
				</div>
			</div>
		';
return $output44;
};
$viewHelper86 = $self->getViewHelper('$viewHelper86', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper86->setArguments($arguments42);
$viewHelper86->setRenderingContext($renderingContext);
$viewHelper86->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output35 .= $viewHelper86->initializeArgumentsAndRender();

$output35 .= '

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments87 = array();
// Rendering Boolean node
$arguments87['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'headerLayout', $renderingContext), '1');
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
			<div class="container">
				<div class="masthead">
					';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Page_MenuViewHelper
$arguments90 = array();
$arguments90['entryLevel'] = '1';
// Rendering Boolean node
$arguments90['useShortcutData'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments90['additionalAttributes'] = NULL;
$arguments90['class'] = NULL;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['title'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$arguments90['tagName'] = 'ul';
$arguments90['tagNameChildren'] = 'li';
$arguments90['levels'] = 1;
$arguments90['divider'] = NULL;
$arguments90['expandAll'] = false;
$arguments90['classActive'] = 'active';
$arguments90['classCurrent'] = 'current';
$arguments90['classHasSubpages'] = 'sub';
$arguments90['useShortcutTarget'] = false;
$arguments90['useShortcutUid'] = false;
$arguments90['classFirst'] = '';
$arguments90['classLast'] = '';
$arguments90['substElementUid'] = '';
$arguments90['includeSpacers'] = false;
$arguments90['bullet'] = NULL;
$arguments90['resolveExclude'] = false;
$arguments90['showHidden'] = false;
$arguments90['showCurrent'] = true;
$arguments90['linkCurrent'] = true;
$arguments90['linkActive'] = true;
$arguments90['titleFields'] = 'nav_title,title';
$arguments90['doktypes'] = NULL;
$arguments90['excludeSubpageTypes'] = 'SYSFOLDER';
$arguments90['deferred'] = false;
$arguments90['pageUid'] = NULL;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
						<ul class="nav nav-pills pull-right">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments93 = array();
$arguments93['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'menu', $renderingContext);
$arguments93['as'] = 'mainPage';
$arguments93['iteration'] = 'iteration';
$arguments93['key'] = '';
$arguments93['reverse'] = false;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
								<li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments96 = array();
$arguments96['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.class', $renderingContext);
$arguments96['keepQuotes'] = false;
$arguments96['encoding'] = NULL;
$arguments96['doubleEncode'] = true;
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$value98 = ($arguments96['value'] !== NULL ? $arguments96['value'] : $renderChildrenClosure97());

$output95 .= (!is_string($value98) ? $value98 : htmlspecialchars($value98, ($arguments96['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments96['encoding'] !== NULL ? $arguments96['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments96['doubleEncode']));

$output95 .= '"><a tabindex="';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Math_SumViewHelper
$arguments99 = array();
$arguments99['b'] = '100';
$arguments99['a'] = NULL;
$arguments99['fail'] = false;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments101 = array();
$arguments101['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'iteration.cycle', $renderingContext);
$arguments101['keepQuotes'] = false;
$arguments101['encoding'] = NULL;
$arguments101['doubleEncode'] = true;
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$value103 = ($arguments101['value'] !== NULL ? $arguments101['value'] : $renderChildrenClosure102());
return (!is_string($value103) ? $value103 : htmlspecialchars($value103, ($arguments101['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments101['encoding'] !== NULL ? $arguments101['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments101['doubleEncode']));
};
$viewHelper104 = $self->getViewHelper('$viewHelper104', $renderingContext, 'Tx_Vhs_ViewHelpers_Math_SumViewHelper');
$viewHelper104->setArguments($arguments99);
$viewHelper104->setRenderingContext($renderingContext);
$viewHelper104->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper Tx_Vhs_ViewHelpers_Math_SumViewHelper

$output95 .= $viewHelper104->initializeArgumentsAndRender();

$output95 .= '" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments105 = array();
$arguments105['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.link', $renderingContext);
$arguments105['keepQuotes'] = false;
$arguments105['encoding'] = NULL;
$arguments105['doubleEncode'] = true;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$value107 = ($arguments105['value'] !== NULL ? $arguments105['value'] : $renderChildrenClosure106());

$output95 .= (!is_string($value107) ? $value107 : htmlspecialchars($value107, ($arguments105['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments105['encoding'] !== NULL ? $arguments105['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments105['doubleEncode']));

$output95 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments108 = array();
$arguments108['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.class', $renderingContext);
$arguments108['keepQuotes'] = false;
$arguments108['encoding'] = NULL;
$arguments108['doubleEncode'] = true;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$value110 = ($arguments108['value'] !== NULL ? $arguments108['value'] : $renderChildrenClosure109());

$output95 .= (!is_string($value110) ? $value110 : htmlspecialchars($value110, ($arguments108['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments108['encoding'] !== NULL ? $arguments108['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments108['doubleEncode']));

$output95 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments111 = array();
$arguments111['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.title', $renderingContext);
$arguments111['keepQuotes'] = false;
$arguments111['encoding'] = NULL;
$arguments111['doubleEncode'] = true;
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$value113 = ($arguments111['value'] !== NULL ? $arguments111['value'] : $renderChildrenClosure112());

$output95 .= (!is_string($value113) ? $value113 : htmlspecialchars($value113, ($arguments111['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments111['encoding'] !== NULL ? $arguments111['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments111['doubleEncode']));

$output95 .= '</a></li>
							';
return $output95;
};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
						</ul>
					';
return $output92;
};
$viewHelper114 = $self->getViewHelper('$viewHelper114', $renderingContext, 'Tx_Vhs_ViewHelpers_Page_MenuViewHelper');
$viewHelper114->setArguments($arguments90);
$viewHelper114->setRenderingContext($renderingContext);
$viewHelper114->setRenderChildrenClosure($renderChildrenClosure91);
// End of ViewHelper Tx_Vhs_ViewHelpers_Page_MenuViewHelper

$output89 .= $viewHelper114->initializeArgumentsAndRender();

$output89 .= '
					<h3 class="muted">';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Site_NameViewHelper
$arguments115 = array();
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper117 = $self->getViewHelper('$viewHelper117', $renderingContext, 'Tx_Vhs_ViewHelpers_Site_NameViewHelper');
$viewHelper117->setArguments($arguments115);
$viewHelper117->setRenderingContext($renderingContext);
$viewHelper117->setRenderChildrenClosure($renderChildrenClosure116);
// End of ViewHelper Tx_Vhs_ViewHelpers_Site_NameViewHelper

$output89 .= $viewHelper117->initializeArgumentsAndRender();

$output89 .= '</h3>
				</div>
				<hr />
			</div>
		';
return $output89;
};
$viewHelper118 = $self->getViewHelper('$viewHelper118', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper118->setArguments($arguments87);
$viewHelper118->setRenderingContext($renderingContext);
$viewHelper118->setRenderChildrenClosure($renderChildrenClosure88);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output35 .= $viewHelper118->initializeArgumentsAndRender();

$output35 .= '

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments119 = array();
// Rendering Boolean node
$arguments119['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'headerLayout', $renderingContext), '2');
$arguments119['then'] = NULL;
$arguments119['else'] = NULL;
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
			<div class="container">
				<h3 class="muted">';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Site_NameViewHelper
$arguments122 = array();
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper124 = $self->getViewHelper('$viewHelper124', $renderingContext, 'Tx_Vhs_ViewHelpers_Site_NameViewHelper');
$viewHelper124->setArguments($arguments122);
$viewHelper124->setRenderingContext($renderingContext);
$viewHelper124->setRenderChildrenClosure($renderChildrenClosure123);
// End of ViewHelper Tx_Vhs_ViewHelpers_Site_NameViewHelper

$output121 .= $viewHelper124->initializeArgumentsAndRender();

$output121 .= '</h3>

				<div class="navbar">
					<div class="navbar-inner">
						';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Page_MenuViewHelper
$arguments125 = array();
$arguments125['entryLevel'] = '1';
// Rendering Boolean node
$arguments125['useShortcutData'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments125['additionalAttributes'] = NULL;
$arguments125['class'] = NULL;
$arguments125['dir'] = NULL;
$arguments125['id'] = NULL;
$arguments125['lang'] = NULL;
$arguments125['style'] = NULL;
$arguments125['title'] = NULL;
$arguments125['accesskey'] = NULL;
$arguments125['tabindex'] = NULL;
$arguments125['onclick'] = NULL;
$arguments125['tagName'] = 'ul';
$arguments125['tagNameChildren'] = 'li';
$arguments125['levels'] = 1;
$arguments125['divider'] = NULL;
$arguments125['expandAll'] = false;
$arguments125['classActive'] = 'active';
$arguments125['classCurrent'] = 'current';
$arguments125['classHasSubpages'] = 'sub';
$arguments125['useShortcutTarget'] = false;
$arguments125['useShortcutUid'] = false;
$arguments125['classFirst'] = '';
$arguments125['classLast'] = '';
$arguments125['substElementUid'] = '';
$arguments125['includeSpacers'] = false;
$arguments125['bullet'] = NULL;
$arguments125['resolveExclude'] = false;
$arguments125['showHidden'] = false;
$arguments125['showCurrent'] = true;
$arguments125['linkCurrent'] = true;
$arguments125['linkActive'] = true;
$arguments125['titleFields'] = 'nav_title,title';
$arguments125['doktypes'] = NULL;
$arguments125['excludeSubpageTypes'] = 'SYSFOLDER';
$arguments125['deferred'] = false;
$arguments125['pageUid'] = NULL;
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
							<ul class="nav">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments128 = array();
$arguments128['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'menu', $renderingContext);
$arguments128['as'] = 'mainPage';
$arguments128['iteration'] = 'iteration';
$arguments128['key'] = '';
$arguments128['reverse'] = false;
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
									<li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments131 = array();
$arguments131['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.class', $renderingContext);
$arguments131['keepQuotes'] = false;
$arguments131['encoding'] = NULL;
$arguments131['doubleEncode'] = true;
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$value133 = ($arguments131['value'] !== NULL ? $arguments131['value'] : $renderChildrenClosure132());

$output130 .= (!is_string($value133) ? $value133 : htmlspecialchars($value133, ($arguments131['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments131['encoding'] !== NULL ? $arguments131['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments131['doubleEncode']));

$output130 .= '"><a tabindex="';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Math_SumViewHelper
$arguments134 = array();
$arguments134['b'] = '100';
$arguments134['a'] = NULL;
$arguments134['fail'] = false;
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments136 = array();
$arguments136['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'iteration.cycle', $renderingContext);
$arguments136['keepQuotes'] = false;
$arguments136['encoding'] = NULL;
$arguments136['doubleEncode'] = true;
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$value138 = ($arguments136['value'] !== NULL ? $arguments136['value'] : $renderChildrenClosure137());
return (!is_string($value138) ? $value138 : htmlspecialchars($value138, ($arguments136['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments136['encoding'] !== NULL ? $arguments136['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments136['doubleEncode']));
};
$viewHelper139 = $self->getViewHelper('$viewHelper139', $renderingContext, 'Tx_Vhs_ViewHelpers_Math_SumViewHelper');
$viewHelper139->setArguments($arguments134);
$viewHelper139->setRenderingContext($renderingContext);
$viewHelper139->setRenderChildrenClosure($renderChildrenClosure135);
// End of ViewHelper Tx_Vhs_ViewHelpers_Math_SumViewHelper

$output130 .= $viewHelper139->initializeArgumentsAndRender();

$output130 .= '" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments140 = array();
$arguments140['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.link', $renderingContext);
$arguments140['keepQuotes'] = false;
$arguments140['encoding'] = NULL;
$arguments140['doubleEncode'] = true;
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$value142 = ($arguments140['value'] !== NULL ? $arguments140['value'] : $renderChildrenClosure141());

$output130 .= (!is_string($value142) ? $value142 : htmlspecialchars($value142, ($arguments140['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments140['encoding'] !== NULL ? $arguments140['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments140['doubleEncode']));

$output130 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments143 = array();
$arguments143['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.class', $renderingContext);
$arguments143['keepQuotes'] = false;
$arguments143['encoding'] = NULL;
$arguments143['doubleEncode'] = true;
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$value145 = ($arguments143['value'] !== NULL ? $arguments143['value'] : $renderChildrenClosure144());

$output130 .= (!is_string($value145) ? $value145 : htmlspecialchars($value145, ($arguments143['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments143['encoding'] !== NULL ? $arguments143['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments143['doubleEncode']));

$output130 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments146 = array();
$arguments146['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.title', $renderingContext);
$arguments146['keepQuotes'] = false;
$arguments146['encoding'] = NULL;
$arguments146['doubleEncode'] = true;
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$value148 = ($arguments146['value'] !== NULL ? $arguments146['value'] : $renderChildrenClosure147());

$output130 .= (!is_string($value148) ? $value148 : htmlspecialchars($value148, ($arguments146['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments146['encoding'] !== NULL ? $arguments146['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments146['doubleEncode']));

$output130 .= '</a></li>
								';
return $output130;
};

$output127 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output127 .= '
							</ul>
						';
return $output127;
};
$viewHelper149 = $self->getViewHelper('$viewHelper149', $renderingContext, 'Tx_Vhs_ViewHelpers_Page_MenuViewHelper');
$viewHelper149->setArguments($arguments125);
$viewHelper149->setRenderingContext($renderingContext);
$viewHelper149->setRenderChildrenClosure($renderChildrenClosure126);
// End of ViewHelper Tx_Vhs_ViewHelpers_Page_MenuViewHelper

$output121 .= $viewHelper149->initializeArgumentsAndRender();

$output121 .= '
					</div>
				</div>
			</div>
		';
return $output121;
};
$viewHelper150 = $self->getViewHelper('$viewHelper150', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper150->setArguments($arguments119);
$viewHelper150->setRenderingContext($renderingContext);
$viewHelper150->setRenderChildrenClosure($renderChildrenClosure120);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output35 .= $viewHelper150->initializeArgumentsAndRender();

$output35 .= '

		<div class="container">

			<!-- main content output - default rendering -->
			';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Page_Content_RenderViewHelper
$arguments151 = array();
$arguments151['column'] = '0';
$arguments151['limit'] = NULL;
$arguments151['order'] = 'sorting';
$arguments151['sortDirection'] = 'ASC';
$arguments151['pageUid'] = NULL;
$arguments151['contentUids'] = NULL;
$arguments151['slide'] = 0;
$arguments151['slideCollect'] = 0;
$arguments151['slideCollectReverse'] = 0;
$arguments151['loadRegister'] = NULL;
$arguments151['render'] = true;
$arguments151['as'] = NULL;
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper153 = $self->getViewHelper('$viewHelper153', $renderingContext, 'Tx_Vhs_ViewHelpers_Page_Content_RenderViewHelper');
$viewHelper153->setArguments($arguments151);
$viewHelper153->setRenderingContext($renderingContext);
$viewHelper153->setRenderChildrenClosure($renderChildrenClosure152);
// End of ViewHelper Tx_Vhs_ViewHelpers_Page_Content_RenderViewHelper

$output35 .= $viewHelper153->initializeArgumentsAndRender();

$output35 .= '

		</div>
	';

return $output35;
}/**
 * Main Render function
 */
public function render(TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output154 = '';

$output154 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments155 = array();
$arguments155['name'] = 'FrontPage';
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper157 = $self->getViewHelper('$viewHelper157', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper157->setArguments($arguments155);
$viewHelper157->setRenderingContext($renderingContext);
$viewHelper157->setRenderChildrenClosure($renderChildrenClosure156);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output154 .= $viewHelper157->initializeArgumentsAndRender();

$output154 .= '
<div xmlns="http://www.w3.org/1999/xhtml" lang="en"
	 xmlns:v="http://fedext.net/ns/vhs/ViewHelpers"
	 xmlns:flux="http://fedext.net/ns/flux/ViewHelpers"
	 xmlns:f="http://typo3.org/ns/fluid/ViewHelpers">

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments158 = array();
$arguments158['name'] = 'Configuration';
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
		';
// Rendering ViewHelper Tx_Flux_ViewHelpers_FlexformViewHelper
$arguments161 = array();
$arguments161['id'] = 'f1a';
$arguments161['label'] = 'F1a';
$arguments161['description'] = NULL;
$arguments161['icon'] = '../typo3conf/ext/flux/Resources/Public/Icons/Plugin.png';
$arguments161['mergeValues'] = false;
$arguments161['enabled'] = true;
$arguments161['wizardTab'] = 'FCE';
$arguments161['compact'] = false;
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
			';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Flexform_Field_SelectViewHelper
$arguments164 = array();
$arguments164['name'] = 'settings.showHeaderInContent';
// Rendering Array
$array165 = array();
$array165['0'] = 'default';
$array165['1'] = 'on';
$array165['2'] = 'off';
$arguments164['items'] = $array165;
$arguments164['label'] = 'Page Title as Content Headline';
$arguments164['default'] = NULL;
$arguments164['required'] = false;
$arguments164['repeat'] = 1;
$arguments164['exclude'] = false;
$arguments164['transform'] = NULL;
$arguments164['enabled'] = true;
$arguments164['requestUpdate'] = NULL;
$arguments164['displayCond'] = NULL;
$arguments164['inherit'] = 99;
$arguments164['inheritEmpty'] = true;
$arguments164['clear'] = false;
$arguments164['validate'] = 'trim';
$arguments164['commaSeparatedItems'] = NULL;
$arguments164['size'] = 1;
$arguments164['multiple'] = false;
$arguments164['minItems'] = 0;
$arguments164['maxItems'] = 1;
$arguments164['table'] = NULL;
$arguments164['condition'] = NULL;
$arguments164['mm'] = NULL;
$arguments164['showThumbs'] = true;
$arguments164['itemsProcFunc'] = NULL;
$arguments164['suggest'] = false;
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper167 = $self->getViewHelper('$viewHelper167', $renderingContext, 'Tx_Flux_ViewHelpers_Flexform_Field_SelectViewHelper');
$viewHelper167->setArguments($arguments164);
$viewHelper167->setRenderingContext($renderingContext);
$viewHelper167->setRenderChildrenClosure($renderChildrenClosure166);
// End of ViewHelper Tx_Flux_ViewHelpers_Flexform_Field_SelectViewHelper

$output163 .= $viewHelper167->initializeArgumentsAndRender();

$output163 .= '
			';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Flexform_Field_SelectViewHelper
$arguments168 = array();
$arguments168['name'] = 'settings.bleed';
// Rendering Array
$array169 = array();
$array169['0'] = 'default';
$array169['1'] = 'on';
$array169['2'] = 'off';
$arguments168['items'] = $array169;
$arguments168['label'] = 'Bleed Feature Content';
$arguments168['default'] = NULL;
$arguments168['required'] = false;
$arguments168['repeat'] = 1;
$arguments168['exclude'] = false;
$arguments168['transform'] = NULL;
$arguments168['enabled'] = true;
$arguments168['requestUpdate'] = NULL;
$arguments168['displayCond'] = NULL;
$arguments168['inherit'] = 99;
$arguments168['inheritEmpty'] = true;
$arguments168['clear'] = false;
$arguments168['validate'] = 'trim';
$arguments168['commaSeparatedItems'] = NULL;
$arguments168['size'] = 1;
$arguments168['multiple'] = false;
$arguments168['minItems'] = 0;
$arguments168['maxItems'] = 1;
$arguments168['table'] = NULL;
$arguments168['condition'] = NULL;
$arguments168['mm'] = NULL;
$arguments168['showThumbs'] = true;
$arguments168['itemsProcFunc'] = NULL;
$arguments168['suggest'] = false;
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper171 = $self->getViewHelper('$viewHelper171', $renderingContext, 'Tx_Flux_ViewHelpers_Flexform_Field_SelectViewHelper');
$viewHelper171->setArguments($arguments168);
$viewHelper171->setRenderingContext($renderingContext);
$viewHelper171->setRenderChildrenClosure($renderChildrenClosure170);
// End of ViewHelper Tx_Flux_ViewHelpers_Flexform_Field_SelectViewHelper

$output163 .= $viewHelper171->initializeArgumentsAndRender();

$output163 .= '
			';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Flexform_Field_SelectViewHelper
$arguments172 = array();
$arguments172['name'] = 'settings.navigations';
// Rendering Array
$array173 = array();
$array173['0'] = 'static top';
$array173['1'] = 'marketing speak';
$array173['2'] = 'marketing stuff';
$arguments172['items'] = $array173;
$arguments172['label'] = 'foo';
$arguments172['default'] = '1';
$arguments172['required'] = false;
$arguments172['repeat'] = 1;
$arguments172['exclude'] = false;
$arguments172['transform'] = NULL;
$arguments172['enabled'] = true;
$arguments172['requestUpdate'] = NULL;
$arguments172['displayCond'] = NULL;
$arguments172['inherit'] = 99;
$arguments172['inheritEmpty'] = true;
$arguments172['clear'] = false;
$arguments172['validate'] = 'trim';
$arguments172['commaSeparatedItems'] = NULL;
$arguments172['size'] = 1;
$arguments172['multiple'] = false;
$arguments172['minItems'] = 0;
$arguments172['maxItems'] = 1;
$arguments172['table'] = NULL;
$arguments172['condition'] = NULL;
$arguments172['mm'] = NULL;
$arguments172['showThumbs'] = true;
$arguments172['itemsProcFunc'] = NULL;
$arguments172['suggest'] = false;
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper175 = $self->getViewHelper('$viewHelper175', $renderingContext, 'Tx_Flux_ViewHelpers_Flexform_Field_SelectViewHelper');
$viewHelper175->setArguments($arguments172);
$viewHelper175->setRenderingContext($renderingContext);
$viewHelper175->setRenderChildrenClosure($renderChildrenClosure174);
// End of ViewHelper Tx_Flux_ViewHelpers_Flexform_Field_SelectViewHelper

$output163 .= $viewHelper175->initializeArgumentsAndRender();

$output163 .= '
			';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Flexform_GridViewHelper
$arguments176 = array();
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
				';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Flexform_Grid_RowViewHelper
$arguments179 = array();
$arguments179['repeat'] = 1;
$arguments179['iteration'] = NULL;
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
					';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Flexform_Grid_ColumnViewHelper
$arguments182 = array();
$arguments182['colPos'] = '1';
$arguments182['name'] = 'Feature';
$arguments182['colspan'] = NULL;
$arguments182['rowspan'] = NULL;
$arguments182['repeat'] = 1;
$arguments182['width'] = NULL;
$arguments182['style'] = NULL;
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper184 = $self->getViewHelper('$viewHelper184', $renderingContext, 'Tx_Flux_ViewHelpers_Flexform_Grid_ColumnViewHelper');
$viewHelper184->setArguments($arguments182);
$viewHelper184->setRenderingContext($renderingContext);
$viewHelper184->setRenderChildrenClosure($renderChildrenClosure183);
// End of ViewHelper Tx_Flux_ViewHelpers_Flexform_Grid_ColumnViewHelper

$output181 .= $viewHelper184->initializeArgumentsAndRender();

$output181 .= '
				';
return $output181;
};
$viewHelper185 = $self->getViewHelper('$viewHelper185', $renderingContext, 'Tx_Flux_ViewHelpers_Flexform_Grid_RowViewHelper');
$viewHelper185->setArguments($arguments179);
$viewHelper185->setRenderingContext($renderingContext);
$viewHelper185->setRenderChildrenClosure($renderChildrenClosure180);
// End of ViewHelper Tx_Flux_ViewHelpers_Flexform_Grid_RowViewHelper

$output178 .= $viewHelper185->initializeArgumentsAndRender();

$output178 .= '
				';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Flexform_Grid_RowViewHelper
$arguments186 = array();
$arguments186['repeat'] = 1;
$arguments186['iteration'] = NULL;
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
					';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Flexform_Grid_ColumnViewHelper
$arguments189 = array();
$arguments189['colPos'] = '0';
$arguments189['name'] = 'Main Content';
$arguments189['colspan'] = NULL;
$arguments189['rowspan'] = NULL;
$arguments189['repeat'] = 1;
$arguments189['width'] = NULL;
$arguments189['style'] = NULL;
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper191 = $self->getViewHelper('$viewHelper191', $renderingContext, 'Tx_Flux_ViewHelpers_Flexform_Grid_ColumnViewHelper');
$viewHelper191->setArguments($arguments189);
$viewHelper191->setRenderingContext($renderingContext);
$viewHelper191->setRenderChildrenClosure($renderChildrenClosure190);
// End of ViewHelper Tx_Flux_ViewHelpers_Flexform_Grid_ColumnViewHelper

$output188 .= $viewHelper191->initializeArgumentsAndRender();

$output188 .= '
				';
return $output188;
};
$viewHelper192 = $self->getViewHelper('$viewHelper192', $renderingContext, 'Tx_Flux_ViewHelpers_Flexform_Grid_RowViewHelper');
$viewHelper192->setArguments($arguments186);
$viewHelper192->setRenderingContext($renderingContext);
$viewHelper192->setRenderChildrenClosure($renderChildrenClosure187);
// End of ViewHelper Tx_Flux_ViewHelpers_Flexform_Grid_RowViewHelper

$output178 .= $viewHelper192->initializeArgumentsAndRender();

$output178 .= '
			';
return $output178;
};
$viewHelper193 = $self->getViewHelper('$viewHelper193', $renderingContext, 'Tx_Flux_ViewHelpers_Flexform_GridViewHelper');
$viewHelper193->setArguments($arguments176);
$viewHelper193->setRenderingContext($renderingContext);
$viewHelper193->setRenderChildrenClosure($renderChildrenClosure177);
// End of ViewHelper Tx_Flux_ViewHelpers_Flexform_GridViewHelper

$output163 .= $viewHelper193->initializeArgumentsAndRender();

$output163 .= '
		';
return $output163;
};
$viewHelper194 = $self->getViewHelper('$viewHelper194', $renderingContext, 'Tx_Flux_ViewHelpers_FlexformViewHelper');
$viewHelper194->setArguments($arguments161);
$viewHelper194->setRenderingContext($renderingContext);
$viewHelper194->setRenderChildrenClosure($renderChildrenClosure162);
// End of ViewHelper Tx_Flux_ViewHelpers_FlexformViewHelper

$output160 .= $viewHelper194->initializeArgumentsAndRender();

$output160 .= '
	';
return $output160;
};

$output154 .= '';

$output154 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments195 = array();
$arguments195['name'] = 'Content';
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
		';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Var_SetViewHelper
$arguments198 = array();
$arguments198['name'] = 'headerLayout';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments199 = array();
$arguments199['typoscriptObjectPath'] = 'plugin.tx_themes_fces_fluidcontent_basic.settings.headerLayout';
$arguments199['data'] = NULL;
$arguments199['currentValueKey'] = NULL;
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper201 = $self->getViewHelper('$viewHelper201', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper201->setArguments($arguments199);
$viewHelper201->setRenderingContext($renderingContext);
$viewHelper201->setRenderChildrenClosure($renderChildrenClosure200);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments198['value'] = $viewHelper201->initializeArgumentsAndRender();
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper203 = $self->getViewHelper('$viewHelper203', $renderingContext, 'Tx_Vhs_ViewHelpers_Var_SetViewHelper');
$viewHelper203->setArguments($arguments198);
$viewHelper203->setRenderingContext($renderingContext);
$viewHelper203->setRenderChildrenClosure($renderChildrenClosure202);
// End of ViewHelper Tx_Vhs_ViewHelpers_Var_SetViewHelper

$output197 .= $viewHelper203->initializeArgumentsAndRender();

$output197 .= '

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments204 = array();
// Rendering Boolean node
$arguments204['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'headerLayout', $renderingContext), '0');
$arguments204['then'] = NULL;
$arguments204['else'] = NULL;
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
			<div id="navbar" class="navbar navbar-inverse navbar-static-top">
				<div class="navbar-inner">
					<div class="container navbar-static-top">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments207 = array();
// Rendering Boolean node
$arguments207['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.enableSearch', $renderingContext));
$arguments207['then'] = NULL;
$arguments207['else'] = NULL;
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$output209 = '';

$output209 .= '
							<form class="navbar-search pull-right" method="get" action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$arguments210 = array();
$arguments210['pageUid'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.searchPageUid', $renderingContext);
$arguments210['additionalParams'] = array (
);
$arguments210['pageType'] = 0;
$arguments210['noCache'] = false;
$arguments210['noCacheHash'] = false;
$arguments210['section'] = '';
$arguments210['linkAccessRestrictedPages'] = false;
$arguments210['absolute'] = false;
$arguments210['addQueryString'] = false;
$arguments210['argumentsToBeExcludedFromQueryString'] = array (
);
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper212 = $self->getViewHelper('$viewHelper212', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper');
$viewHelper212->setArguments($arguments210);
$viewHelper212->setRenderingContext($renderingContext);
$viewHelper212->setRenderChildrenClosure($renderChildrenClosure211);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper

$output209 .= $viewHelper212->initializeArgumentsAndRender();

$output209 .= '">
								<div class="input-append">
									<input id="main-search-field" type="text" name="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments213 = array();
$arguments213['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.searchFieldName', $renderingContext);
$arguments213['keepQuotes'] = false;
$arguments213['encoding'] = NULL;
$arguments213['doubleEncode'] = true;
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$value215 = ($arguments213['value'] !== NULL ? $arguments213['value'] : $renderChildrenClosure214());

$output209 .= (!is_string($value215) ? $value215 : htmlspecialchars($value215, ($arguments213['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments213['encoding'] !== NULL ? $arguments213['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments213['doubleEncode']));

$output209 .= '" class="input-nav" tabindex="2" placeholder="Search" /><button tabindex="3" type="submit" class="btn btn-inverse"><i class="icon-search"></i></button>
								</div>
							</form>
						';
return $output209;
};
$viewHelper216 = $self->getViewHelper('$viewHelper216', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper216->setArguments($arguments207);
$viewHelper216->setRenderingContext($renderingContext);
$viewHelper216->setRenderChildrenClosure($renderChildrenClosure208);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output206 .= $viewHelper216->initializeArgumentsAndRender();

$output206 .= '
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<a class="brand" href="';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Site_UrlViewHelper
$arguments217 = array();
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper219 = $self->getViewHelper('$viewHelper219', $renderingContext, 'Tx_Vhs_ViewHelpers_Site_UrlViewHelper');
$viewHelper219->setArguments($arguments217);
$viewHelper219->setRenderingContext($renderingContext);
$viewHelper219->setRenderChildrenClosure($renderChildrenClosure218);
// End of ViewHelper Tx_Vhs_ViewHelpers_Site_UrlViewHelper

$output206 .= $viewHelper219->initializeArgumentsAndRender();

$output206 .= '">';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Site_NameViewHelper
$arguments220 = array();
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper222 = $self->getViewHelper('$viewHelper222', $renderingContext, 'Tx_Vhs_ViewHelpers_Site_NameViewHelper');
$viewHelper222->setArguments($arguments220);
$viewHelper222->setRenderingContext($renderingContext);
$viewHelper222->setRenderChildrenClosure($renderChildrenClosure221);
// End of ViewHelper Tx_Vhs_ViewHelpers_Site_NameViewHelper

$output206 .= $viewHelper222->initializeArgumentsAndRender();

$output206 .= '</a>
						';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Page_MenuViewHelper
$arguments223 = array();
$arguments223['entryLevel'] = '1';
// Rendering Boolean node
$arguments223['useShortcutData'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments223['additionalAttributes'] = NULL;
$arguments223['class'] = NULL;
$arguments223['dir'] = NULL;
$arguments223['id'] = NULL;
$arguments223['lang'] = NULL;
$arguments223['style'] = NULL;
$arguments223['title'] = NULL;
$arguments223['accesskey'] = NULL;
$arguments223['tabindex'] = NULL;
$arguments223['onclick'] = NULL;
$arguments223['tagName'] = 'ul';
$arguments223['tagNameChildren'] = 'li';
$arguments223['levels'] = 1;
$arguments223['divider'] = NULL;
$arguments223['expandAll'] = false;
$arguments223['classActive'] = 'active';
$arguments223['classCurrent'] = 'current';
$arguments223['classHasSubpages'] = 'sub';
$arguments223['useShortcutTarget'] = false;
$arguments223['useShortcutUid'] = false;
$arguments223['classFirst'] = '';
$arguments223['classLast'] = '';
$arguments223['substElementUid'] = '';
$arguments223['includeSpacers'] = false;
$arguments223['bullet'] = NULL;
$arguments223['resolveExclude'] = false;
$arguments223['showHidden'] = false;
$arguments223['showCurrent'] = true;
$arguments223['linkCurrent'] = true;
$arguments223['linkActive'] = true;
$arguments223['titleFields'] = 'nav_title,title';
$arguments223['doktypes'] = NULL;
$arguments223['excludeSubpageTypes'] = 'SYSFOLDER';
$arguments223['deferred'] = false;
$arguments223['pageUid'] = NULL;
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
							<div class="nav-collapse collapse">
								<ul class="nav">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments226 = array();
$arguments226['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'menu', $renderingContext);
$arguments226['as'] = 'mainPage';
$arguments226['iteration'] = 'iteration';
$arguments226['key'] = '';
$arguments226['reverse'] = false;
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
										<li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments229 = array();
$arguments229['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.class', $renderingContext);
$arguments229['keepQuotes'] = false;
$arguments229['encoding'] = NULL;
$arguments229['doubleEncode'] = true;
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$value231 = ($arguments229['value'] !== NULL ? $arguments229['value'] : $renderChildrenClosure230());

$output228 .= (!is_string($value231) ? $value231 : htmlspecialchars($value231, ($arguments229['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments229['encoding'] !== NULL ? $arguments229['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments229['doubleEncode']));

$output228 .= '"><a tabindex="';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Math_SumViewHelper
$arguments232 = array();
$arguments232['b'] = '100';
$arguments232['a'] = NULL;
$arguments232['fail'] = false;
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments234 = array();
$arguments234['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'iteration.cycle', $renderingContext);
$arguments234['keepQuotes'] = false;
$arguments234['encoding'] = NULL;
$arguments234['doubleEncode'] = true;
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
return NULL;
};
$value236 = ($arguments234['value'] !== NULL ? $arguments234['value'] : $renderChildrenClosure235());
return (!is_string($value236) ? $value236 : htmlspecialchars($value236, ($arguments234['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments234['encoding'] !== NULL ? $arguments234['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments234['doubleEncode']));
};
$viewHelper237 = $self->getViewHelper('$viewHelper237', $renderingContext, 'Tx_Vhs_ViewHelpers_Math_SumViewHelper');
$viewHelper237->setArguments($arguments232);
$viewHelper237->setRenderingContext($renderingContext);
$viewHelper237->setRenderChildrenClosure($renderChildrenClosure233);
// End of ViewHelper Tx_Vhs_ViewHelpers_Math_SumViewHelper

$output228 .= $viewHelper237->initializeArgumentsAndRender();

$output228 .= '" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments238 = array();
$arguments238['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.link', $renderingContext);
$arguments238['keepQuotes'] = false;
$arguments238['encoding'] = NULL;
$arguments238['doubleEncode'] = true;
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
return NULL;
};
$value240 = ($arguments238['value'] !== NULL ? $arguments238['value'] : $renderChildrenClosure239());

$output228 .= (!is_string($value240) ? $value240 : htmlspecialchars($value240, ($arguments238['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments238['encoding'] !== NULL ? $arguments238['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments238['doubleEncode']));

$output228 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments241 = array();
$arguments241['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.class', $renderingContext);
$arguments241['keepQuotes'] = false;
$arguments241['encoding'] = NULL;
$arguments241['doubleEncode'] = true;
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$value243 = ($arguments241['value'] !== NULL ? $arguments241['value'] : $renderChildrenClosure242());

$output228 .= (!is_string($value243) ? $value243 : htmlspecialchars($value243, ($arguments241['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments241['encoding'] !== NULL ? $arguments241['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments241['doubleEncode']));

$output228 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments244 = array();
$arguments244['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.title', $renderingContext);
$arguments244['keepQuotes'] = false;
$arguments244['encoding'] = NULL;
$arguments244['doubleEncode'] = true;
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
return NULL;
};
$value246 = ($arguments244['value'] !== NULL ? $arguments244['value'] : $renderChildrenClosure245());

$output228 .= (!is_string($value246) ? $value246 : htmlspecialchars($value246, ($arguments244['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments244['encoding'] !== NULL ? $arguments244['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments244['doubleEncode']));

$output228 .= '</a></li>
									';
return $output228;
};

$output225 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output225 .= '
								</ul>
							</div>
						';
return $output225;
};
$viewHelper247 = $self->getViewHelper('$viewHelper247', $renderingContext, 'Tx_Vhs_ViewHelpers_Page_MenuViewHelper');
$viewHelper247->setArguments($arguments223);
$viewHelper247->setRenderingContext($renderingContext);
$viewHelper247->setRenderChildrenClosure($renderChildrenClosure224);
// End of ViewHelper Tx_Vhs_ViewHelpers_Page_MenuViewHelper

$output206 .= $viewHelper247->initializeArgumentsAndRender();

$output206 .= '
					</div>
				</div>
			</div>
		';
return $output206;
};
$viewHelper248 = $self->getViewHelper('$viewHelper248', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper248->setArguments($arguments204);
$viewHelper248->setRenderingContext($renderingContext);
$viewHelper248->setRenderChildrenClosure($renderChildrenClosure205);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output197 .= $viewHelper248->initializeArgumentsAndRender();

$output197 .= '

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments249 = array();
// Rendering Boolean node
$arguments249['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'headerLayout', $renderingContext), '1');
$arguments249['then'] = NULL;
$arguments249['else'] = NULL;
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
			<div class="container">
				<div class="masthead">
					';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Page_MenuViewHelper
$arguments252 = array();
$arguments252['entryLevel'] = '1';
// Rendering Boolean node
$arguments252['useShortcutData'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments252['additionalAttributes'] = NULL;
$arguments252['class'] = NULL;
$arguments252['dir'] = NULL;
$arguments252['id'] = NULL;
$arguments252['lang'] = NULL;
$arguments252['style'] = NULL;
$arguments252['title'] = NULL;
$arguments252['accesskey'] = NULL;
$arguments252['tabindex'] = NULL;
$arguments252['onclick'] = NULL;
$arguments252['tagName'] = 'ul';
$arguments252['tagNameChildren'] = 'li';
$arguments252['levels'] = 1;
$arguments252['divider'] = NULL;
$arguments252['expandAll'] = false;
$arguments252['classActive'] = 'active';
$arguments252['classCurrent'] = 'current';
$arguments252['classHasSubpages'] = 'sub';
$arguments252['useShortcutTarget'] = false;
$arguments252['useShortcutUid'] = false;
$arguments252['classFirst'] = '';
$arguments252['classLast'] = '';
$arguments252['substElementUid'] = '';
$arguments252['includeSpacers'] = false;
$arguments252['bullet'] = NULL;
$arguments252['resolveExclude'] = false;
$arguments252['showHidden'] = false;
$arguments252['showCurrent'] = true;
$arguments252['linkCurrent'] = true;
$arguments252['linkActive'] = true;
$arguments252['titleFields'] = 'nav_title,title';
$arguments252['doktypes'] = NULL;
$arguments252['excludeSubpageTypes'] = 'SYSFOLDER';
$arguments252['deferred'] = false;
$arguments252['pageUid'] = NULL;
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$output254 = '';

$output254 .= '
						<ul class="nav nav-pills pull-right">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments255 = array();
$arguments255['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'menu', $renderingContext);
$arguments255['as'] = 'mainPage';
$arguments255['iteration'] = 'iteration';
$arguments255['key'] = '';
$arguments255['reverse'] = false;
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$output257 = '';

$output257 .= '
								<li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments258 = array();
$arguments258['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.class', $renderingContext);
$arguments258['keepQuotes'] = false;
$arguments258['encoding'] = NULL;
$arguments258['doubleEncode'] = true;
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return NULL;
};
$value260 = ($arguments258['value'] !== NULL ? $arguments258['value'] : $renderChildrenClosure259());

$output257 .= (!is_string($value260) ? $value260 : htmlspecialchars($value260, ($arguments258['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments258['encoding'] !== NULL ? $arguments258['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments258['doubleEncode']));

$output257 .= '"><a tabindex="';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Math_SumViewHelper
$arguments261 = array();
$arguments261['b'] = '100';
$arguments261['a'] = NULL;
$arguments261['fail'] = false;
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments263 = array();
$arguments263['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'iteration.cycle', $renderingContext);
$arguments263['keepQuotes'] = false;
$arguments263['encoding'] = NULL;
$arguments263['doubleEncode'] = true;
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
return NULL;
};
$value265 = ($arguments263['value'] !== NULL ? $arguments263['value'] : $renderChildrenClosure264());
return (!is_string($value265) ? $value265 : htmlspecialchars($value265, ($arguments263['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments263['encoding'] !== NULL ? $arguments263['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments263['doubleEncode']));
};
$viewHelper266 = $self->getViewHelper('$viewHelper266', $renderingContext, 'Tx_Vhs_ViewHelpers_Math_SumViewHelper');
$viewHelper266->setArguments($arguments261);
$viewHelper266->setRenderingContext($renderingContext);
$viewHelper266->setRenderChildrenClosure($renderChildrenClosure262);
// End of ViewHelper Tx_Vhs_ViewHelpers_Math_SumViewHelper

$output257 .= $viewHelper266->initializeArgumentsAndRender();

$output257 .= '" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments267 = array();
$arguments267['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.link', $renderingContext);
$arguments267['keepQuotes'] = false;
$arguments267['encoding'] = NULL;
$arguments267['doubleEncode'] = true;
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$value269 = ($arguments267['value'] !== NULL ? $arguments267['value'] : $renderChildrenClosure268());

$output257 .= (!is_string($value269) ? $value269 : htmlspecialchars($value269, ($arguments267['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments267['encoding'] !== NULL ? $arguments267['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments267['doubleEncode']));

$output257 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments270 = array();
$arguments270['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.class', $renderingContext);
$arguments270['keepQuotes'] = false;
$arguments270['encoding'] = NULL;
$arguments270['doubleEncode'] = true;
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$value272 = ($arguments270['value'] !== NULL ? $arguments270['value'] : $renderChildrenClosure271());

$output257 .= (!is_string($value272) ? $value272 : htmlspecialchars($value272, ($arguments270['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments270['encoding'] !== NULL ? $arguments270['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments270['doubleEncode']));

$output257 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments273 = array();
$arguments273['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.title', $renderingContext);
$arguments273['keepQuotes'] = false;
$arguments273['encoding'] = NULL;
$arguments273['doubleEncode'] = true;
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$value275 = ($arguments273['value'] !== NULL ? $arguments273['value'] : $renderChildrenClosure274());

$output257 .= (!is_string($value275) ? $value275 : htmlspecialchars($value275, ($arguments273['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments273['encoding'] !== NULL ? $arguments273['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments273['doubleEncode']));

$output257 .= '</a></li>
							';
return $output257;
};

$output254 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output254 .= '
						</ul>
					';
return $output254;
};
$viewHelper276 = $self->getViewHelper('$viewHelper276', $renderingContext, 'Tx_Vhs_ViewHelpers_Page_MenuViewHelper');
$viewHelper276->setArguments($arguments252);
$viewHelper276->setRenderingContext($renderingContext);
$viewHelper276->setRenderChildrenClosure($renderChildrenClosure253);
// End of ViewHelper Tx_Vhs_ViewHelpers_Page_MenuViewHelper

$output251 .= $viewHelper276->initializeArgumentsAndRender();

$output251 .= '
					<h3 class="muted">';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Site_NameViewHelper
$arguments277 = array();
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper279 = $self->getViewHelper('$viewHelper279', $renderingContext, 'Tx_Vhs_ViewHelpers_Site_NameViewHelper');
$viewHelper279->setArguments($arguments277);
$viewHelper279->setRenderingContext($renderingContext);
$viewHelper279->setRenderChildrenClosure($renderChildrenClosure278);
// End of ViewHelper Tx_Vhs_ViewHelpers_Site_NameViewHelper

$output251 .= $viewHelper279->initializeArgumentsAndRender();

$output251 .= '</h3>
				</div>
				<hr />
			</div>
		';
return $output251;
};
$viewHelper280 = $self->getViewHelper('$viewHelper280', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper280->setArguments($arguments249);
$viewHelper280->setRenderingContext($renderingContext);
$viewHelper280->setRenderChildrenClosure($renderChildrenClosure250);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output197 .= $viewHelper280->initializeArgumentsAndRender();

$output197 .= '

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments281 = array();
// Rendering Boolean node
$arguments281['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'headerLayout', $renderingContext), '2');
$arguments281['then'] = NULL;
$arguments281['else'] = NULL;
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
$output283 = '';

$output283 .= '
			<div class="container">
				<h3 class="muted">';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Site_NameViewHelper
$arguments284 = array();
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper286 = $self->getViewHelper('$viewHelper286', $renderingContext, 'Tx_Vhs_ViewHelpers_Site_NameViewHelper');
$viewHelper286->setArguments($arguments284);
$viewHelper286->setRenderingContext($renderingContext);
$viewHelper286->setRenderChildrenClosure($renderChildrenClosure285);
// End of ViewHelper Tx_Vhs_ViewHelpers_Site_NameViewHelper

$output283 .= $viewHelper286->initializeArgumentsAndRender();

$output283 .= '</h3>

				<div class="navbar">
					<div class="navbar-inner">
						';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Page_MenuViewHelper
$arguments287 = array();
$arguments287['entryLevel'] = '1';
// Rendering Boolean node
$arguments287['useShortcutData'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments287['additionalAttributes'] = NULL;
$arguments287['class'] = NULL;
$arguments287['dir'] = NULL;
$arguments287['id'] = NULL;
$arguments287['lang'] = NULL;
$arguments287['style'] = NULL;
$arguments287['title'] = NULL;
$arguments287['accesskey'] = NULL;
$arguments287['tabindex'] = NULL;
$arguments287['onclick'] = NULL;
$arguments287['tagName'] = 'ul';
$arguments287['tagNameChildren'] = 'li';
$arguments287['levels'] = 1;
$arguments287['divider'] = NULL;
$arguments287['expandAll'] = false;
$arguments287['classActive'] = 'active';
$arguments287['classCurrent'] = 'current';
$arguments287['classHasSubpages'] = 'sub';
$arguments287['useShortcutTarget'] = false;
$arguments287['useShortcutUid'] = false;
$arguments287['classFirst'] = '';
$arguments287['classLast'] = '';
$arguments287['substElementUid'] = '';
$arguments287['includeSpacers'] = false;
$arguments287['bullet'] = NULL;
$arguments287['resolveExclude'] = false;
$arguments287['showHidden'] = false;
$arguments287['showCurrent'] = true;
$arguments287['linkCurrent'] = true;
$arguments287['linkActive'] = true;
$arguments287['titleFields'] = 'nav_title,title';
$arguments287['doktypes'] = NULL;
$arguments287['excludeSubpageTypes'] = 'SYSFOLDER';
$arguments287['deferred'] = false;
$arguments287['pageUid'] = NULL;
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
$output289 = '';

$output289 .= '
							<ul class="nav">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments290 = array();
$arguments290['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'menu', $renderingContext);
$arguments290['as'] = 'mainPage';
$arguments290['iteration'] = 'iteration';
$arguments290['key'] = '';
$arguments290['reverse'] = false;
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
$output292 = '';

$output292 .= '
									<li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments293 = array();
$arguments293['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.class', $renderingContext);
$arguments293['keepQuotes'] = false;
$arguments293['encoding'] = NULL;
$arguments293['doubleEncode'] = true;
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$value295 = ($arguments293['value'] !== NULL ? $arguments293['value'] : $renderChildrenClosure294());

$output292 .= (!is_string($value295) ? $value295 : htmlspecialchars($value295, ($arguments293['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments293['encoding'] !== NULL ? $arguments293['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments293['doubleEncode']));

$output292 .= '"><a tabindex="';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Math_SumViewHelper
$arguments296 = array();
$arguments296['b'] = '100';
$arguments296['a'] = NULL;
$arguments296['fail'] = false;
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments298 = array();
$arguments298['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'iteration.cycle', $renderingContext);
$arguments298['keepQuotes'] = false;
$arguments298['encoding'] = NULL;
$arguments298['doubleEncode'] = true;
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
};
$value300 = ($arguments298['value'] !== NULL ? $arguments298['value'] : $renderChildrenClosure299());
return (!is_string($value300) ? $value300 : htmlspecialchars($value300, ($arguments298['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments298['encoding'] !== NULL ? $arguments298['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments298['doubleEncode']));
};
$viewHelper301 = $self->getViewHelper('$viewHelper301', $renderingContext, 'Tx_Vhs_ViewHelpers_Math_SumViewHelper');
$viewHelper301->setArguments($arguments296);
$viewHelper301->setRenderingContext($renderingContext);
$viewHelper301->setRenderChildrenClosure($renderChildrenClosure297);
// End of ViewHelper Tx_Vhs_ViewHelpers_Math_SumViewHelper

$output292 .= $viewHelper301->initializeArgumentsAndRender();

$output292 .= '" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments302 = array();
$arguments302['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.link', $renderingContext);
$arguments302['keepQuotes'] = false;
$arguments302['encoding'] = NULL;
$arguments302['doubleEncode'] = true;
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$value304 = ($arguments302['value'] !== NULL ? $arguments302['value'] : $renderChildrenClosure303());

$output292 .= (!is_string($value304) ? $value304 : htmlspecialchars($value304, ($arguments302['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments302['encoding'] !== NULL ? $arguments302['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments302['doubleEncode']));

$output292 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments305 = array();
$arguments305['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.class', $renderingContext);
$arguments305['keepQuotes'] = false;
$arguments305['encoding'] = NULL;
$arguments305['doubleEncode'] = true;
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return NULL;
};
$value307 = ($arguments305['value'] !== NULL ? $arguments305['value'] : $renderChildrenClosure306());

$output292 .= (!is_string($value307) ? $value307 : htmlspecialchars($value307, ($arguments305['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments305['encoding'] !== NULL ? $arguments305['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments305['doubleEncode']));

$output292 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments308 = array();
$arguments308['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'mainPage.title', $renderingContext);
$arguments308['keepQuotes'] = false;
$arguments308['encoding'] = NULL;
$arguments308['doubleEncode'] = true;
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
return NULL;
};
$value310 = ($arguments308['value'] !== NULL ? $arguments308['value'] : $renderChildrenClosure309());

$output292 .= (!is_string($value310) ? $value310 : htmlspecialchars($value310, ($arguments308['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments308['encoding'] !== NULL ? $arguments308['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments308['doubleEncode']));

$output292 .= '</a></li>
								';
return $output292;
};

$output289 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext);

$output289 .= '
							</ul>
						';
return $output289;
};
$viewHelper311 = $self->getViewHelper('$viewHelper311', $renderingContext, 'Tx_Vhs_ViewHelpers_Page_MenuViewHelper');
$viewHelper311->setArguments($arguments287);
$viewHelper311->setRenderingContext($renderingContext);
$viewHelper311->setRenderChildrenClosure($renderChildrenClosure288);
// End of ViewHelper Tx_Vhs_ViewHelpers_Page_MenuViewHelper

$output283 .= $viewHelper311->initializeArgumentsAndRender();

$output283 .= '
					</div>
				</div>
			</div>
		';
return $output283;
};
$viewHelper312 = $self->getViewHelper('$viewHelper312', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper312->setArguments($arguments281);
$viewHelper312->setRenderingContext($renderingContext);
$viewHelper312->setRenderChildrenClosure($renderChildrenClosure282);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output197 .= $viewHelper312->initializeArgumentsAndRender();

$output197 .= '

		<div class="container">

			<!-- main content output - default rendering -->
			';
// Rendering ViewHelper Tx_Vhs_ViewHelpers_Page_Content_RenderViewHelper
$arguments313 = array();
$arguments313['column'] = '0';
$arguments313['limit'] = NULL;
$arguments313['order'] = 'sorting';
$arguments313['sortDirection'] = 'ASC';
$arguments313['pageUid'] = NULL;
$arguments313['contentUids'] = NULL;
$arguments313['slide'] = 0;
$arguments313['slideCollect'] = 0;
$arguments313['slideCollectReverse'] = 0;
$arguments313['loadRegister'] = NULL;
$arguments313['render'] = true;
$arguments313['as'] = NULL;
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper315 = $self->getViewHelper('$viewHelper315', $renderingContext, 'Tx_Vhs_ViewHelpers_Page_Content_RenderViewHelper');
$viewHelper315->setArguments($arguments313);
$viewHelper315->setRenderingContext($renderingContext);
$viewHelper315->setRenderChildrenClosure($renderChildrenClosure314);
// End of ViewHelper Tx_Vhs_ViewHelpers_Page_Content_RenderViewHelper

$output197 .= $viewHelper315->initializeArgumentsAndRender();

$output197 .= '

		</div>
	';
return $output197;
};

$output154 .= '';

$output154 .= '

</div>';

return $output154;
}

}
#1371495058    96125     
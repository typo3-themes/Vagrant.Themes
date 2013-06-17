<?php
class FluidCache_Fluidpages_Page_partial_PageObjects_f93f35da1b81f92d9322ff6c3a416c982ec87368 extends TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return 'Page';
}
public function hasLayout() {
return TRUE;
}

/**
 * section SharedResources
 */
public function section_e9d04d24a7ed7eef06bbf2a9cd331f065f60ba99(TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '

';
}/**
 * section Navigation
 */
public function section_cf03cf2e9cdf95a20af09137dfb9071db0c31bf2(TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '

';
}/**
 * section SubNavigation
 */
public function section_11d785389bbba36ca02bd49f158e8810e5555fbd(TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '
';
}/**
 * section TabNavigation
 */
public function section_99b89e8423a123fef821142863e35d24dd706092(TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '

';
}/**
 * section HeroUnit
 */
public function section_c83f85b816e78056065dbc74c033851e3b280d81(TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '

';
}/**
 * section Jumbotron
 */
public function section_54621857be8482061195a0838a0d85f76438f774(TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '

';
}/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '

';
}/**
 * section Sidebar
 */
public function section_f5171c931c5c70d4dc3557fd20c356b636c92e04(TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '

';
}/**
 * Main Render function
 */
public function render(TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments1 = array();
$arguments1['name'] = 'Page';
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '
<div xmlns="http://www.w3.org/1999/xhtml" lang="en"
     xmlns:v="http://fedext.net/ns/vhs/ViewHelpers"
     xmlns:f="http://typo3.org/ns/fluid/ViewHelpers">

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments4 = array();
$arguments4['name'] = 'SharedResources';
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return '

';
};

$output0 .= '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments6 = array();
$arguments6['name'] = 'Navigation';
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return '

';
};

$output0 .= '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments8 = array();
$arguments8['name'] = 'SubNavigation';
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return '
';
};

$output0 .= '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments10 = array();
$arguments10['name'] = 'TabNavigation';
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return '

';
};

$output0 .= '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments12 = array();
$arguments12['name'] = 'HeroUnit';
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return '

';
};

$output0 .= '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments14 = array();
$arguments14['name'] = 'Jumbotron';
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return '

';
};

$output0 .= '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments16 = array();
$arguments16['name'] = 'Footer';
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return '

';
};

$output0 .= '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments18 = array();
$arguments18['name'] = 'Sidebar';
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return '

';
};

$output0 .= '';

$output0 .= '

</div>
';

return $output0;
}

}
#1371495058    5112      
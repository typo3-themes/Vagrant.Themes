<?php
class FluidCache_Viewpage_ViewModule_layout_DocHeader_f46766d52cf696d38d75f444256cf3b79fed4642 extends TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['loadExtJs'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments1['pageTitle'] = '';
$arguments1['enableJumpToUrl'] = true;
$arguments1['enableClickMenu'] = true;
$arguments1['loadPrototype'] = true;
$arguments1['loadScriptaculous'] = false;
$arguments1['scriptaculousModule'] = '';
$arguments1['loadExtJsTheme'] = true;
$arguments1['extJsAdapter'] = '';
$arguments1['enableExtJsDebug'] = false;
$arguments1['addCssFile'] = NULL;
$arguments1['addJsFile'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
	<style type="text/css">
		.typo3-inner-docbody {
			height: 100%;
		}
	</style>

	<div class="typo3-fullDoc">
		<div id="typo3-docheader">
			<div class="typo3-docheader-functions">
			</div>
			<div class="typo3-docheader-buttons">
				<div class="left">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return '
						Uri was added by javascript window.open and not a simple <a href>
						because f:be.buttons.icon does not support the target parameter.
					';
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper

$output3 .= $viewHelper6->initializeArgumentsAndRender();

$output3 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments7 = array();
$output8 = '';

$output8 .= 'javascript:window.open(\'';

$output8 .= TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'url', $renderingContext);

$output8 .= '\', \'\');';
$arguments7['uri'] = $output8;
$arguments7['icon'] = 'actions-document-view';
$arguments7['title'] = '';
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper10->setArguments($arguments7);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output3 .= $viewHelper10->initializeArgumentsAndRender();

$output3 .= '
				</div>
				<div class="right">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments11 = array();
$arguments11['uri'] = 'javascript:document.getElementById(\'tx_viewpage_iframe\').contentWindow.location.reload(true);';
$arguments11['icon'] = 'actions-system-refresh';
$arguments11['title'] = '';
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper13->setArguments($arguments11);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output3 .= $viewHelper13->initializeArgumentsAndRender();

$output3 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper
$arguments14 = array();
$arguments14['getVars'] = array (
);
$arguments14['setVars'] = array (
);
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper');
$viewHelper16->setArguments($arguments14);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper

$output3 .= $viewHelper16->initializeArgumentsAndRender();

$output3 .= '
				</div>
			</div>
		</div>

		<div id="typo3-docbody">
			<div id="typo3-inner-docbody" style="height: 100%;">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments17 = array();
$arguments17['section'] = 'Content';
$arguments17['partial'] = NULL;
$arguments17['arguments'] = array (
);
$arguments17['optional'] = false;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper19->setArguments($arguments17);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output3 .= $viewHelper19->initializeArgumentsAndRender();

$output3 .= '
			</div>
		</div>
	</div>
';
return $output3;
};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper');
$viewHelper20->setArguments($arguments1);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper

$output0 .= $viewHelper20->initializeArgumentsAndRender();

$output0 .= '
';

return $output0;
}

}
#1371495057    6359      
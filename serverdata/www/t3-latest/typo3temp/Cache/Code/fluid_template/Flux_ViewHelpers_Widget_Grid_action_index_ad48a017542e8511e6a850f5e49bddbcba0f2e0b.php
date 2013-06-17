<?php
class FluidCache_Flux_ViewHelpers_Widget_Grid_action_index_ad48a017542e8511e6a850f5e49bddbcba0f2e0b extends TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section Grid
 */
public function section_701c483f813cf119ec80b185a049bcfdc29f9161(TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<table cellspacing="0" cellpadding="0" id="content-grid-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));

$output0 .= '" class="flux-grid';
// Rendering ViewHelper Tx_Flux_ViewHelpers_IsCollapsedViewHelper
$arguments4 = array();
$arguments4['record'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row', $renderingContext);
$arguments4['then'] = ' hidden';
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'Tx_Flux_ViewHelpers_IsCollapsedViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper Tx_Flux_ViewHelpers_IsCollapsedViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '">
		<tbody>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments7 = array();
$arguments7['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'grid', $renderingContext);
$arguments7['as'] = 'gridrow';
$arguments7['iteration'] = 'rowIteration';
$arguments7['key'] = '';
$arguments7['reverse'] = false;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
			<tr>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments10 = array();
$arguments10['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'gridrow', $renderingContext);
$arguments10['as'] = 'gridcolumn';
$arguments10['iteration'] = 'columnIteration';
$arguments10['key'] = '';
$arguments10['reverse'] = false;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
					<td colspan="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'gridcolumn.colspan', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = NULL;
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output12 .= (!is_string($value15) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments13['encoding'] !== NULL ? $arguments13['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments13['doubleEncode']));

$output12 .= '" rowspan="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'gridcolumn.rowspan', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = NULL;
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output12 .= (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments16['encoding'] !== NULL ? $arguments16['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments16['doubleEncode']));

$output12 .= '" style="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments19 = array();
$arguments19['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'gridcolumn.style', $renderingContext);
$arguments19['keepQuotes'] = false;
$arguments19['encoding'] = NULL;
$arguments19['doubleEncode'] = true;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$value21 = ($arguments19['value'] !== NULL ? $arguments19['value'] : $renderChildrenClosure20());

$output12 .= (!is_string($value21) ? $value21 : htmlspecialchars($value21, ($arguments19['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments19['encoding'] !== NULL ? $arguments19['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments19['doubleEncode']));

$output12 .= '">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments22 = array();
$arguments22['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'gridcolumn.areas', $renderingContext);
$arguments22['as'] = 'area';
$arguments22['key'] = '';
$arguments22['reverse'] = false;
$arguments22['iteration'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
							';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Be_ContentAreaViewHelper
$arguments25 = array();
$arguments25['area'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.name', $renderingContext);
$arguments25['row'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row', $renderingContext);
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
								<div class="fce-header t3-row-header t3-page-colHeader t3-page-colHeader-label">
									<div>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments28 = array();
$arguments28['key'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.label', $renderingContext);
$arguments28['default'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.label', $renderingContext);
$arguments28['id'] = NULL;
$arguments28['htmlEscape'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper30->setArguments($arguments28);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output27 .= $viewHelper30->initializeArgumentsAndRender();

$output27 .= '</div>
								</div>
								<div class="fce-container t3-page-ce-wrapper">
									<div class="t3-page-ce">
										<div class="t3-page-ce-dropzone" id="colpos-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments31 = array();
$arguments31['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.colPos', $renderingContext);
$arguments31['keepQuotes'] = false;
$arguments31['encoding'] = NULL;
$arguments31['doubleEncode'] = true;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$value33 = ($arguments31['value'] !== NULL ? $arguments31['value'] : $renderChildrenClosure32());

$output27 .= (!is_string($value33) ? $value33 : htmlspecialchars($value33, ($arguments31['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments31['encoding'] !== NULL ? $arguments31['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments31['doubleEncode']));

$output27 .= '-page-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments34 = array();
$arguments34['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.pid', $renderingContext);
$arguments34['keepQuotes'] = false;
$arguments34['encoding'] = NULL;
$arguments34['doubleEncode'] = true;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$value36 = ($arguments34['value'] !== NULL ? $arguments34['value'] : $renderChildrenClosure35());

$output27 .= (!is_string($value36) ? $value36 : htmlspecialchars($value36, ($arguments34['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments34['encoding'] !== NULL ? $arguments34['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments34['doubleEncode']));

$output27 .= '-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments37 = array();
$arguments37['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.md5', $renderingContext);
$arguments37['keepQuotes'] = false;
$arguments37['encoding'] = NULL;
$arguments37['doubleEncode'] = true;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$value39 = ($arguments37['value'] !== NULL ? $arguments37['value'] : $renderChildrenClosure38());

$output27 .= (!is_string($value39) ? $value39 : htmlspecialchars($value39, ($arguments37['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments37['encoding'] !== NULL ? $arguments37['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments37['doubleEncode']));

$output27 .= '-top-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = NULL;
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());

$output27 .= (!is_string($value42) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments40['encoding'] !== NULL ? $arguments40['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments40['doubleEncode']));

$output27 .= '-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments43 = array();
$arguments43['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.name', $renderingContext);
$arguments43['keepQuotes'] = false;
$arguments43['encoding'] = NULL;
$arguments43['doubleEncode'] = true;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$value45 = ($arguments43['value'] !== NULL ? $arguments43['value'] : $renderChildrenClosure44());

$output27 .= (!is_string($value45) ? $value45 : htmlspecialchars($value45, ($arguments43['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments43['encoding'] !== NULL ? $arguments43['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments43['doubleEncode']));

$output27 .= '" style="height: 16px;">
											<div class="t3-page-ce-wrapper-new-ce">
												';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_NewViewHelper
$arguments46 = array();
$arguments46['row'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row', $renderingContext);
$arguments46['area'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.name', $renderingContext);
$arguments46['after'] = 0;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'Tx_Flux_ViewHelpers_Be_Link_Content_NewViewHelper');
$viewHelper48->setArguments($arguments46);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_NewViewHelper

$output27 .= $viewHelper48->initializeArgumentsAndRender();

$output27 .= '
												';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper
$arguments49 = array();
$arguments49['row'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row', $renderingContext);
$arguments49['area'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.name', $renderingContext);
$arguments49['reference'] = false;
$arguments49['relativeTo'] = array (
);
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper');
$viewHelper51->setArguments($arguments49);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper

$output27 .= $viewHelper51->initializeArgumentsAndRender();

$output27 .= '
												';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper
$arguments52 = array();
$arguments52['row'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row', $renderingContext);
$arguments52['area'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.name', $renderingContext);
// Rendering Boolean node
$arguments52['reference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments52['relativeTo'] = array (
);
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper54 = $self->getViewHelper('$viewHelper54', $renderingContext, 'Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper');
$viewHelper54->setArguments($arguments52);
$viewHelper54->setRenderingContext($renderingContext);
$viewHelper54->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper

$output27 .= $viewHelper54->initializeArgumentsAndRender();

$output27 .= '
											</div>
										</div>
									</div>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments55 = array();
$arguments55['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'records', $renderingContext);
$arguments55['as'] = 'record';
$arguments55['key'] = '';
$arguments55['reverse'] = false;
$arguments55['iteration'] = NULL;
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
										<div class="t3-page-ce" id="element-tt_content-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments58 = array();
$arguments58['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'record.uid', $renderingContext);
$arguments58['keepQuotes'] = false;
$arguments58['encoding'] = NULL;
$arguments58['doubleEncode'] = true;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$value60 = ($arguments58['value'] !== NULL ? $arguments58['value'] : $renderChildrenClosure59());

$output57 .= (!is_string($value60) ? $value60 : htmlspecialchars($value60, ($arguments58['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments58['encoding'] !== NULL ? $arguments58['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments58['doubleEncode']));

$output57 .= '">
											<div class="t3-page-ce-dragitem">
												';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Be_ContentElementViewHelper
$arguments61 = array();
$arguments61['row'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'record', $renderingContext);
$arguments61['dblist'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'dblist', $renderingContext);
$arguments61['area'] = NULL;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper63 = $self->getViewHelper('$viewHelper63', $renderingContext, 'Tx_Flux_ViewHelpers_Be_ContentElementViewHelper');
$viewHelper63->setArguments($arguments61);
$viewHelper63->setRenderingContext($renderingContext);
$viewHelper63->setRenderChildrenClosure($renderChildrenClosure62);
// End of ViewHelper Tx_Flux_ViewHelpers_Be_ContentElementViewHelper

$output57 .= $viewHelper63->initializeArgumentsAndRender();

$output57 .= '
											</div>
											<div class="t3-page-ce-dropzone" id="colpos-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments64 = array();
$arguments64['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'record.colPos', $renderingContext);
$arguments64['keepQuotes'] = false;
$arguments64['encoding'] = NULL;
$arguments64['doubleEncode'] = true;
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$value66 = ($arguments64['value'] !== NULL ? $arguments64['value'] : $renderChildrenClosure65());

$output57 .= (!is_string($value66) ? $value66 : htmlspecialchars($value66, ($arguments64['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments64['encoding'] !== NULL ? $arguments64['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments64['doubleEncode']));

$output57 .= '-page-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments67 = array();
$arguments67['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.pid', $renderingContext);
$arguments67['keepQuotes'] = false;
$arguments67['encoding'] = NULL;
$arguments67['doubleEncode'] = true;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$value69 = ($arguments67['value'] !== NULL ? $arguments67['value'] : $renderChildrenClosure68());

$output57 .= (!is_string($value69) ? $value69 : htmlspecialchars($value69, ($arguments67['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments67['encoding'] !== NULL ? $arguments67['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments67['doubleEncode']));

$output57 .= '-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments70 = array();
$arguments70['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments70['keepQuotes'] = false;
$arguments70['encoding'] = NULL;
$arguments70['doubleEncode'] = true;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$value72 = ($arguments70['value'] !== NULL ? $arguments70['value'] : $renderChildrenClosure71());

$output57 .= (!is_string($value72) ? $value72 : htmlspecialchars($value72, ($arguments70['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments70['encoding'] !== NULL ? $arguments70['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments70['doubleEncode']));

$output57 .= '-after-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments73 = array();
$arguments73['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'record.uid', $renderingContext);
$arguments73['keepQuotes'] = false;
$arguments73['encoding'] = NULL;
$arguments73['doubleEncode'] = true;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$value75 = ($arguments73['value'] !== NULL ? $arguments73['value'] : $renderChildrenClosure74());

$output57 .= (!is_string($value75) ? $value75 : htmlspecialchars($value75, ($arguments73['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments73['encoding'] !== NULL ? $arguments73['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments73['doubleEncode']));

$output57 .= '" style="height: 16px;">
												<div class="t3-page-ce-wrapper-new-ce">
													';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_NewViewHelper
$arguments76 = array();
$arguments76['after'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'record.uid', $renderingContext);
$arguments76['row'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row', $renderingContext);
$arguments76['area'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.name', $renderingContext);
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper78 = $self->getViewHelper('$viewHelper78', $renderingContext, 'Tx_Flux_ViewHelpers_Be_Link_Content_NewViewHelper');
$viewHelper78->setArguments($arguments76);
$viewHelper78->setRenderingContext($renderingContext);
$viewHelper78->setRenderChildrenClosure($renderChildrenClosure77);
// End of ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_NewViewHelper

$output57 .= $viewHelper78->initializeArgumentsAndRender();

$output57 .= '
													';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper
$arguments79 = array();
$arguments79['row'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row', $renderingContext);
$arguments79['relativeTo'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'record', $renderingContext);
$arguments79['area'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.name', $renderingContext);
$arguments79['reference'] = false;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper81 = $self->getViewHelper('$viewHelper81', $renderingContext, 'Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper');
$viewHelper81->setArguments($arguments79);
$viewHelper81->setRenderingContext($renderingContext);
$viewHelper81->setRenderChildrenClosure($renderChildrenClosure80);
// End of ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper

$output57 .= $viewHelper81->initializeArgumentsAndRender();

$output57 .= '
													';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper
$arguments82 = array();
$arguments82['row'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row', $renderingContext);
$arguments82['relativeTo'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'record', $renderingContext);
$arguments82['area'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.name', $renderingContext);
// Rendering Boolean node
$arguments82['reference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper84 = $self->getViewHelper('$viewHelper84', $renderingContext, 'Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper');
$viewHelper84->setArguments($arguments82);
$viewHelper84->setRenderingContext($renderingContext);
$viewHelper84->setRenderChildrenClosure($renderChildrenClosure83);
// End of ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper

$output57 .= $viewHelper84->initializeArgumentsAndRender();

$output57 .= '
												</div>
											</div>
										</div>
									';
return $output57;
};

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output27 .= '
								</div>
							';
return $output27;
};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'Tx_Flux_ViewHelpers_Be_ContentAreaViewHelper');
$viewHelper85->setArguments($arguments25);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper Tx_Flux_ViewHelpers_Be_ContentAreaViewHelper

$output24 .= $viewHelper85->initializeArgumentsAndRender();

$output24 .= '
						';
return $output24;
};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output12 .= '
					</td>
				';
return $output12;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
			</tr>
		';
return $output9;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
		</tbody>
	</table>
';

return $output0;
}/**
 * Main Render function
 */
public function render(TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output86 = '';

$output86 .= '
<div xmlns="http://www.w3.org/1999/xhtml" lang="en"
     xmlns:f="http://typo3.org/ns/fluid/ViewHelpers"
	 id="container-record-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments87 = array();
$arguments87['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments87['keepQuotes'] = false;
$arguments87['encoding'] = NULL;
$arguments87['doubleEncode'] = true;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$value89 = ($arguments87['value'] !== NULL ? $arguments87['value'] : $renderChildrenClosure88());

$output86 .= (!is_string($value89) ? $value89 : htmlspecialchars($value89, ($arguments87['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments87['encoding'] !== NULL ? $arguments87['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments87['doubleEncode']));

$output86 .= '"
	 class="grid-visibility-toggle">
<style type="text/css">
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments90 = array();
$arguments90['value'] = NULL;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return '
.fce-header { margin-top: 8px; background-color: transparent !important; }
.fce-container .t3-page-ce-body { margin-bottom: 8px; padding: 5px; }
td.spacer { width: 8px !important; max-width: 8px !important; height: 8px; }
.toggle-content { cursor: pointer; float: right; margin-top: -15px; }
.content-blind, .content-blind * { display: none; !important }
.flux-grid { width: 100%; }
.t3-page-ce .toggle-content { display: none; }
.t3-page-ce:hover .toggle-content { display: block; }
';
};
$viewHelper92 = $self->getViewHelper('$viewHelper92', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper');
$viewHelper92->setArguments($arguments90);
$viewHelper92->setRenderingContext($renderingContext);
$viewHelper92->setRenderChildrenClosure($renderChildrenClosure91);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper

$output86 .= $viewHelper92->initializeArgumentsAndRender();

$output86 .= '
</style>
<div id="content-blind-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments93 = array();
$arguments93['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments93['keepQuotes'] = false;
$arguments93['encoding'] = NULL;
$arguments93['doubleEncode'] = true;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$value95 = ($arguments93['value'] !== NULL ? $arguments93['value'] : $renderChildrenClosure94());

$output86 .= (!is_string($value95) ? $value95 : htmlspecialchars($value95, ($arguments93['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments93['encoding'] !== NULL ? $arguments93['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments93['doubleEncode']));

$output86 .= '" class="content-blind"></div>
<div id="toggle-content-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments96 = array();
$arguments96['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments96['keepQuotes'] = false;
$arguments96['encoding'] = NULL;
$arguments96['doubleEncode'] = true;
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$value98 = ($arguments96['value'] !== NULL ? $arguments96['value'] : $renderChildrenClosure97());

$output86 .= (!is_string($value98) ? $value98 : htmlspecialchars($value98, ($arguments96['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments96['encoding'] !== NULL ? $arguments96['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments96['doubleEncode']));

$output86 .= '" class="toggle-content">
	<span id="toggle-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments99 = array();
$arguments99['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments99['keepQuotes'] = false;
$arguments99['encoding'] = NULL;
$arguments99['doubleEncode'] = true;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$value101 = ($arguments99['value'] !== NULL ? $arguments99['value'] : $renderChildrenClosure100());

$output86 .= (!is_string($value101) ? $value101 : htmlspecialchars($value101, ($arguments99['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments99['encoding'] !== NULL ? $arguments99['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments99['doubleEncode']));

$output86 .= '" class="t3-icon t3-icon-actions t3-icon-view-table-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments102 = array();
// Rendering Boolean node
$arguments102['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'record.hidden', $renderingContext));
$arguments102['then'] = 'expand';
$arguments102['else'] = 'collapse';
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper104 = $self->getViewHelper('$viewHelper104', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper104->setArguments($arguments102);
$viewHelper104->setRenderingContext($renderingContext);
$viewHelper104->setRenderChildrenClosure($renderChildrenClosure103);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output86 .= $viewHelper104->initializeArgumentsAndRender();

$output86 .= '"></span>
</div>
<div id="grid-container-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments105 = array();
$arguments105['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments105['keepQuotes'] = false;
$arguments105['encoding'] = NULL;
$arguments105['doubleEncode'] = true;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$value107 = ($arguments105['value'] !== NULL ? $arguments105['value'] : $renderChildrenClosure106());

$output86 .= (!is_string($value107) ? $value107 : htmlspecialchars($value107, ($arguments105['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments105['encoding'] !== NULL ? $arguments105['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments105['doubleEncode']));

$output86 .= '">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments108 = array();
$arguments108['section'] = 'Grid';
$arguments108['arguments'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), '_all', $renderingContext);
$arguments108['partial'] = NULL;
$arguments108['optional'] = false;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper110 = $self->getViewHelper('$viewHelper110', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper110->setArguments($arguments108);
$viewHelper110->setRenderingContext($renderingContext);
$viewHelper110->setRenderChildrenClosure($renderChildrenClosure109);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output86 .= $viewHelper110->initializeArgumentsAndRender();

$output86 .= '
</div>
<script type="text/javascript">
	fluxCollapse';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments111 = array();
$arguments111['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments111['keepQuotes'] = false;
$arguments111['encoding'] = NULL;
$arguments111['doubleEncode'] = true;
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$value113 = ($arguments111['value'] !== NULL ? $arguments111['value'] : $renderChildrenClosure112());

$output86 .= (!is_string($value113) ? $value113 : htmlspecialchars($value113, ($arguments111['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments111['encoding'] !== NULL ? $arguments111['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments111['doubleEncode']));

$output86 .= ' = function() {
		var cookie = Ext.decode(Ext.util.Cookies.get(\'fluxCollapseStates\'));
		if (cookie == \'\') {
			cookie = [];
		};
		if (Ext.get(\'content-grid-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments114 = array();
$arguments114['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments114['keepQuotes'] = false;
$arguments114['encoding'] = NULL;
$arguments114['doubleEncode'] = true;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$value116 = ($arguments114['value'] !== NULL ? $arguments114['value'] : $renderChildrenClosure115());

$output86 .= (!is_string($value116) ? $value116 : htmlspecialchars($value116, ($arguments114['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments114['encoding'] !== NULL ? $arguments114['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments114['doubleEncode']));

$output86 .= '\').isDisplayed()) {
			Ext.get(\'content-blind-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments117 = array();
$arguments117['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments117['keepQuotes'] = false;
$arguments117['encoding'] = NULL;
$arguments117['doubleEncode'] = true;
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$value119 = ($arguments117['value'] !== NULL ? $arguments117['value'] : $renderChildrenClosure118());

$output86 .= (!is_string($value119) ? $value119 : htmlspecialchars($value119, ($arguments117['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments117['encoding'] !== NULL ? $arguments117['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments117['doubleEncode']));

$output86 .= '\').insertFirst(Ext.get(\'content-grid-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments120 = array();
$arguments120['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments120['keepQuotes'] = false;
$arguments120['encoding'] = NULL;
$arguments120['doubleEncode'] = true;
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$value122 = ($arguments120['value'] !== NULL ? $arguments120['value'] : $renderChildrenClosure121());

$output86 .= (!is_string($value122) ? $value122 : htmlspecialchars($value122, ($arguments120['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments120['encoding'] !== NULL ? $arguments120['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments120['doubleEncode']));

$output86 .= '\'));
			Ext.get(\'toggle-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments123 = array();
$arguments123['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments123['keepQuotes'] = false;
$arguments123['encoding'] = NULL;
$arguments123['doubleEncode'] = true;
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$value125 = ($arguments123['value'] !== NULL ? $arguments123['value'] : $renderChildrenClosure124());

$output86 .= (!is_string($value125) ? $value125 : htmlspecialchars($value125, ($arguments123['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments123['encoding'] !== NULL ? $arguments123['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments123['doubleEncode']));

$output86 .= '\').replaceClass(\'t3-icon-view-table-collapse\', \'t3-icon-view-table-expand\');
			if (cookie.indexOf(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments126 = array();
$arguments126['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments126['keepQuotes'] = false;
$arguments126['encoding'] = NULL;
$arguments126['doubleEncode'] = true;
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$value128 = ($arguments126['value'] !== NULL ? $arguments126['value'] : $renderChildrenClosure127());

$output86 .= (!is_string($value128) ? $value128 : htmlspecialchars($value128, ($arguments126['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments126['encoding'] !== NULL ? $arguments126['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments126['doubleEncode']));

$output86 .= ') < 0) {
				cookie.push(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments129 = array();
$arguments129['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments129['keepQuotes'] = false;
$arguments129['encoding'] = NULL;
$arguments129['doubleEncode'] = true;
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$value131 = ($arguments129['value'] !== NULL ? $arguments129['value'] : $renderChildrenClosure130());

$output86 .= (!is_string($value131) ? $value131 : htmlspecialchars($value131, ($arguments129['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments129['encoding'] !== NULL ? $arguments129['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments129['doubleEncode']));

$output86 .= ');
			};
		} else {
			Ext.get(\'grid-container-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments132 = array();
$arguments132['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments132['keepQuotes'] = false;
$arguments132['encoding'] = NULL;
$arguments132['doubleEncode'] = true;
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$value134 = ($arguments132['value'] !== NULL ? $arguments132['value'] : $renderChildrenClosure133());

$output86 .= (!is_string($value134) ? $value134 : htmlspecialchars($value134, ($arguments132['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments132['encoding'] !== NULL ? $arguments132['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments132['doubleEncode']));

$output86 .= '\').insertFirst(Ext.get(\'content-grid-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments135 = array();
$arguments135['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments135['keepQuotes'] = false;
$arguments135['encoding'] = NULL;
$arguments135['doubleEncode'] = true;
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$value137 = ($arguments135['value'] !== NULL ? $arguments135['value'] : $renderChildrenClosure136());

$output86 .= (!is_string($value137) ? $value137 : htmlspecialchars($value137, ($arguments135['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments135['encoding'] !== NULL ? $arguments135['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments135['doubleEncode']));

$output86 .= '\'));
			Ext.get(\'toggle-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments138 = array();
$arguments138['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments138['keepQuotes'] = false;
$arguments138['encoding'] = NULL;
$arguments138['doubleEncode'] = true;
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$value140 = ($arguments138['value'] !== NULL ? $arguments138['value'] : $renderChildrenClosure139());

$output86 .= (!is_string($value140) ? $value140 : htmlspecialchars($value140, ($arguments138['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments138['encoding'] !== NULL ? $arguments138['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments138['doubleEncode']));

$output86 .= '\').replaceClass(\'t3-icon-view-table-expand\', \'t3-icon-view-table-collapse\');
			for (var i in cookie) {
				if (cookie[i] == ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments141 = array();
$arguments141['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments141['keepQuotes'] = false;
$arguments141['encoding'] = NULL;
$arguments141['doubleEncode'] = true;
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$value143 = ($arguments141['value'] !== NULL ? $arguments141['value'] : $renderChildrenClosure142());

$output86 .= (!is_string($value143) ? $value143 : htmlspecialchars($value143, ($arguments141['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments141['encoding'] !== NULL ? $arguments141['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments141['doubleEncode']));

$output86 .= ') {
					delete(cookie[i]);
				};
			};
		};
		Ext.util.Cookies.set(\'fluxCollapseStates\', Ext.encode(cookie));
	};
	Ext.get(\'toggle-content-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments144 = array();
$arguments144['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments144['keepQuotes'] = false;
$arguments144['encoding'] = NULL;
$arguments144['doubleEncode'] = true;
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$value146 = ($arguments144['value'] !== NULL ? $arguments144['value'] : $renderChildrenClosure145());

$output86 .= (!is_string($value146) ? $value146 : htmlspecialchars($value146, ($arguments144['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments144['encoding'] !== NULL ? $arguments144['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments144['doubleEncode']));

$output86 .= '\').on(\'click\', fluxCollapse';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments147 = array();
$arguments147['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments147['keepQuotes'] = false;
$arguments147['encoding'] = NULL;
$arguments147['doubleEncode'] = true;
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$value149 = ($arguments147['value'] !== NULL ? $arguments147['value'] : $renderChildrenClosure148());

$output86 .= (!is_string($value149) ? $value149 : htmlspecialchars($value149, ($arguments147['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments147['encoding'] !== NULL ? $arguments147['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments147['doubleEncode']));

$output86 .= ');
	if (Ext.get(\'content-grid-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments150 = array();
$arguments150['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments150['keepQuotes'] = false;
$arguments150['encoding'] = NULL;
$arguments150['doubleEncode'] = true;
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$value152 = ($arguments150['value'] !== NULL ? $arguments150['value'] : $renderChildrenClosure151());

$output86 .= (!is_string($value152) ? $value152 : htmlspecialchars($value152, ($arguments150['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments150['encoding'] !== NULL ? $arguments150['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments150['doubleEncode']));

$output86 .= '\').hasClass(\'hidden\')) {
		fluxCollapse';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments153 = array();
$arguments153['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments153['keepQuotes'] = false;
$arguments153['encoding'] = NULL;
$arguments153['doubleEncode'] = true;
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$value155 = ($arguments153['value'] !== NULL ? $arguments153['value'] : $renderChildrenClosure154());

$output86 .= (!is_string($value155) ? $value155 : htmlspecialchars($value155, ($arguments153['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments153['encoding'] !== NULL ? $arguments153['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments153['doubleEncode']));

$output86 .= '();
	};
</script>
</div>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments156 = array();
$arguments156['name'] = 'Grid';
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
	<table cellspacing="0" cellpadding="0" id="content-grid-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments159 = array();
$arguments159['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments159['keepQuotes'] = false;
$arguments159['encoding'] = NULL;
$arguments159['doubleEncode'] = true;
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$value161 = ($arguments159['value'] !== NULL ? $arguments159['value'] : $renderChildrenClosure160());

$output158 .= (!is_string($value161) ? $value161 : htmlspecialchars($value161, ($arguments159['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments159['encoding'] !== NULL ? $arguments159['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments159['doubleEncode']));

$output158 .= '" class="flux-grid';
// Rendering ViewHelper Tx_Flux_ViewHelpers_IsCollapsedViewHelper
$arguments162 = array();
$arguments162['record'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row', $renderingContext);
$arguments162['then'] = ' hidden';
$arguments162['else'] = NULL;
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper164 = $self->getViewHelper('$viewHelper164', $renderingContext, 'Tx_Flux_ViewHelpers_IsCollapsedViewHelper');
$viewHelper164->setArguments($arguments162);
$viewHelper164->setRenderingContext($renderingContext);
$viewHelper164->setRenderChildrenClosure($renderChildrenClosure163);
// End of ViewHelper Tx_Flux_ViewHelpers_IsCollapsedViewHelper

$output158 .= $viewHelper164->initializeArgumentsAndRender();

$output158 .= '">
		<tbody>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments165 = array();
$arguments165['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'grid', $renderingContext);
$arguments165['as'] = 'gridrow';
$arguments165['iteration'] = 'rowIteration';
$arguments165['key'] = '';
$arguments165['reverse'] = false;
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
			<tr>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments168 = array();
$arguments168['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'gridrow', $renderingContext);
$arguments168['as'] = 'gridcolumn';
$arguments168['iteration'] = 'columnIteration';
$arguments168['key'] = '';
$arguments168['reverse'] = false;
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
					<td colspan="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments171 = array();
$arguments171['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'gridcolumn.colspan', $renderingContext);
$arguments171['keepQuotes'] = false;
$arguments171['encoding'] = NULL;
$arguments171['doubleEncode'] = true;
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$value173 = ($arguments171['value'] !== NULL ? $arguments171['value'] : $renderChildrenClosure172());

$output170 .= (!is_string($value173) ? $value173 : htmlspecialchars($value173, ($arguments171['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments171['encoding'] !== NULL ? $arguments171['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments171['doubleEncode']));

$output170 .= '" rowspan="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments174 = array();
$arguments174['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'gridcolumn.rowspan', $renderingContext);
$arguments174['keepQuotes'] = false;
$arguments174['encoding'] = NULL;
$arguments174['doubleEncode'] = true;
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$value176 = ($arguments174['value'] !== NULL ? $arguments174['value'] : $renderChildrenClosure175());

$output170 .= (!is_string($value176) ? $value176 : htmlspecialchars($value176, ($arguments174['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments174['encoding'] !== NULL ? $arguments174['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments174['doubleEncode']));

$output170 .= '" style="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments177 = array();
$arguments177['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'gridcolumn.style', $renderingContext);
$arguments177['keepQuotes'] = false;
$arguments177['encoding'] = NULL;
$arguments177['doubleEncode'] = true;
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$value179 = ($arguments177['value'] !== NULL ? $arguments177['value'] : $renderChildrenClosure178());

$output170 .= (!is_string($value179) ? $value179 : htmlspecialchars($value179, ($arguments177['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments177['encoding'] !== NULL ? $arguments177['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments177['doubleEncode']));

$output170 .= '">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments180 = array();
$arguments180['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'gridcolumn.areas', $renderingContext);
$arguments180['as'] = 'area';
$arguments180['key'] = '';
$arguments180['reverse'] = false;
$arguments180['iteration'] = NULL;
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
							';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Be_ContentAreaViewHelper
$arguments183 = array();
$arguments183['area'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.name', $renderingContext);
$arguments183['row'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row', $renderingContext);
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
								<div class="fce-header t3-row-header t3-page-colHeader t3-page-colHeader-label">
									<div>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments186 = array();
$arguments186['key'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.label', $renderingContext);
$arguments186['default'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.label', $renderingContext);
$arguments186['id'] = NULL;
$arguments186['htmlEscape'] = NULL;
$arguments186['arguments'] = NULL;
$arguments186['extensionName'] = NULL;
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper188 = $self->getViewHelper('$viewHelper188', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper188->setArguments($arguments186);
$viewHelper188->setRenderingContext($renderingContext);
$viewHelper188->setRenderChildrenClosure($renderChildrenClosure187);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output185 .= $viewHelper188->initializeArgumentsAndRender();

$output185 .= '</div>
								</div>
								<div class="fce-container t3-page-ce-wrapper">
									<div class="t3-page-ce">
										<div class="t3-page-ce-dropzone" id="colpos-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments189 = array();
$arguments189['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.colPos', $renderingContext);
$arguments189['keepQuotes'] = false;
$arguments189['encoding'] = NULL;
$arguments189['doubleEncode'] = true;
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$value191 = ($arguments189['value'] !== NULL ? $arguments189['value'] : $renderChildrenClosure190());

$output185 .= (!is_string($value191) ? $value191 : htmlspecialchars($value191, ($arguments189['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments189['encoding'] !== NULL ? $arguments189['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments189['doubleEncode']));

$output185 .= '-page-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments192 = array();
$arguments192['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.pid', $renderingContext);
$arguments192['keepQuotes'] = false;
$arguments192['encoding'] = NULL;
$arguments192['doubleEncode'] = true;
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$value194 = ($arguments192['value'] !== NULL ? $arguments192['value'] : $renderChildrenClosure193());

$output185 .= (!is_string($value194) ? $value194 : htmlspecialchars($value194, ($arguments192['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments192['encoding'] !== NULL ? $arguments192['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments192['doubleEncode']));

$output185 .= '-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments195 = array();
$arguments195['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.md5', $renderingContext);
$arguments195['keepQuotes'] = false;
$arguments195['encoding'] = NULL;
$arguments195['doubleEncode'] = true;
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$value197 = ($arguments195['value'] !== NULL ? $arguments195['value'] : $renderChildrenClosure196());

$output185 .= (!is_string($value197) ? $value197 : htmlspecialchars($value197, ($arguments195['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments195['encoding'] !== NULL ? $arguments195['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments195['doubleEncode']));

$output185 .= '-top-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments198 = array();
$arguments198['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments198['keepQuotes'] = false;
$arguments198['encoding'] = NULL;
$arguments198['doubleEncode'] = true;
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$value200 = ($arguments198['value'] !== NULL ? $arguments198['value'] : $renderChildrenClosure199());

$output185 .= (!is_string($value200) ? $value200 : htmlspecialchars($value200, ($arguments198['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments198['encoding'] !== NULL ? $arguments198['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments198['doubleEncode']));

$output185 .= '-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments201 = array();
$arguments201['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.name', $renderingContext);
$arguments201['keepQuotes'] = false;
$arguments201['encoding'] = NULL;
$arguments201['doubleEncode'] = true;
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$value203 = ($arguments201['value'] !== NULL ? $arguments201['value'] : $renderChildrenClosure202());

$output185 .= (!is_string($value203) ? $value203 : htmlspecialchars($value203, ($arguments201['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments201['encoding'] !== NULL ? $arguments201['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments201['doubleEncode']));

$output185 .= '" style="height: 16px;">
											<div class="t3-page-ce-wrapper-new-ce">
												';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_NewViewHelper
$arguments204 = array();
$arguments204['row'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row', $renderingContext);
$arguments204['area'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.name', $renderingContext);
$arguments204['after'] = 0;
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper206 = $self->getViewHelper('$viewHelper206', $renderingContext, 'Tx_Flux_ViewHelpers_Be_Link_Content_NewViewHelper');
$viewHelper206->setArguments($arguments204);
$viewHelper206->setRenderingContext($renderingContext);
$viewHelper206->setRenderChildrenClosure($renderChildrenClosure205);
// End of ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_NewViewHelper

$output185 .= $viewHelper206->initializeArgumentsAndRender();

$output185 .= '
												';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper
$arguments207 = array();
$arguments207['row'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row', $renderingContext);
$arguments207['area'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.name', $renderingContext);
$arguments207['reference'] = false;
$arguments207['relativeTo'] = array (
);
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper209 = $self->getViewHelper('$viewHelper209', $renderingContext, 'Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper');
$viewHelper209->setArguments($arguments207);
$viewHelper209->setRenderingContext($renderingContext);
$viewHelper209->setRenderChildrenClosure($renderChildrenClosure208);
// End of ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper

$output185 .= $viewHelper209->initializeArgumentsAndRender();

$output185 .= '
												';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper
$arguments210 = array();
$arguments210['row'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row', $renderingContext);
$arguments210['area'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.name', $renderingContext);
// Rendering Boolean node
$arguments210['reference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments210['relativeTo'] = array (
);
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper212 = $self->getViewHelper('$viewHelper212', $renderingContext, 'Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper');
$viewHelper212->setArguments($arguments210);
$viewHelper212->setRenderingContext($renderingContext);
$viewHelper212->setRenderChildrenClosure($renderChildrenClosure211);
// End of ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper

$output185 .= $viewHelper212->initializeArgumentsAndRender();

$output185 .= '
											</div>
										</div>
									</div>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments213 = array();
$arguments213['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'records', $renderingContext);
$arguments213['as'] = 'record';
$arguments213['key'] = '';
$arguments213['reverse'] = false;
$arguments213['iteration'] = NULL;
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
										<div class="t3-page-ce" id="element-tt_content-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments216 = array();
$arguments216['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'record.uid', $renderingContext);
$arguments216['keepQuotes'] = false;
$arguments216['encoding'] = NULL;
$arguments216['doubleEncode'] = true;
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
return NULL;
};
$value218 = ($arguments216['value'] !== NULL ? $arguments216['value'] : $renderChildrenClosure217());

$output215 .= (!is_string($value218) ? $value218 : htmlspecialchars($value218, ($arguments216['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments216['encoding'] !== NULL ? $arguments216['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments216['doubleEncode']));

$output215 .= '">
											<div class="t3-page-ce-dragitem">
												';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Be_ContentElementViewHelper
$arguments219 = array();
$arguments219['row'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'record', $renderingContext);
$arguments219['dblist'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'dblist', $renderingContext);
$arguments219['area'] = NULL;
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper221 = $self->getViewHelper('$viewHelper221', $renderingContext, 'Tx_Flux_ViewHelpers_Be_ContentElementViewHelper');
$viewHelper221->setArguments($arguments219);
$viewHelper221->setRenderingContext($renderingContext);
$viewHelper221->setRenderChildrenClosure($renderChildrenClosure220);
// End of ViewHelper Tx_Flux_ViewHelpers_Be_ContentElementViewHelper

$output215 .= $viewHelper221->initializeArgumentsAndRender();

$output215 .= '
											</div>
											<div class="t3-page-ce-dropzone" id="colpos-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments222 = array();
$arguments222['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'record.colPos', $renderingContext);
$arguments222['keepQuotes'] = false;
$arguments222['encoding'] = NULL;
$arguments222['doubleEncode'] = true;
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
return NULL;
};
$value224 = ($arguments222['value'] !== NULL ? $arguments222['value'] : $renderChildrenClosure223());

$output215 .= (!is_string($value224) ? $value224 : htmlspecialchars($value224, ($arguments222['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments222['encoding'] !== NULL ? $arguments222['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments222['doubleEncode']));

$output215 .= '-page-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments225 = array();
$arguments225['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.pid', $renderingContext);
$arguments225['keepQuotes'] = false;
$arguments225['encoding'] = NULL;
$arguments225['doubleEncode'] = true;
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$value227 = ($arguments225['value'] !== NULL ? $arguments225['value'] : $renderChildrenClosure226());

$output215 .= (!is_string($value227) ? $value227 : htmlspecialchars($value227, ($arguments225['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments225['encoding'] !== NULL ? $arguments225['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments225['doubleEncode']));

$output215 .= '-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments228 = array();
$arguments228['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row.uid', $renderingContext);
$arguments228['keepQuotes'] = false;
$arguments228['encoding'] = NULL;
$arguments228['doubleEncode'] = true;
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
return NULL;
};
$value230 = ($arguments228['value'] !== NULL ? $arguments228['value'] : $renderChildrenClosure229());

$output215 .= (!is_string($value230) ? $value230 : htmlspecialchars($value230, ($arguments228['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments228['encoding'] !== NULL ? $arguments228['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments228['doubleEncode']));

$output215 .= '-after-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments231 = array();
$arguments231['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'record.uid', $renderingContext);
$arguments231['keepQuotes'] = false;
$arguments231['encoding'] = NULL;
$arguments231['doubleEncode'] = true;
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$value233 = ($arguments231['value'] !== NULL ? $arguments231['value'] : $renderChildrenClosure232());

$output215 .= (!is_string($value233) ? $value233 : htmlspecialchars($value233, ($arguments231['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments231['encoding'] !== NULL ? $arguments231['encoding'] : TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments231['doubleEncode']));

$output215 .= '" style="height: 16px;">
												<div class="t3-page-ce-wrapper-new-ce">
													';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_NewViewHelper
$arguments234 = array();
$arguments234['after'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'record.uid', $renderingContext);
$arguments234['row'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row', $renderingContext);
$arguments234['area'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.name', $renderingContext);
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper236 = $self->getViewHelper('$viewHelper236', $renderingContext, 'Tx_Flux_ViewHelpers_Be_Link_Content_NewViewHelper');
$viewHelper236->setArguments($arguments234);
$viewHelper236->setRenderingContext($renderingContext);
$viewHelper236->setRenderChildrenClosure($renderChildrenClosure235);
// End of ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_NewViewHelper

$output215 .= $viewHelper236->initializeArgumentsAndRender();

$output215 .= '
													';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper
$arguments237 = array();
$arguments237['row'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row', $renderingContext);
$arguments237['relativeTo'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'record', $renderingContext);
$arguments237['area'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.name', $renderingContext);
$arguments237['reference'] = false;
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper239 = $self->getViewHelper('$viewHelper239', $renderingContext, 'Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper');
$viewHelper239->setArguments($arguments237);
$viewHelper239->setRenderingContext($renderingContext);
$viewHelper239->setRenderChildrenClosure($renderChildrenClosure238);
// End of ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper

$output215 .= $viewHelper239->initializeArgumentsAndRender();

$output215 .= '
													';
// Rendering ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper
$arguments240 = array();
$arguments240['row'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'row', $renderingContext);
$arguments240['relativeTo'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'record', $renderingContext);
$arguments240['area'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'area.name', $renderingContext);
// Rendering Boolean node
$arguments240['reference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper242 = $self->getViewHelper('$viewHelper242', $renderingContext, 'Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper');
$viewHelper242->setArguments($arguments240);
$viewHelper242->setRenderingContext($renderingContext);
$viewHelper242->setRenderChildrenClosure($renderChildrenClosure241);
// End of ViewHelper Tx_Flux_ViewHelpers_Be_Link_Content_PasteViewHelper

$output215 .= $viewHelper242->initializeArgumentsAndRender();

$output215 .= '
												</div>
											</div>
										</div>
									';
return $output215;
};

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output185 .= '
								</div>
							';
return $output185;
};
$viewHelper243 = $self->getViewHelper('$viewHelper243', $renderingContext, 'Tx_Flux_ViewHelpers_Be_ContentAreaViewHelper');
$viewHelper243->setArguments($arguments183);
$viewHelper243->setRenderingContext($renderingContext);
$viewHelper243->setRenderChildrenClosure($renderChildrenClosure184);
// End of ViewHelper Tx_Flux_ViewHelpers_Be_ContentAreaViewHelper

$output182 .= $viewHelper243->initializeArgumentsAndRender();

$output182 .= '
						';
return $output182;
};

$output170 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output170 .= '
					</td>
				';
return $output170;
};

$output167 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '
			</tr>
		';
return $output167;
};

$output158 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output158 .= '
		</tbody>
	</table>
';
return $output158;
};

$output86 .= '';

return $output86;
}

}
#1371495053    79611     
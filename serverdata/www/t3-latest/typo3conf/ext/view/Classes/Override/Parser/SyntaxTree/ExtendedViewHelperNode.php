<?php
namespace NamelessCoder\View\Override\Parser\SyntaxTree;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

$version = TYPO3_version;
$shouldMapClassesForV6 = $version{0} >= 6;
if ($shouldMapClassesForV6) {
	class_alias('TYPO3\\CMS\\Fluid\\Core\\Parser\\SyntaxTree\\ViewHelperNode', 'NamelessCoder\\View\\Override\\Parser\\SyntaxTree\\ViewHelperNodeProxy');
} else {
	class_alias('\\Tx_Fluid_Core_Parser_SyntaxTree_ViewHelperNode', 'NamelessCoder\\View\\Override\\Parser\\SyntaxTree\\ViewHelperNodeProxy');
}
class ExtendedViewHelperNodeProxy extends ViewHelperNodeProxy {

	/**
	 * @var array
	 */
	private static $argumentsCache = array();

	/**
	 * Constructor.
	 *
	 * @param object $viewHelper The view helper
	 * @param array $arguments Arguments of view helper - each value is a RootNode.
	 */
	public function __construct($viewHelper, array $arguments) {
		$className = get_class($viewHelper);
		if (FALSE === isset(self::$argumentsCache[$className])) {
			/** @var $objectManager \Tx_Extbase_Object_ObjectManagerInterface */
			$objectManager = \t3lib_div::makeInstance('Tx_Extbase_Object_ObjectManager');
			/** @var $configurationManager \Tx_Extbase_Configuration_ConfigurationManagerInterface */
			$configurationManager = $objectManager->get('Tx_Extbase_Configuration_ConfigurationManagerInterface');
			$allTypoScript = $configurationManager->getConfiguration(\Tx_Extbase_Configuration_ConfigurationManagerInterface::CONFIGURATION_TYPE_FULL_TYPOSCRIPT);
			if (FALSE === isset($allTypoScript['plugin.']['tx_view.']['viewhelpers.'][$className . '.']['arguments.'])) {
				self::$argumentsCache[$className] = array();
			} else {
				$argumentsTypoScript = (array) $allTypoScript['plugin.']['tx_view.']['viewhelpers.'][$className . '.']['arguments.'];
				$argumentsTypoScript = \t3lib_div::removeDotsFromTS($argumentsTypoScript);
				if (TRUE === isset($argumentsTypoScript['defaults'])) {
					$defaults = $this->convertTypoScriptSettingsToSyntaxTreeNodesRecursive(self::$argumentsCache[$className]['defaults']);
					self::$argumentsCache[$className]['defaults'] = $defaults;
				}
				if (TRUE === isset($argumentsTypoScript['override'])) {
					$overrides = $this->convertTypoScriptSettingsToSyntaxTreeNodesRecursive(self::$argumentsCache[$className]['override']);
					self::$argumentsCache[$className]['override'] = $overrides;
				}
			}
			self::$argumentsCache[$className] = $argumentsTypoScript;
		}
		if (TRUE === isset(self::$argumentsCache[$className]['defaults'])) {
			$arguments = $this->mergeArraysRecursive($arguments, self::$argumentsCache[$className]['defaults']);
		}
		if (TRUE === isset(self::$argumentsCache[$className]['override'])) {
			$arguments = $this->mergeArraysRecursive($arguments, self::$argumentsCache[$className]['override'], TRUE);
		}
		$arguments = $this->convertTypoScriptSettingsToSyntaxTreeNodesRecursive($arguments);
		return parent::__construct($viewHelper, $arguments);
	}

	/**
	 * @param array $current
	 * @param array $defaults
	 * @param boolean $override
	 * @return mixed
	 */
	private function mergeArraysRecursive($current, $defaults, $override = FALSE) {
		foreach ($defaults as $name => $value) {
			if (TRUE === $override) {
				$current[$name] = $value;
			} elseif (FALSE === isset($current[$name])) {
				$current[$name] = $value;
			}
		}
		return $current;
	}

	/**
	 * @param array $array
	 * @return array
	 */
	private function convertTypoScriptSettingsToSyntaxTreeNodesRecursive($array) {
		foreach ($array as $name => $value) {
			if (TRUE === is_array($value)) {
				$value = $this->convertTypoScriptSettingsToSyntaxTreeNodesRecursive($value);
				$node = new \Tx_Fluid_Core_Parser_SyntaxTree_ArrayNode($value);
			} elseif (FALSE === $value instanceof \Tx_Fluid_Core_Parser_SyntaxTree_NodeInterface) {
				$node = new \Tx_Fluid_Core_Parser_SyntaxTree_TextNode($value);
			} else {
				$node = $value;
			}
			$array[$name] = $node;
		}
		return $array;
	}

}

if ($shouldMapClassesForV6) {
	class_alias('NamelessCoder\\View\\Override\\Parser\\SyntaxTree\\ExtendedViewHelperNodeProxy', 'NamelessCoder\\View\\Override\\Parser\\SyntaxTree\\ExtendedViewHelperNode');
} else {
	class_alias('NamelessCoder\\View\\Override\\Parser\\SyntaxTree\\ExtendedViewHelperNodeProxy', 'Tx_View_Override_Parser_SyntaxTree_ExtendedViewHelperNode');
}
unset($shouldMapClassesForV6, $version);

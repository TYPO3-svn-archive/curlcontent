<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

/**
 * CurlContent
 */
Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'CurlContent Tables'	// wird im Backend sichtbar
);

$extensionName = t3lib_div::underscoredToUpperCamelCase($_EXTKEY);
$plugInPi1 = strtolower($extensionName) . '_pi1';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$plugInPi1] = 'layout,select_key,pages,recursive';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$plugInPi1] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($plugInPi1, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_cc.xml');

?>

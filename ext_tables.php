<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'T3Dev.' . $_EXTKEY,
	'Escortmodels',
	'Escort Models'
);

// Flexform
$pluginSignature = str_replace('_','',$_EXTKEY) . '_' . escortmodels;
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_' .escortmodels. '.xml');
// Flexform

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Escort Models');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_escortmodels_domain_model_model', 'EXT:escortmodels/Resources/Private/Language/locallang_csh_tx_escortmodels_domain_model_model.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_escortmodels_domain_model_model');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_escortmodels_domain_model_nationality', 'EXT:escortmodels/Resources/Private/Language/locallang_csh_tx_escortmodels_domain_model_nationality.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_escortmodels_domain_model_nationality');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_escortmodels_domain_model_size', 'EXT:escortmodels/Resources/Private/Language/locallang_csh_tx_escortmodels_domain_model_size.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_escortmodels_domain_model_size');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_escortmodels_domain_model_travel', 'EXT:escortmodels/Resources/Private/Language/locallang_csh_tx_escortmodels_domain_model_travel.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_escortmodels_domain_model_travel');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_escortmodels_domain_model_residence', 'EXT:escortmodels/Resources/Private/Language/locallang_csh_tx_escortmodels_domain_model_residence.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_escortmodels_domain_model_residence');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_escortmodels_domain_model_measurements', 'EXT:escortmodels/Resources/Private/Language/locallang_csh_tx_escortmodels_domain_model_measurements.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_escortmodels_domain_model_measurements');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_escortmodels_domain_model_eyecolor', 'EXT:escortmodels/Resources/Private/Language/locallang_csh_tx_escortmodels_domain_model_eyecolor.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_escortmodels_domain_model_eyecolor');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_escortmodels_domain_model_haircolor', 'EXT:escortmodels/Resources/Private/Language/locallang_csh_tx_escortmodels_domain_model_haircolor.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_escortmodels_domain_model_haircolor');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_escortmodels_domain_model_brasize', 'EXT:escortmodels/Resources/Private/Language/locallang_csh_tx_escortmodels_domain_model_brasize.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_escortmodels_domain_model_brasize');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_escortmodels_domain_model_shoesize', 'EXT:escortmodels/Resources/Private/Language/locallang_csh_tx_escortmodels_domain_model_shoesize.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_escortmodels_domain_model_shoesize');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_escortmodels_domain_model_age', 'EXT:escortmodels/Resources/Private/Language/locallang_csh_tx_escortmodels_domain_model_age.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_escortmodels_domain_model_age');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_escortmodels_domain_model_value', 'EXT:escortmodels/Resources/Private/Language/locallang_csh_tx_escortmodels_domain_model_value.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_escortmodels_domain_model_value');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_escortmodels_domain_model_language', 'EXT:escortmodels/Resources/Private/Language/locallang_csh_tx_escortmodels_domain_model_language.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_escortmodels_domain_model_language');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_escortmodels_domain_model_rate', 'EXT:escortmodels/Resources/Private/Language/locallang_csh_tx_escortmodels_domain_model_rate.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_escortmodels_domain_model_rate');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_escortmodels_domain_model_col', 'EXT:escortmodels/Resources/Private/Language/locallang_csh_tx_escortmodels_domain_model_col.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_escortmodels_domain_model_col');

//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
//	$_EXTKEY,
//	'sys_category'
//);


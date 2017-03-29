<?php
defined('TYPO3_MODE') or die();

/**
 * Add extra field showinpreview and some special news controls to sys_file_reference record
 */
$newSysFileReferenceColumns = array(
	'showinpreview' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.image_show_in_preview',
		'config' => array(
			'type' => 'check',
			'default' => 0
		)
	),
	'dontshowlogo' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.image_dont_show_logo',
		'config' => array(
			'type' => 'check',
			'default' => 0
		)
	),	
	'logomargin' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.logo_margin',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),		
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_reference', $newSysFileReferenceColumns);

// add special news palette
$GLOBALS['TCA']['sys_file_reference']['palettes']['newsPalette'] = array(
	//'showitem' => 'showinpreview',
	'showitem' => 'dontshowlogo',
	'showitem' => 'logomargin',
	'canNotCollapse' => TRUE	
);

<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'T3Dev.' . $_EXTKEY,
	'Escortmodels',
	array(
		'Model' => 'list, show, new, create, edit, update, delete',
		'Category' => 'list',			
		'Nationality' => 'list, show',
		'Size' => 'list, show',
		'Travel' => 'list, show',
		'Residence' => 'list, show',
		'Measurements' => 'list, show',
		'EyeColor' => 'list, show',
		'HairColor' => 'list, show',
		'BraSize' => 'list, show',
		'ShoeSize' => 'list, show',
		'Age' => 'list, show',
		'Value' => 'list, show',
		'Language' => 'list, show',
		'Rate' => 'list, show',
		'Col' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Model' => 'create, update, delete',
		'Nationality' => '',
		'Size' => '',
		'Travel' => '',
		'Residence' => '',
		'Measurements' => '',
		'EyeColor' => '',
		'HairColor' => '',
		'BraSize' => '',
		'ShoeSize' => '',
		'Age' => '',
		'Value' => '',
		'Language' => '',
		'Rate' => '',
		'Col' => '',
		
	)
);

<?php


/**
 * Add extra fields to the sys_category record
 */
$objectsSysCategoryColumns = array(

      	'link' => array(
            'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model.category_link',
            'exclude' => 1,
            'config' => array(
                'type' => 'input',
                'size' => '50',
                'max' => '1024',
                'eval' => 'trim',
                'wizards' => array(
                    'link' => array(
                        'type' => 'popup',
                        'title' => 'LLL:EXT:cms/locallang_ttc.xlf:header_link_formlabel',
                        'icon' => 'link_popup.gif',
                        'module' => array(
                            'name' => 'wizard_element_browser',
                            'urlParameters' => array(
                                'mode' => 'wizard'
                            )
                        ),
                        'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
                    )
                ),
                'softref' => 'typolink'
            )
        ),       

	'show_in_list' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_travel.show_in_list',
		'config' => array(
			'type' => 'check',
				'default' => 0
		)
	),		
		
	'model' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model',
		'config' => array(
			'type' => 'select',
			'renderType' => 'selectMultipleSideBySide',
			'foreign_table' => 'tx_escortmodels_domain_model_model',
			'MM' => 'tx_escortmodels_category_model_mm',
			'size' => 10,
			'autoSizeMax' => 30,
			'maxitems' => 9999,
			'multiple' => 0,
			'wizards' => array(
				'_PADDING' => 1,
				'_VERTICAL' => 1,
				'edit' => array(
					'module' => array(
						'name' => 'wizard_edit',
					),
					'type' => 'popup',
					'title' => 'Edit',
					'icon' => 'edit2.gif',
					'popup_onlyOpenIfSelected' => 1,
					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				'add' => Array(
					'module' => array(
						'name' => 'wizard_add',
					),
					'type' => 'script',
					'title' => 'Create new',
					'icon' => 'add.gif',
					'params' => array(
						'table' => 'tx_escortmodels_domain_model_model',
						'pid' => '###CURRENT_PID###',
						'setValue' => 'prepend'
					),
				),
			),
		),
	),        
        
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_category', $objectsSysCategoryColumns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('sys_category', 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_travel.show_in_list, show_in_list', '', 'after:description');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('sys_category', '--div--;LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model.category_additional, link', '', 'after:description');

$GLOBALS['TCA']['sys_category']['columns']['items']['config']['MM_oppositeUsage']['tx_escortmodels_domain_model_model']
= array(0 => 'categories');
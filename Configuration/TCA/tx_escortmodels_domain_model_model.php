
<?php
return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model',
		'label' => 'name',
		'label_alt' => 'last_name',
		'label_alt_force' => 1,
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,name,last_name,subtitle,teaser,description,description2, image,top_image,image_caption,bottom_image, education,background,fashion_designer,perfume,interests,lingerie_designer,flowers,favorite_travel,sports_interests,cuisine,jewelry,dream_travel,clothing_style,drinks,height,weight,residence,nationality,travel,size,hair_color,measurements,eye_color,bra_size,shoe_size,age,tatoos,piercing,smoking,language,rate,col,',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('escortmodels') . 'Resources/Public/Icons/tx_escortmodels_domain_model_model.gif'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, hide_non_auth, subtitle, teaser, description, description2, categories, image, list_image, vip_image, top_image, image_caption, bottom_image, education, background, fashion_designer, perfume, interests, lingerie_designer, flowers, favorite_travel, sports_interests, cuisine, jewelry, gifts, dream_travel, clothing_style, drinks, height, weight, residence, nationality, travel, size, hair_color, measurements, eye_color, bra_size, shoe_size, age, tatoos, piercing, smoking, language, rate, col',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, hide_no_auth, name, last_name, subtitle, description;;;richtext:rte_transform[mode=ts_links], description2;;;richtext:rte_transform[mode=ts_links],
		--div--;LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:flexform_general.categories, categories,		
		--div--;LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:flexform_general.images, list_image, vip_image, top_image, image_caption, image, bottom_image, 
		--div--;LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:flexform_general.info, education, background, fashion_designer, perfume, interests, lingerie_designer, flowers, favorite_travel, sports_interests, cuisine, gifts, dream_travel, clothing_style, drinks, height, weight, 
		--div--;LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:flexform_general.additional_info, residence, nationality, travel, size, hair_color, measurements, eye_color, bra_size, shoe_size, age, tatoos, piercing, smoking, rate, language, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_escortmodels_domain_model_model',
				'foreign_table_where' => 'AND tx_escortmodels_domain_model_model.pid=###CURRENT_PID### AND tx_escortmodels_domain_model_model.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),		
		'name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim, required'
			),
		),			
		'last_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.last_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim, required'
			),
		),	
		'hide_no_auth' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.hide_no_auth',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),						
		'subtitle' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.subtitle',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			)
		),
		'teaser' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.teaser',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 5,
				'eval' => 'trim'
			)
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'module' => array(
							'name' => 'wizard_rich_text_editor',
							'urlParameters' => array(
								'mode' => 'wizard',
								'act' => 'wizard_rte.php'
							)
						),
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'description2' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.description2',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'module' => array(
							'name' => 'wizard_rich_text_editor',
							'urlParameters' => array(
								'mode' => 'wizard',
								'act' => 'wizard_rte.php'
							)
						),
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		/*	
		'image' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.image',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'image',
				array(
					'appearance' => array(
						'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
					),
					'foreign_types' => array(
						'0' => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						)
					),
					'maxitems' => 999
				),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		*/
			
			
			'image' => array(
					'exclude' => 1,
					'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.image',
					'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('image', array(
							'foreign_selector_fieldTcaOverride' => array(
									'config' => array(
											'appearance' => array(
													'elementBrowserType' => 'file',
													'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,png'
											)
									)
							),
							'appearance' => array(
									'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference',
							),
							'minitems' => 0,
							'maxitems' => 9999,
							'foreign_types' => array(
									'0' => array(
											'showitem' => '
            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
            --palette--;;filePalette, logomargin,dontshowlogo'
									),
									\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
											'showitem' => '
          --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
          --palette--;;filePalette, logomargin,dontshowlogo'
									),
							)
					), $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']),
					'files' => array(
							'exclude' => 1,
							'label' => 'Files',
							'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('files', array(
									'appearance' => array(
											'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
									),
							), $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']),
					),
			),			

			
			'list_image' => array(
					'exclude' => 1,
					'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.list_image',
					'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
							'list_image',
							array(
									'appearance' => array(
											'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
									),
									'foreign_types' => array(
											'0' => array(
													'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
											),
											\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
													'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
											),
											\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
													'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
											),
											\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
													'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
											),
											\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
													'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
											),
											\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
													'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
											)
									),
									'maxitems' => 1
							),
							$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
							),
			),

			
			'vip_image' => array(
					'exclude' => 1,
					'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.vip_image',
					'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
							'vip_image',
							array(
									'appearance' => array(
											'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
									),
									'foreign_types' => array(
											'0' => array(
													'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
											),
											\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
													'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
											),
											\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
													'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
											),
											\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
													'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
											),
											\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
													'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
											),
											\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
													'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
											)
									),
									'maxitems' => 1
							),
							$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
							),
			),			
			
			
		'top_image' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.top_image',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'top_image',
				array(
					'appearance' => array(
						'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
					),
					'foreign_types' => array(
						'0' => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						)
					),
					'maxitems' => 1
				),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'image_caption' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.image_caption',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			)
		),
		'bottom_image' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.bottom_image',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'bottom_image',
				array(
					'appearance' => array(
						'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
					),
					'foreign_types' => array(
						'0' => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						)
					),
					'maxitems' => 1
				),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'education' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.education',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'background' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.background',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'fashion_designer' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.fashion_designer',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'perfume' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.perfume',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'interests' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.interests',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			)
		),
		'lingerie_designer' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.lingerie_designer',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			)
		),
		'flowers' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.flowers',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			)
		),
		'favorite_travel' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.favorite_travel',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			)
		),
		'sports_interests' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.sports_interests',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			)
		),
		'cuisine' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.cuisine',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'jewelry' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.jewelry',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'gifts' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.gifts',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),			
		'dream_travel' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.dream_travel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'clothing_style' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.clothing_style',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			)
		),
		'drinks' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.drinks',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'height' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.height',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'weight' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.weight',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'residence' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.residence',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_escortmodels_domain_model_residence',
				'foreign_table_where' => ' AND (tx_escortmodels_domain_model_residence.sys_language_uid = 0 OR tx_escortmodels_domain_model_residence.l10n_parent = 0) ORDER BY tx_escortmodels_domain_model_residence.title',		
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'nationality' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.nationality',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_escortmodels_domain_model_nationality',
				'foreign_table_where' => ' AND (tx_escortmodels_domain_model_nationality.sys_language_uid = 0 OR tx_escortmodels_domain_model_nationality.l10n_parent = 0) ORDER BY tx_escortmodels_domain_model_nationality.title',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		/*	
		'travel' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.travel',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_escortmodels_domain_model_travel',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		*/
			
			'travel' => array(
					'exclude' => 1,
					'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.travel',
					'config' => array(
							'type' => 'select',
							'renderType' => 'selectMultipleSideBySide',
							'foreign_table' => 'tx_escortmodels_domain_model_travel',
							'foreign_table_where' => ' AND (tx_escortmodels_domain_model_travel.sys_language_uid = 0 OR tx_escortmodels_domain_model_travel.l10n_parent = 0) ORDER BY tx_escortmodels_domain_model_travel.title',							
							'MM' => 'tx_escortmodels_model_travel_mm',
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
													'table' => 'tx_escortmodels_domain_model_travel',
													'pid' => '###CURRENT_PID###',
													'setValue' => 'prepend'
											),
											),
							),
					),
			),			
			
		'size' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.size',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_escortmodels_domain_model_size',
				'foreign_table_where' => ' AND (tx_escortmodels_domain_model_size.sys_language_uid = 0 OR tx_escortmodels_domain_model_size.l10n_parent = 0) ORDER BY tx_escortmodels_domain_model_size.sorting',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'hair_color' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.hair_color',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_escortmodels_domain_model_haircolor',
				'foreign_table_where' => ' AND (tx_escortmodels_domain_model_haircolor.sys_language_uid = 0 OR tx_escortmodels_domain_model_haircolor.l10n_parent = 0) ORDER BY tx_escortmodels_domain_model_haircolor.title',					
				'minitems' => 0,
				'maxitems' => 1,
			),
		),			
		'measurements' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.measurements',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),			
		/*	
		'measurements' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.measurements',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_escortmodels_domain_model_measurements',
				'foreign_table_where' => ' AND (tx_escortmodels_domain_model_measurements.sys_language_uid = 0 OR tx_escortmodels_domain_model_measurements.l10n_parent = 0) ORDER BY tx_escortmodels_domain_model_measurements.sorting',					
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		*/
		'eye_color' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.eye_color',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_escortmodels_domain_model_eyecolor',
				'foreign_table_where' => ' AND (tx_escortmodels_domain_model_eyecolor.sys_language_uid = 0 OR tx_escortmodels_domain_model_eyecolor.l10n_parent = 0) ORDER BY tx_escortmodels_domain_model_eyecolor.title',					
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		/*	
		'bra_size' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.bra_size',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_escortmodels_domain_model_brasize',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		*/	
		'bra_size' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.bra_size',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),					
		'shoe_size' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.shoe_size',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_escortmodels_domain_model_shoesize',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'age' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.age',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_escortmodels_domain_model_age',
				'foreign_table_where' => ' AND (tx_escortmodels_domain_model_age.sys_language_uid = 0 OR tx_escortmodels_domain_model_age.l10n_parent = 0) ORDER BY tx_escortmodels_domain_model_age.title',					
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'tatoos' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.tatoos',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_escortmodels_domain_model_value',
				'foreign_table_where' => ' AND (tx_escortmodels_domain_model_value.sys_language_uid = 0 OR tx_escortmodels_domain_model_value.l10n_parent = 0) ORDER BY tx_escortmodels_domain_model_value.sorting',					
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'piercing' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.piercing',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_escortmodels_domain_model_value',
				'foreign_table_where' => ' AND (tx_escortmodels_domain_model_value.sys_language_uid = 0 OR tx_escortmodels_domain_model_value.l10n_parent = 0) ORDER BY tx_escortmodels_domain_model_value.sorting',					
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		/*	
		'smoking' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.smoking',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		*/				
		'smoking' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.smoking',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_escortmodels_domain_model_value',
				'foreign_table_where' => ' AND (tx_escortmodels_domain_model_value.sys_language_uid = 0 OR tx_escortmodels_domain_model_value.l10n_parent = 0) ORDER BY tx_escortmodels_domain_model_value.sorting',					
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'language' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.language',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectMultipleSideBySide',
				'foreign_table' => 'tx_escortmodels_domain_model_language',
				'foreign_table_where' => ' AND (tx_escortmodels_domain_model_language.sys_language_uid = 0 OR tx_escortmodels_domain_model_language.l10n_parent = 0) ORDER BY tx_escortmodels_domain_model_language.title',
				'MM' => 'tx_escortmodels_model_langauge_mm',
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
							'table' => 'tx_escortmodels_domain_model_language',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
						),
					),
				),
			),
		),
		'rate' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.rate',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_escortmodels_domain_model_rate',
				'foreign_table_where' => ' AND (tx_escortmodels_domain_model_rate.sys_language_uid = 0 OR tx_escortmodels_domain_model_rate.l10n_parent = 0) ORDER BY tx_escortmodels_domain_model_rate.sorting',					
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'col' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:tx_escortmodels_domain_model_model.col',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_escortmodels_domain_model_col',
				'foreign_table_where' => ' AND (tx_escortmodels_domain_model_col.sys_language_uid = 0 OR tx_escortmodels_domain_model_col.l10n_parent = 0) ORDER BY tx_escortmodels_domain_model_col.sorting',					
				'foreign_field' => 'model',
				'foreign_sortby' => 'sorting',
				'maxitems' => 9999,
				'appearance' => array(
					'collapseAll' => 1,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'useSortable' => 1,
					'showAllLocalizationLink' => 1
				),
			),

		),
						
			'categories' => [
					'exclude' => 1,
					'l10n_mode' => 'mergeIfNotBlank',
					'label' => 'Categories',
					'config' => [
							'type' => 'select',
							'renderType' => 'selectTree',
							'treeConfig' => [
									'parentField' => 'parent',
									'appearance' => [
											'showHeader' => true,
											'allowRecursiveMode' => true,
											'expandAll' => true,
											'maxLevels' => 99,
									],
							],
							'MM' => 'sys_category_record_mm',
							'MM_match_fields' => [
									'fieldname' => 'categories',
									'tablenames' => 'tx_escortmodels_domain_model_model',
							],
							'MM_opposite_field' => 'items',
							'foreign_table' => 'sys_category',
							'foreign_table_where' => ' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent = 0) ORDER BY sys_category.sorting',
							'size' => 10,
							'autoSizeMax' => 20,
							'minitems' => 0,
							'maxitems' => 99,
					]
			],			
			
		
	),
);
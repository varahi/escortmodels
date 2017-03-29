<?php
defined('TYPO3_MODE') or die();

// Override news icon
$GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
    0 => 'LLL:EXT:escortmodels/Resources/Private/Language/locallang_db.xlf:flexform_general.model_folder',
    1 => 'news',
    2 => 'apps-pagetree-folder-contains-news'
];

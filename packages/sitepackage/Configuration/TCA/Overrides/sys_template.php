<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addStaticFile(
    'sitepackage',
    'Configuration/TypoScript',
    'Basic Template'
);

ExtensionManagementUtility::addStaticFile(
    'sitepackage',
    'Configuration/TypoScript/Variants/1',
    'Menu variant 1'
);

ExtensionManagementUtility::addStaticFile(
    'sitepackage',
    'Configuration/TypoScript/Variants/2',
    'Menu variant 2'
);

ExtensionManagementUtility::addStaticFile(
    'sitepackage',
    'Configuration/TypoScript/Variants/2.1',
    'Menu variant 2.1'
);

ExtensionManagementUtility::addStaticFile(
    'sitepackage',
    'Configuration/TypoScript/Variants/3',
    'Menu variant 3'
);

ExtensionManagementUtility::addStaticFile(
    'sitepackage',
    'Configuration/TypoScript/Variants/4',
    'Menu variant 4'
);

ExtensionManagementUtility::addStaticFile(
    'sitepackage',
    'Configuration/TypoScript/Variants/4.1',
    '+ Menu variant 4.1'
);

ExtensionManagementUtility::addStaticFile(
    'sitepackage',
    'Configuration/TypoScript/Variants/5',
    'Menu variant 5'
);

ExtensionManagementUtility::addStaticFile(
    'sitepackage',
    'Configuration/TypoScript/Variants/5.1',
    '+ Menu variant 5.1'
);


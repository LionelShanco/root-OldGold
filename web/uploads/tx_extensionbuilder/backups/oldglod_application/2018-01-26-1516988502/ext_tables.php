<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'OldGlod.OldglodApplication',
            'Information',
            'Information'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'OldGlod.OldglodApplication',
            'Management',
            'Management'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'OldGlod.OldglodApplication',
            'Administration',
            'Administration'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('oldglod_application', 'Configuration/TypoScript', 'OldGold Application');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_oldglodapplication_domain_model_ad', 'EXT:oldglod_application/Resources/Private/Language/locallang_csh_tx_oldglodapplication_domain_model_ad.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_oldglodapplication_domain_model_ad');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_oldglodapplication_domain_model_rating', 'EXT:oldglod_application/Resources/Private/Language/locallang_csh_tx_oldglodapplication_domain_model_rating.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_oldglodapplication_domain_model_rating');

    }
);

<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Newsiteindie.OldGold',
            'Information',
            'information'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('old_gold', 'Configuration/TypoScript', 'OLD-GOLD');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_oldgold_domain_model_user', 'EXT:old_gold/Resources/Private/Language/locallang_csh_tx_oldgold_domain_model_user.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_oldgold_domain_model_user');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_oldgold_domain_model_login', 'EXT:old_gold/Resources/Private/Language/locallang_csh_tx_oldgold_domain_model_login.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_oldgold_domain_model_login');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_oldgold_domain_model_categories', 'EXT:old_gold/Resources/Private/Language/locallang_csh_tx_oldgold_domain_model_categories.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_oldgold_domain_model_categories');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_oldgold_domain_model_admin', 'EXT:old_gold/Resources/Private/Language/locallang_csh_tx_oldgold_domain_model_admin.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_oldgold_domain_model_admin');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_oldgold_domain_model_rating', 'EXT:old_gold/Resources/Private/Language/locallang_csh_tx_oldgold_domain_model_rating.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_oldgold_domain_model_rating');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_oldgold_domain_model_serviceadds', 'EXT:old_gold/Resources/Private/Language/locallang_csh_tx_oldgold_domain_model_serviceadds.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_oldgold_domain_model_serviceadds');

    }
);

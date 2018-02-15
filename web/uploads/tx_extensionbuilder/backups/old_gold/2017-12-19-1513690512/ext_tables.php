<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('old_gold', 'Configuration/TypoScript', 'OLD-GOLD');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_oldgold_domain_model_user', 'EXT:old_gold/Resources/Private/Language/locallang_csh_tx_oldgold_domain_model_user.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_oldgold_domain_model_user');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_oldgold_domain_model_login', 'EXT:old_gold/Resources/Private/Language/locallang_csh_tx_oldgold_domain_model_login.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_oldgold_domain_model_login');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_oldgold_domain_model_categories', 'EXT:old_gold/Resources/Private/Language/locallang_csh_tx_oldgold_domain_model_categories.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_oldgold_domain_model_categories');

    }
);

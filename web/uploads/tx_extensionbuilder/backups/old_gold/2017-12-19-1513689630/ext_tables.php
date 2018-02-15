<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('old_gold', 'Configuration/TypoScript', 'OLDGOLD');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_oldgold_domain_model_admin', 'EXT:old_gold/Resources/Private/Language/locallang_csh_tx_oldgold_domain_model_admin.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_oldgold_domain_model_admin');

    }
);

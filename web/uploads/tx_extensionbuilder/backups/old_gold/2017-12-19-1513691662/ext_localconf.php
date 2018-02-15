<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Newsiteindie.OldGold',
            'Information',
            [
                'LOGIN' => 'list, show'
            ],
            // non-cacheable actions
            [
                'LOGIN' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    information {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('old_gold') . 'Resources/Public/Icons/user_plugin_information.svg
                        title = LLL:EXT:old_gold/Resources/Private/Language/locallang_db.xlf:tx_old_gold_domain_model_information
                        description = LLL:EXT:old_gold/Resources/Private/Language/locallang_db.xlf:tx_old_gold_domain_model_information.description
                        tt_content_defValues {
                            CType = list
                            list_type = oldgold_information
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);

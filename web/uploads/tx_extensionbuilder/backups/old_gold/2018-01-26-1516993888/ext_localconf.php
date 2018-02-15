<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'OldGold.OldGold',
            'Addpost',
            [
                'AdPost' => 'new, create, list, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'AdPost' => 'create, update, delete, '
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'OldGold.OldGold',
            'Showpost',
            [
                'AdPost' => 'adShow'
            ],
            // non-cacheable actions
            [
                'AdPost' => 'create, update, delete, '
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    addpost {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('old_gold') . 'Resources/Public/Icons/user_plugin_addpost.svg
                        title = LLL:EXT:old_gold/Resources/Private/Language/locallang_db.xlf:tx_old_gold_domain_model_addpost
                        description = LLL:EXT:old_gold/Resources/Private/Language/locallang_db.xlf:tx_old_gold_domain_model_addpost.description
                        tt_content_defValues {
                            CType = list
                            list_type = oldgold_addpost
                        }
                    }
                    showpost {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('old_gold') . 'Resources/Public/Icons/user_plugin_showpost.svg
                        title = LLL:EXT:old_gold/Resources/Private/Language/locallang_db.xlf:tx_old_gold_domain_model_showpost
                        description = LLL:EXT:old_gold/Resources/Private/Language/locallang_db.xlf:tx_old_gold_domain_model_showpost.description
                        tt_content_defValues {
                            CType = list
                            list_type = oldgold_showpost
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);

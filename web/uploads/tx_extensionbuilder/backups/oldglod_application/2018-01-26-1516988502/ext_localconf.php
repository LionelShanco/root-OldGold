<?php
defined('TYPO3_MODE') || die('Access denied.');
call_user_func(
    function()
    {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'OldGlod.OldglodApplication',
            'Information',
            [
                'Information' => 'list, listCategory'
            ],
            // non-cacheable actions
            [
                'Information' => 'list, listCategory'
            ]
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'OldGlod.OldglodApplication',
            'Management',
            [
                'Management' => 'list, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Management' => 'list, new, create, edit, update, delete'
            ]
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'OldGlod.OldglodApplication',
            'Administration',
            [
                'Administration' => 'whatever'
            ],
            // non-cacheable actions
            [
                'Administration' => 'whatever'
            ]
        );
        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    information {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('oldglod_application') . 'Resources/Public/Icons/user_plugin_information.svg
                        title = LLL:EXT:oldglod_application/Resources/Private/Language/locallang_db.xlf:tx_oldglod_application_domain_model_information
                        description = LLL:EXT:oldglod_application/Resources/Private/Language/locallang_db.xlf:tx_oldglod_application_domain_model_information.description
                        tt_content_defValues {
                            CType = list
                            list_type = oldglodapplication_information
                        }
                    }
                    management {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('oldglod_application') . 'Resources/Public/Icons/user_plugin_management.svg
                        title = LLL:EXT:oldglod_application/Resources/Private/Language/locallang_db.xlf:tx_oldglod_application_domain_model_management
                        description = LLL:EXT:oldglod_application/Resources/Private/Language/locallang_db.xlf:tx_oldglod_application_domain_model_management.description
                        tt_content_defValues {
                            CType = list
                            list_type = oldglodapplication_management
                        }
                    }
                    administration {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('oldglod_application') . 'Resources/Public/Icons/user_plugin_administration.svg
                        title = LLL:EXT:oldglod_application/Resources/Private/Language/locallang_db.xlf:tx_oldglod_application_domain_model_administration
                        description = LLL:EXT:oldglod_application/Resources/Private/Language/locallang_db.xlf:tx_oldglod_application_domain_model_administration.description
                        tt_content_defValues {
                            CType = list
                            list_type = oldglodapplication_administration
                        }
                    }
                }
                show = *
            }
       }'
        );
    }
);
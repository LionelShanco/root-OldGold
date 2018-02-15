<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:oldglod_application/Resources/Private/Language/locallang_db.xlf:tx_oldglodapplication_domain_model_ad',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title,category,description,location,phone,user,rating',
        'iconfile' => 'EXT:oldglod_application/Resources/Public/Icons/tx_oldglodapplication_domain_model_ad.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, category, description, location, phone, user, rating',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, category, description, location, phone, user, rating, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_oldglodapplication_domain_model_ad',
                'foreign_table_where' => 'AND tx_oldglodapplication_domain_model_ad.pid=###CURRENT_PID### AND tx_oldglodapplication_domain_model_ad.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],
        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:oldglod_application/Resources/Private/Language/locallang_db.xlf:tx_oldglodapplication_domain_model_ad.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'category' => [
            'exclude' => true,
            'label' => 'LLL:EXT:oldglod_application/Resources/Private/Language/locallang_db.xlf:tx_oldglodapplication_domain_model_ad.category',
            'config' => [
                'type' => 'select',
                'foreign_table' => 'sys_category',
            ]
        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:oldglod_application/Resources/Private/Language/locallang_db.xlf:tx_oldglodapplication_domain_model_ad.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'location' => [
            'exclude' => true,
            'label' => 'LLL:EXT:oldglod_application/Resources/Private/Language/locallang_db.xlf:tx_oldglodapplication_domain_model_ad.location',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'phone' => [
            'exclude' => true,
            'label' => 'LLL:EXT:oldglod_application/Resources/Private/Language/locallang_db.xlf:tx_oldglodapplication_domain_model_ad.phone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'user' => [
            'exclude' => true,
            'label' => 'LLL:EXT:oldglod_application/Resources/Private/Language/locallang_db.xlf:tx_oldglodapplication_domain_model_ad.user',
            'config' => [
                'type' => 'select',
                'foreign_table' => 'fe_users',
            ]
        ],
        'rating' => [
            'exclude' => true,
            'label' => 'LLL:EXT:oldglod_application/Resources/Private/Language/locallang_db.xlf:tx_oldglodapplication_domain_model_ad.rating',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_oldglodapplication_domain_model_rating',
                'foreign_field' => 'ad',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],

    ],
];
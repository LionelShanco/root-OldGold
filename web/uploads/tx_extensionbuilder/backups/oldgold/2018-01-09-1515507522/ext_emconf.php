<?php

/**
 * Extension Manager/Repository config file for ext "oldgold".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'OLDGOLD',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'rte_ckeditor' => '8.7.0-8.7.99',
            'bootstrap_package' => '8.0.0-8.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Oldgold\\Oldgold\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'lionel',
    'author_email' => 'ltharsivse@hof-university.de',
    'author_company' => 'OLDGOLD',
    'version' => '1.0.0',
];

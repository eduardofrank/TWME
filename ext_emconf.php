<?php

/**
 * Extension Manager/Repository config file for ext "twme".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'TWME',
    'description' => 'Sitepackage for Travel With ME',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '9.1.0-9.1.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'EduardoFrank\\Twme\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Eduardo Frank',
    'author_email' => 'edfrank@gmail.com',
    'author_company' => 'Eduardo Frank',
    'version' => '1.0.0',
];

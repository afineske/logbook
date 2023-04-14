<?php

/**
 * Extension Manager/Repository config file for ext "logbook_template".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Logbook Template',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Fineskecom\\LogbookTemplate\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Andreas Fineske',
    'author_email' => 'info@fineske.com',
    'author_company' => 'fineske.com',
    'version' => '1.0.0',
];

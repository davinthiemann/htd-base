<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'HTD Base',
    'description' => 'Basis-Modul der HDNET TYPO3 Distribution',
    'category' => 'templates',
    'author' => 'Davin Thiemann',
    'author_email' => 'dev@davinthiemann.de',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '^13.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

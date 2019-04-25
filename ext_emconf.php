<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (pl)',
    'description' => 'Polish (pl) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
    'category' => 'misc',
    'version' => '6.7.4',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Łukasz Uznański',
    'author_email' => 'lukasz@uznanski.pl',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'static_info_tables' => '6.7.3-6.7.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];

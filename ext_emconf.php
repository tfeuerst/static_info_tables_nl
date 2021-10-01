<?php /** @noinspection PhpUndefinedVariableInspection */
########################################################################
# Extension Manager/Repository config file for ext "static_info_tables_nl".
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (nl)',
    'description' => '(nl) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
    'category' => 'misc',
    'shy' => 0,
    'version' => '6.8.3',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 0,
    'lockType' => '',
    'author' => 'Ephraim Härer',
    'author_email' => 'mail@ephra.im',
    'author_company' => '',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => [
        'depends' => [
            'static_info_tables' => '6.9.0-6.99.99',
            'typo3' => '9.5.0-10.4.99',
        ],
        'suggests' => [
        ],
    ],
];

<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'fluidbug',
    'description' => '',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-12.4.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Praetorius\\Fluidbug\\' => 'Classes/',
        ],
    ],
];

<?php

$EM_CONF['context_indicator'] = [
    'title' => 'Context Indicator',
    'description' => 'Makes the application context more prominent in the backend.',
    'category' => 'be',
    'version' => '1.0.0',
    'state' => 'stable',
    'author' => 'Marvin Buchmann',
    'clearCacheOnLoad' => true, // remove when dropping v11 support
    'author_email' => 'marvin.buchmann@cybob.com',
    'author_company' => 'cybob communcation GmbH',
    'constraints' => [
        'depends' => [
            'php' => '7.4.0-8.2.99',
            'typo3' => '11.5.0-12.99.99'
        ]
    ],
    'autoload' => [
        'psr-4' => ['CYBOB\\ContextIndicator\\' => 'Classes']
    ]
];

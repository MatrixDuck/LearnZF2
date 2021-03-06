<?php

return [
    'router' => [
        'routes' => [

            'learn-zf2-i18n' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/learn-zf2-i18n',
                    'defaults' => [
                        'controller' => 'LearnZF2I18n\Controller\Index',
                        'action' => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'default' => [
                        'type' => 'Segment',
                        'options' => [
                            'route' => '/:action',
                            'constraints' => [
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ],
                        ],
                    ],
                ],
            ],

        ],
    ],

    'controllers' => [
        'invokables' => [
            'LearnZF2I18n\Controller\Index' => 'LearnZF2I18n\Controller\IndexController',
        ],
    ],

    'service_manager' => [
        'aliases' => [
            'translator' => 'mvctranslator',
        ],
    ],

    'view_manager' => [
        'template_path_stack' => [
            __DIR__.'/../view',
        ],
    ],

    'translator' => [
        'locale' => 'en_US',
        'translation_file_patterns' => [
            [
                'base_dir' => __DIR__.'/../languages/phpArray',
                'type' => 'phpArray',
                'pattern' => '%s.php',
            ],
            [
                'base_dir' => __DIR__.'/../languages/gettext',
                'type' => 'gettext',
                'pattern' => '%s.mo',
            ],
        ],
    ],
];

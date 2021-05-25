<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'Отчеты',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/',
            'new-tab' => false,
        ],

        // Custom
        [
            'section' => 'Custom',
        ],
        [
            'title' => 'Проекты',
            'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Todo',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Tasks',
                            'page' => 'custom/apps/todo/tasks'
                        ],
                        [
                            'title' => 'Docs',
                            'page' => 'custom/apps/todo/docs'
                        ],
                        [
                            'title' => 'Files',
                            'page' => 'custom/apps/todo/files'
                        ]
                    ]
                ],
                [
                    'title' => 'Inbox',
                    'bullet' => 'dot',
                    'page' => 'custom/apps/inbox',
                    'label' => [
                        'type' => 'label-danger label-inline',
                        'value' => 'new'
                    ]
                ]
            ]
        ],
        [
            'title' => 'Страница конфигурации',
            'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
            'bullet' => 'dot',
            'root' => true,
            'page' => "/config"
        ],

        // Layout
        // [
        //     'section' => 'Layout',
        // ],
        // [
        //     'title' => 'Themes',
        //     'desc' => '',
        //     'icon' => 'media/svg/icons/Design/Bucket.svg',
        //     'bullet' => 'dot',
        //     'root' => true,
        //     'submenu' => [
        //         [
        //             'title' => 'Light Aside',
        //             'page' => 'layout/themes/aside-light'
        //         ],
        //         [
        //             'title' => 'Dark Header',
        //             'page' => 'layout/themes/header-dark'
        //         ]
        //     ]
        // ],
        // [
        //     'title' => 'Subheaders',
        //     'desc' => '',
        //     'icon' => 'media/svg/icons/Code/Compiling.svg',
        //     'bullet' => 'dot',
        //     'root' => true,
        //     'submenu' => [
        //         [
        //             'title' => 'Toolbar Nav',
        //             'page' => 'layout/subheader/toolbar'
        //         ],
        //         [
        //             'title' => 'Actions Buttons',
        //             'page' => 'layout/subheader/actions'
        //         ],
        //         [
        //             'title' => 'Tabbed Nav',
        //             'page' => 'layout/subheader/tabbed'
        //         ],
        //         [
        //             'title' => 'Classic',
        //             'page' => 'layout/subheader/classic'
        //         ],
        //         [
        //             'title' => 'None',
        //             'page' => 'layout/subheader/none'
        //         ]
        //     ]
        // ],
        // [
        //     'title' => 'General',
        //     'icon' => 'media/svg/icons/General/Settings-1.svg',
        //     'bullet' => 'dot',
        //     'root' => true,
        //     'submenu' => [
        //         [
        //             'title' => 'Fixed Content',
        //             'page' => 'layout/general/fixed-content'
        //         ],
        //         [
        //             'title' => 'Minimized Aside',
        //             'page' => 'layout/general/minimized-aside'
        //         ],
        //         [
        //             'title' => 'No Aside',
        //             'page' => 'layout/general/no-aside'
        //         ],
        //         [
        //             'title' => 'Empty Page',
        //             'page' => 'layout/general/empty-page'
        //         ],
        //         [
        //             'title' => 'Fixed Footer',
        //             'page' => 'layout/general/fixed-footer'
        //         ],
        //         [
        //             'title' => 'No Header Menu',
        //             'page' => 'layout/general/no-header-menu'
        //         ]
        //     ]
        // ],
        // [
        //     'title' => 'Builder',
        //     'root' => true,
        //     'icon' => 'media/svg/icons/Home/Library.svg',
        //     'page' => 'builder',
        //     'visible' => 'preview',
        // ],


    ]

];

<?php

return [
    'sidebar' => [
        [
            'type' => 'link',
            'icon' => 'bi bi-palette',
            'text' => 'Dashboard',
            'url' => '?page=dashboard',
            'active' => true,
        ],
        [
            'type' => 'header',
            'text' => 'Students',
        ],
        [
            'type' => 'treeview',
            'icon' => 'bi bi-speedometer',
            'text' => 'Students',
            'submenu' => [
                [
                    'icon' => 'bi bi-circle',
                    'text' => 'New Student',
                    'url' => '?page=students_create',
                ],
                [
                    'icon' => 'bi bi-circle',
                    'text' => 'Manage Students',
                    'url' => '?page=students',
                ],
            ],
        ],
        [
            'type' => 'header',
            'text' => 'Teacher',
        ],
        [
            'type' => 'treeview',
            'icon' => 'bi bi-speedometer',
            'text' => 'Teachers',
            'submenu' => [
                [
                    'icon' => 'bi bi-circle',
                    'text' => 'New Teacher',
                    'url' => '?page=teachers_create',
                ],
                [
                    'icon' => 'bi bi-circle',
                    'text' => 'Manage Teachers',
                    'url' => '?page=teachers',
                ],
            ],
        ],
    ],
];

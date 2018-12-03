<?php
/**
 * File test.php
 * Created by PhpStorm.
 * User: liuzhi1107
 * Date: 2018/11/13
 * Time: 12:08
 */
$arr = [
    [   'id' => '1',
        'title' => '系统管理',
        'icon' => '',
        'level' => '1',
        'selected' => '1',
        'children' => [
            [
                'id' => '2',
                'title' => '信息管理',
                'icon' => '',
                'selected' => '1',
                'level' => '2',
                'children' => [
                    [
                        'id' => '3',
                        'title' => '基础信息',
                        'icon' => '',
                        'selected' => '1',
                        'level' => '3',
                        'children' => [
                            [
                                'id' => '4',
                                'title' => '角色管理',
                                'icon' => '',
                                'selected' => '1',
                                'url' => '',
                                'level' => '4',
                                'children' => [
                                    [
                                        'id' => '5',
                                        'title' => '新增',
                                        'icon' => '',
                                        'selected' => '1',
                                        'level' => '5',
                                    ],
                                    [
                                        'id' => '6',
                                        'title' => '编辑',
                                        'icon' => '',
                                        'selected' => '0',
                                        'level' => '5',
                                    ],

                                ]
                            ],
                            [
                                'id' => '7',
                                'title' => '角色管理2',
                                'icon' => '',
                                'selected' => '1',
                                'url' => '',
                                'level' => '4',
                                'children' => [],

                            ],

                        ]
                    ],
                    [
                        'id' => '8',
                        'title' => '信息管理2',
                        'icon' => '',
                        'selected' => '1',
                        'level' => '3',
                        'children' => [],
                    ]

                ]
            ],
        ]
    ]
];

$json = json_encode($arr);
echo $json;
<?php


return [
    'block' => [
        'fields' => []
    ],
    'options' => [
        'stacked' => true,
        'tabs'    => [
            'image1'     => [
                'title'  => 'Left Image',
                'fields' => [
                    'entry_image_alpha',
                ],
            ],
            'image2'    => [
                'title'  => 'Right Image',
                'fields' => [
                    'entry_image_beta',
                ],
            ],
            'classes'    => [
                'title'  => 'Classes',
                'fields' => [
                    'entry_classes',
                ],
            ]
        ],
    ]
];

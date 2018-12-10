<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionImageImageBlockCreateImageImageBlockFields extends Migration
{
    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'classes'     => 'anomaly.field_type.text',
        'image_alpha' => [
            'type'   => 'anomaly.field_type.image',
            'config' => [
                'folders'      => null,
                'aspect_ratio' => '2:3',
                'min_height'   => 400
            ]
        ],
        'image_beta' => [
            'type'   => 'anomaly.field_type.image',
            'config' => [
                'folders'      => null,
                'aspect_ratio' => '2:3',
                'min_height'   => 400
            ]
        ]
    ];
}

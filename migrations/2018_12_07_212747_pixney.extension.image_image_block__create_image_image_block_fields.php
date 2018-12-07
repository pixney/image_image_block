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
        'image_alpha' => 'anomaly.field_type.image',
        'image_beta'  => 'anomaly.field_type.image',
    ];
}

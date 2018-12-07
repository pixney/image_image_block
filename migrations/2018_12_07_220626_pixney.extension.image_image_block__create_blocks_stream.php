<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionImageImageBlockCreateBlocksStream extends Migration
{
    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'blocks'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'image_alpha',
        'image_beta',
    ];
}

<?php

namespace Pixney\ImageImageBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Pixney\ImageImageBlockExtension\Block\BlockModel;

class ImageImageBlockExtension extends BlockExtension
{
    protected $provides = 'anomaly.module.blocks::block.image_image';
    protected $model    = BlockModel::class;

    public function getView()
    {
        // TODO : Either get active theme or config..
        return 'pixney.theme.esharawater::blocks/image_image';

        // if ($this->block->configuration('something_special')) {
        //     return 'my_company.extension.awesome_block::alternate_view';
        // }
        // return $this->view;
    }
}

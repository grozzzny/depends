<?php
namespace grozzzny\depends\masonry;

use yii\web\View;

class MasonryAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/masonry';
    public $js = [
        'masonry.pkgd.min.js',
        'imagesloaded.pkgd.min.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}

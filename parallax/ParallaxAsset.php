<?php
namespace grozzzny\depends\parallax;

use yii\web\View;

class ParallaxAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/parallax';
    public $js = [
        'parallax.min.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}

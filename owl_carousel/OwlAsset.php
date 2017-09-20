<?php
namespace grozzzny\depends\owl_carousel;

use yii\web\View;

class OwlAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/owl_carousel';
    public $css = [
        'dist/assets/owl.carousel.css',
        'dist/assets/owl.theme.default.css',
        'owl.transitions.css',
    ];
    public $js = [
        'dist/owl.carousel.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}

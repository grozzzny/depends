<?php
namespace app\depends\plugins;

use yii\web\View;

class PluginsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/depends/plugins';
    public $css = [
        'wow-animations/animate.css',
    ];
    public $js = [
        'parallax/parallax.js',
        'smoothscroll/smoothscroll.js',
        'scrollreveal/scrollreveal.js',
        'wow-animations/wow.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}

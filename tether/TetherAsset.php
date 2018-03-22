<?php
namespace grozzzny\depends\tether;

use yii\web\AssetBundle;

class TetherAsset extends AssetBundle
{
    public $sourcePath = '@grozzzny\depends\tether\lib\dist';
    public $css = [
        'css/tether.min.css',
        'css/tether-theme-arrows.min.css',
        //'css/tether-theme-arrows-dark.css',
        'css/tether-theme-basic.min.css',
    ];
    public $js = [
        'js/tether.min.js',
    ];
}
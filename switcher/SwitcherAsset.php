<?php
namespace grozzzny\depends\switcher;

use yii\web\View;

class SwitcherAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/switcher';
    public $css = [
        'style-switcher.css',
    ];
    public $js = [
        'switcher.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}

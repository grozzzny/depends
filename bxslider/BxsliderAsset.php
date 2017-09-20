<?php
namespace grozzzny\depends\bxslider;

use yii\web\View;

class BxsliderAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/bxslider';
    public $css = [
        'jquery.bxslider.css',
    ];
    public $js = [
        'jquery.bxslider.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}

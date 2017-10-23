<?php
namespace grozzzny\depends\fancybox;

use yii\web\View;

class FancyboxAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/fancybox/dist';

    public $css = [
        'jquery.fancybox.min.css',
    ];
    public $js = [
        'jquery.fancybox.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
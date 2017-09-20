<?php
namespace grozzzny\depends\flexslider;

use yii\web\View;

class FlexsliderAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/flexslider';
    public $css = [
        'flexslider.css',
    ];
    public $js = [
        'jquery.flexslider-min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}

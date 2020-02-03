<?php
namespace grozzzny\depends\swiper5;

use yii\web\View;

class SwiperAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/swiper5';
    public $css = [
        'swiper.min.css',
    ];
    public $js = [
        'swiper.min.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}

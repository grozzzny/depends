<?php
namespace grozzzny\depends\wow_animations;

use yii\web\View;

class WowAnimationsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/wow_animations';
    public $css = [
        'animate.css',
    ];
    public $js = [
        'wow.min.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}

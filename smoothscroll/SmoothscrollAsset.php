<?php
namespace grozzzny\depends\smoothscroll;

use yii\web\View;

class SmoothscrollAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/smoothscroll';
    public $js = [
        'smoothscroll.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}

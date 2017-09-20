<?php
namespace grozzzny\depends\scrollreveal;

use yii\web\View;

class ScrollRevalAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/scrollreveal';
    public $js = [
        'scrollreveal.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}

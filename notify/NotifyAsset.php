<?php
namespace grozzzny\depends\notify;

use yii\web\View;

class NotifyAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/notify';
    public $css = [
        'notify.css',
    ];
    public $js = [
        'notify.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}

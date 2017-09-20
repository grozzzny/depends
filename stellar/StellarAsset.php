<?php
namespace grozzzny\depends\stellar;

use yii\web\View;

class StellarAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/stellar';
    public $js = [
        'jquery.stellar.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}

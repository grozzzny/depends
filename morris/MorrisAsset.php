<?php
namespace grozzzny\depends\morris;

class MorrisAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/morris/dist';
    public $css = [
        'morris.css',
    ];
    public $js = [
        'morris.min.js',
        'raphael.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

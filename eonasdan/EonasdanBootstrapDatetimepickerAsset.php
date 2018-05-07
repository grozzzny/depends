<?php
namespace grozzzny\depends\eonasdan;

use yii\web\AssetBundle;

class EonasdanBootstrapDatetimepickerAsset extends AssetBundle
{
    public $sourcePath = '@grozzzny/depends/eonasdan';
    public $css = [
        'bootstrap-datetimepicker.css',
    ];
    public $js = [
        'moment.js',
        'bootstrap-datetimepicker.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
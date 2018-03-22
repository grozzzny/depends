<?php
namespace grozzzny\depends\bootstrap4;

use yii\web\AssetBundle;

class Bootstrap4PluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/twbs/bootstrap/dist';
    public $js = [
        'js/bootstrap.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'grozzzny\depends\bootstrap4\Bootstrap4Asset',
        'grozzzny\depends\popper\PopperAsset',
    ];
}
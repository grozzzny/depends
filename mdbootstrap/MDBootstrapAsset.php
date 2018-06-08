<?php
namespace grozzzny\depends\mdbootstrap;

class MDBootstrapAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/mdbootstrap/src';
    public $css = [
        'css/mdb.min.css',
    ];
    public $depends = [
        'grozzzny\depends\bootstrap4\Bootstrap4Asset',
        'grozzzny\depends\bootstrap4\Bootstrap4PluginAsset',
        'grozzzny\depends\font_awesome\FontAwesomeAsset',
    ];
}

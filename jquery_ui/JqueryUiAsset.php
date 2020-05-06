<?php
namespace grozzzny\depends\jquery_ui;


class JqueryUiAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/jquery_ui';
    public $js = [
        'jquery-ui.min.js',
    ];
    public $css = [
        'jquery-ui.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

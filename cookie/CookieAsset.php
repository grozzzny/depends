<?php
namespace grozzzny\depends\cookie;

class CookieAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/cookie';
    public $js = [
        'jquery.cookie.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

<?php
namespace grozzzny\depends\sweetalert;

class SweetalertAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/sweetalert';
    public $css = [
        'sweetalert.css',
    ];
    public $js = [
        'sweetalert.min.js',
    ];
}

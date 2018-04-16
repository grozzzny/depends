<?php
namespace grozzzny\depends\toastr;

class ToastrAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/toastr';
    public $css = [
        'toastr.min.css',
    ];
    public $js = [
        'toastr.min.js',
    ];
}

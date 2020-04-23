<?php
namespace grozzzny\depends\cropper;

class CropperAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/cropper/src';
    public $css = [
        'cropper.css',
    ];
    public $js = [
        'cropper.js',
    ];
}

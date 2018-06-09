<?php
namespace grozzzny\depends\cropper;

class CropperAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/cropper/src';
    public $css = [
        'dist/cropper.css',
    ];
    public $js = [
        'dist/cropper.js',
    ];
}

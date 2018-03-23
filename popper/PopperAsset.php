<?php
namespace grozzzny\depends\popper;

use yii\web\AssetBundle;

class PopperAsset extends AssetBundle
{
    public $sourcePath = '@grozzzny/depends/popper';
    public $js = [
        'popper.min.js',
    ];
}
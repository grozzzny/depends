<?php
namespace grozzzny\depends\sticky;

class StickyAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/sticky';

    public $js = [
        'jquery.sticky.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

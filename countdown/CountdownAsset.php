<?php
namespace grozzzny\depends\countdown;


class CountdownAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/countdown';
    public $js = [
        'jquery.countdown.min.js',
    ];
}

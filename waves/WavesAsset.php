<?php
namespace grozzzny\depends\waves;

class WavesAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/waves/dist';
    public $css = [
        'waves.min.css',
    ];
    public $js = [
        'waves.min.js',
    ];
}

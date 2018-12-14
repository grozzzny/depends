<?php
namespace grozzzny\depends\fotorama;

class FotoramaAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/fotorama';

    public $css = [
        'fotorama.css',
    ];
    public $js = [
        'fotorama.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
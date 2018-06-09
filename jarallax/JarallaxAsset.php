<?php
namespace grozzzny\depends\jarallax;

class JarallaxAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/jarallax/dist';

    public $css = [
        'jarallax.css',
    ];
    public $js = [
        'jarallax.min.js',
        'jarallax-video.min.js',
        'jarallax-element.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
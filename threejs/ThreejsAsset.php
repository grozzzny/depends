<?php
namespace grozzzny\depends\threejs;

class ThreejsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/threejs/js';
    
    public $js = [
        'three.js',
        'controls/OrbitControls.js',

        'shaders/ParallaxShader.js',
    ];
}
<?php
namespace grozzzny\depends\jssocials;

class JssocialsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/jssocials/src';
    public $css = [
        'jssocials.css',
      //  'jssocials-theme-classic.css',
        'jssocials-theme-flat.css',
//        'jssocials-theme-minima.css',
//        'jssocials-theme-plain.css',
    ];
    public $js = [
        'jssocials.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'grozzzny\depends\font_awesome\FontAwesomeAsset',
    ];
}
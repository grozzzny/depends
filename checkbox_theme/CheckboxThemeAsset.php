<?php
namespace grozzzny\depends\checkbox_theme;

use yii\web\AssetBundle;

class CheckboxThemeAsset extends AssetBundle
{
    public $sourcePath = '@grozzzny/depends/checkbox_theme/src';
    public $css = [
        'checkbox-theme.css',
    ];
    public $js = [
        'checkbox-theme-validation.js',
    ];
}
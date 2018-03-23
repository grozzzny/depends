<?php
namespace grozzzny\depends\fontawesome5;

use yii\web\AssetBundle;

class FontAwesome5Asset extends AssetBundle
{
    public $sourcePath = '@vendor/components/font-awesome';
    public $css = [
        'css/fontawesome-all.css',
    ];
}
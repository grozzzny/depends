<?php
namespace grozzzny\depends\bootstrap4;

use yii\web\AssetBundle;

class Bootstrap4Asset extends AssetBundle
{
    public $sourcePath = '@vendor/twbs/bootstrap/dist';
    public $css = [
        'css/bootstrap.css',
    ];
}
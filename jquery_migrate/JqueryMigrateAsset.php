<?php
namespace grozzzny\depends\jquery_migrate;

use yii\web\View;

class JqueryMigrateAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/jquery_migrate';
    public $js = [
        'jquery-migrate-3.0.0.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

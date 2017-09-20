<?php
namespace grozzzny\depends\waypoints;

use yii\web\View;

class WaypointsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/waypoints';
    public $js = [
        'waypoints.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}

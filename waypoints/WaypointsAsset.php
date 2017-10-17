<?php
namespace grozzzny\depends\waypoints;

class WaypointsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/waypoints';
    public $js = [
        'jquery.waypoints.min.js',
        'sticky.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

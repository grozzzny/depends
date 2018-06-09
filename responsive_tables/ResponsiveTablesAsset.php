<?php
namespace grozzzny\depends\responsive_tables;

class ResponsiveTablesAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/responsive_tables/dist';
    public $css = [
        'rwd-table.css',
    ];
    public $js = [
        'rwd-table.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

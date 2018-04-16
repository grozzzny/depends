<?php
namespace grozzzny\depends\bootstrap4;

use Yii;
use yii\web\AssetBundle;
use yii\web\View;

class Bootstrap4PluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/twbs/bootstrap/dist';
    public $js = [
        'js/bootstrap.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'grozzzny\depends\bootstrap4\Bootstrap4Asset',
        'grozzzny\depends\popper\PopperAsset',
    ];

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        Yii::$app->view->on(View::EVENT_AFTER_RENDER, function (){
            unset(Yii::$app->view->assetBundles['yii\bootstrap\BootstrapPluginAsset']);
        });
    }
}
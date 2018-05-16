<?php
namespace grozzzny\depends\bootstrap4;

use Yii;
use yii\web\AssetBundle;
use yii\web\View;

class Bootstrap4Asset extends AssetBundle
{
    public $sourcePath = '@vendor/twbs/bootstrap/dist';
    public $css = [
        'css/bootstrap.css',
    ];

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        Yii::$app->view->on(View::EVENT_AFTER_RENDER, function (){
            unset(Yii::$app->view->assetBundles['yii\bootstrap\BootstrapAsset']);
        });
        Yii::$app->view->on(View::EVENT_BEGIN_BODY, function (){
            unset(Yii::$app->view->assetBundles['yii\bootstrap\BootstrapAsset']);
        });
    }
}
<?php
namespace grozzzny\depends\highlight;

class HighlightAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/highlight/src';
    public $css = [
        'styles/github.css',
    ];
    public $js = [
        'highlight.pack.js',
    ];
}

<?php
namespace grozzzny\depends\froala;

class FroalaAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@grozzzny/depends/froala/dist';

    public $css = [
        'codemirror.css',
        'froala_editor.pkgd.min.css',
        'froala_style.min.css',
    ];
    public $js = [
        'codemirror.js',
        'xml.min.js',
        'froala_editor.pkgd.min.js',
    ];
}
<?php

namespace app\assets;

use yii\web\AssetBundle;

class MaterialAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'material/css/material.min.css',
        'material/css/ripples.min.css',
    ];
    public $js = [
        'material/js/material.js',
        'material/js/ripples.minl.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}

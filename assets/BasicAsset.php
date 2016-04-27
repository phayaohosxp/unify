<?php

namespace app\assets;

use yii\web\AssetBundle;

class BasicAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'basic/bootstrap.css',
        'basic/bootstrap.min.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}

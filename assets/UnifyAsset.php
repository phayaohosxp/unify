<?php

namespace app\assets;

use yii\web\AssetBundle;

class UnifyAsset extends AssetBundle {

    public $sourcePath = '@skeeks/template/unify/src/HTML/assets/';
    public $css = [
        'plugins/bootstrap/css/bootstrap.min.css',
        'css/style.css',
        'css/headers/header-v4.css',
        'css/footers/footer-v1.css',
        'plugins/animate.css',
        'plugins/line-icons/line-icons.css',
        'plugins/font-awesome/css/font-awesome.min.css',
        'css/pages/blog_magazine.css',
        'css/theme-colors/default.css',
        'css/theme-skins/dark.css',
        'css/custom.css',
    ];
    public $js = [
        #    'plugins/jquery/jquery.min.js',
        #    'plugins/jquery/jquery-migrate.min.js',
          'plugins/bootstrap/js/bootstrap.min.js',
        'plugins/back-to-top.js',
        'plugins/smoothScroll.js',
        'js/custom.js',
        'js/app.js',
        'js/plugins/style-switcher.js',
        'js_highchart/highcharts.js',
        'js_highchart/highcharts.src.js',
        'js_highchart/highcharts-3d.js',
        'js_highchart/highcharts-3d.src.js',
        'js_highchart/highcharts-more.js',
        'js_highchart/highcharts-more.src.js',
    ];

    static public function getAssetUrl($asset) {
        return \Yii::$app->assetManager->getAssetUrl(\Yii::$app->assetManager->getBundle(static::className()), $asset);
    }

}

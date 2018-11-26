<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=cyrillic',
        'assets/plugins/font-awesome/css/font-awesome.min.css',
        'assets/plugins/iconic/css/material-design-iconic-font.min.css',
        'assets/plugins/material/material.min.css',
        'assets/plugins/bootstrap/css/bootstrap.min.css',
        'css/pages/extra_pages.css',
    ];
    public $js = [
        'assets/plugins/bootstrap/js/bootstrap.min.js',
        'assets/js/pages/extra_pages/login.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

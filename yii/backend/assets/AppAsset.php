<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=cyrillic',
        'assets/plugins/simple-line-icons/simple-line-icons.min.css',
        'assets/plugins/font-awesome/css/font-awesome.min.css',
        'assets/plugins/material/material.min.css',
        'css/material_style.css',
        'assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css',
        'css/pages/animate_page.css',
        'css/style.css',
        'css/plugins.min.css',
        'css/responsive.css',
        'css/theme-color.css',
        'assets/plugins/select2/css/select2.css',
        'assets/plugins/select2/css/select2-bootstrap.min.css',
    ];
    public $js = [
        'assets/plugins/popper/popper.min.js',
        'assets/plugins/jquery-blockui/jquery.blockui.min.js',
        'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'assets/plugins/sparkline/jquery.sparkline.min.js',
        'assets/js/pages/sparkline/sparkline-data.js',
        'assets/js/app.js',
        'assets/js/layout.js',
        'assets/js/theme-color.js',
        'assets/plugins/datatables/jquery.dataTables.min.js',
        'assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js',
        'assets/js/pages/table/table_data.js',
        'assets/plugins/material/material.min.js',
        'assets/js/pages/ui/animations.js',
        'assets/plugins/select2/js/select2.js',
        'assets/js/pages/select2/select2-init.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

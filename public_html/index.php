<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../yiilesson/vendor/autoload.php';
require __DIR__ . '/../yiilesson/vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../yiilesson/common/config/bootstrap.php';
require __DIR__ . '/../yiilesson/frontend/config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../yiilesson/common/config/main.php',
    require __DIR__ . '/../yiilesson/common/config/main-local.php',
    require __DIR__ . '/../yiilesson/frontend/config/main.php',
    require __DIR__ . '/../yiilesson/frontend/config/main-local.php'
);

(new yii\web\Application($config))->run();

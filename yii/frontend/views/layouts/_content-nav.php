<?
use yii\helpers\Html;
?>

<!-- Навигация -->
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title"><?= Html::encode($this->title) ?></div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?=Yii::$app->homeUrl;?>">Support</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active"><?=$this->title;?></li>
        </ol>
    </div>
</div>

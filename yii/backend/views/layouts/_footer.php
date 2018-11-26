<?
use yii\helpers\Html;
?>

<div class="page-footer">
    <div class="page-footer-inner"> <?= date('d.m.Y') ?> &copy; <?= Html::encode(Yii::$app->name) ?>
        <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss"><?= Yii::powered() ?></a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
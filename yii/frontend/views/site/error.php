<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = $name;
?>







<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <form class="form-404">
					<span class="login100-form-logo">
						<?=Html::img('@web/assets/img/logo2.png', ['alt' => 'logo'])?>
					</span>
                <span class="form404-title p-b-34 p-t-27">
						<?= Html::encode($this->title) ?>
					</span>
                <p class="content-404"><?= nl2br(Html::encode($message))?></p>
                <div class="container-login100-form-btn">
                    <a href="<?=Yii::$app->homeUrl;?>" class="login100-form-btn">
                        На главную
                    </a>
                </div>
                    <div class="text-center p-t-27">
                    <a class="txt1" href="<?=Url::to('');?>">
                        Перезагрузить страницу
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Восстановление пароля';
?>



<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form', 'options'=> [
                'class' => 'login100-form validate-form'
            ]]); ?>
            <span class="login100-form-logo">
                <?=Html::img('@web/assets/img/logo2.png', ['alt' => 'logo'])?>
            </span>
            <span class="login100-form-title p-b-34 p-t-27">
                <?= Html::encode($this->title) ?>
            </span>
            <div class="text-center error-form">
                <?foreach ($model->errors as $error){
                    echo $error[0] . "<br>";
                }?>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Введите почту">
                <?= Html::activeTextInput($model, 'email', ['placeholder' => 'Почта', 'class' => 'input100']); ?>
                <span class="focus-input100" data-placeholder="&#xf159;"></span>
            </div>
            <div class="container-login100-form-btn">
                <?= Html::submitButton('Восстановить', ['class' => 'login100-form-btn', 'name' => 'login-button']) ?>
            </div>
            <div class="text-center p-t-90">
                <?= Html::a('ВОЙТИ', ['site/login'], ['class'=>'txt1']) ?><br><br>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
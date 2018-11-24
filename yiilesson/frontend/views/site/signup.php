<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
?>


<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <?php $form = ActiveForm::begin(['id' => 'login-signup', 'options'=> [
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
                    echo $error[0]  . "<br>";;
                }?>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Введите логин">
                <?= Html::activeTextInput($model, 'login', ['placeholder' => 'Логин', 'class' => 'input100']); ?>
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Ваше имя">
                <?= Html::activeTextInput($model, 'username', ['placeholder' => 'Ваше имя и фамилия', 'class' => 'input100']); ?>
                <span class="focus-input100" data-placeholder="&#xf106;"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Введите почту">
                <?= Html::activeTextInput($model, 'email', ['placeholder' => 'Почта', 'class' => 'input100']); ?>
                <span class="focus-input100" data-placeholder="&#xf159;"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Введите пароль">
                <?= Html::activePasswordInput($model, 'password', ['placeholder' => 'Пароль', 'class' => 'input100']); ?>
                <span class="focus-input100" data-placeholder="&#xf191;"></span>
            </div>
            <div class="container-login100-form-btn">
                <?= Html::submitButton('Зарегистрироваться', ['class' => 'login100-form-btn','name' => 'signup-button']) ?>
            </div>
            <div class="text-center p-t-90">
                <?= Html::a('ВОЙТИ', ['site/login'], ['class'=>'registration']) ?><br><br>
            </div>
            <div class="text-center">
                <?= Html::a('Если вы забыли ваш паровль, восстановите его', ['site/request-password-reset'], ['class'=>'txt1']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>


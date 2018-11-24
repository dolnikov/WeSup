<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Chat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <? if($model->id){
            echo Html::submitButton('Изменить', ['class' => 'btn btn-info']);
        }else{
            echo Html::submitButton('Добавить', ['class' => 'btn btn-info']);
        } ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

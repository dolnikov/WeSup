<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Status */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->dropDownList(['label-default'=>'label-default','label-primary'=>'label-primary', 'label-success'=>'label-success', 'label-info'=>'label-info', 'label-warning'=>'label-warning', 'label-danger'=>'label-danger']) ?>

    <div class="form-group">
        <? if($model->id){
            echo Html::submitButton('Изменить', ['class' => 'btn btn-info']);
        }else{
            echo Html::submitButton('Добавить', ['class' => 'btn btn-info']);
        } ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>


<br><br>
Примеры цветов:
<span class="label label-default">label-default</span>
<span class="label label-primary">label-primary</span>
<span class="label label-success">label-success</span>
<span class="label label-info">label-info</span>
<span class="label label-warning">label-warning</span>
<span class="label label-danger">label-danger</span>
<br><br>
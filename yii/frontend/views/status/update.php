<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Status */

$this->title = 'Изменение статуса: ' . $model->name;
?>
<div class="row">
    <div class="col-md-12 col-sm-12">

        <div class="card card-box">
            <div class="card-head">

                <header><?= Html::encode($this->title) ?></header>

                <div class="tools">
                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                </div>
            </div>

            <!-- Начало формы -->
            <div class="card-body " id="bar-parent2">



                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>



            </div>
        </div>
    </div>
</div>

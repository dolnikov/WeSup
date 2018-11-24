<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\StatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Статусы';
?>


<?php Pjax::begin(); ?>
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

                <p>
                    <?= Html::a('Добавить статус', ['create'], ['class' => 'btn btn-info']) ?>
                </p>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'name',
                        'color',

                        ['class' => 'yii\grid\ActionColumn', 'template' => '{update}{delete}'],
                    ],
                ]); ?>


                <div class="row my-lg-4">
                    <div class="col-lg-5 my-lg-4 col-sm-12">
                        <b>Статусы</b> - это параметр который выбирается во время создания и редактирования
                        задачи, для того чтобы указать на каком этапе решения вы находитесь.
                    </div>
                </div>

                <div class="row my-lg-4">
                    <div class="col-lg-9 col-sm-12">
                        <span class="label label-default">label-default</span>
                        <span class="label label-primary">label-primary</span>
                        <span class="label label-success">label-success</span>
                        <span class="label label-info">label-info</span>
                        <span class="label label-warning">label-warning</span>
                        <span class="label label-danger">label-danger</span>
                    </div>
                </div>


            </div>

        </div>


    </div>
</div>


<?php Pjax::end(); ?>


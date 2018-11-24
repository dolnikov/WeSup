<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ChatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Чаты';
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
                    <?= Html::a('Добавить чат', ['create'], ['class' => 'btn btn-info']) ?>
                </p>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'name',

                        ['class' => 'yii\grid\ActionColumn', 'template' => '{update}{delete}'],
                    ],
                ]); ?>

            </div>
        </div>
    </div>
</div>

<?php Pjax::end(); ?>

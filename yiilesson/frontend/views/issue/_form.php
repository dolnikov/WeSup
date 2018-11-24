<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use frontend\assets\AppAsset;
/* @var $this yii\web\View */
/* @var $model frontend\models\Issue */
/* @var $form yii\widgets\ActiveForm */
?>



<?php $form = ActiveForm::begin(); ?>
<!-- Блок фора -->
<div class="row">
    <div class="col-md-12 col-sm-12">

        <div class="card card-box">
            <div class="card-head">

                <?php
                if($model->id){
                    echo "<header>Изменение задачи: $model->id </header>";
                }else{
                    echo "<header>Создать задачу</header>";
                }
                ?>

                <div class="tools">
                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                </div>
            </div>







            <div class="card-body " id="bar-parent2">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Задача</label>
                            <?=$form->field($model, 'question')->textInput(['class'=>'form-control', 'placeholder' => 'Текст задачи ...'])->label(false);?>
                        </div>

                        <!-- select 1 -->
                        <div class="row">
                            <label class="col-lg-2 col-md-3 control-label">Из чата:</label>
                            <div class="col-lg-10 col-md-9">
                                <?php
                                foreach ($chats as $chat){
                                    $chat_items[$chat->name] = $chat->name;
                                }
                                $chat_params = [
                                    'prompt' => 'Выберите статус...',
                                    'class' => 'form-control select2-multiple',
                                    'id' => 'multiple',
                                ];
                                if($model->chat){
                                    $chat_db = [$model->chat => $model->chat];
                                    $chat_items = array_merge($chat_db, $chat_items);
                                    array_shift($chat_params);
                                }

                                echo $form->field($model, 'chat')->dropDownList($chat_items,$chat_params)->label(false);
                                ?>
                            </div>
                        </div>

                        <!-- select 2 -->
                        <div class="row">
                            <label class="col-lg-2 col-md-3 control-label">Статус:</label>
                            <div class="col-lg-10 col-md-9">

                                <?php
                                foreach ($statuses as $status){
                                    $status_items[$status->name] = $status->name;
                                }

                                //Добавляет в выпадающий список сатусов, первым статус из БД, при редактировании записи
                                if($model->status_issue){
                                    $status_items_db = [$model->status_issue => $model->status_issue];
                                    $status_items = array_merge($status_items_db, $status_items);
                                }

                                echo $form->field($model, 'status_issue')->dropDownList($status_items,['class' => 'form-control  select2'])->label(false);
                                ?>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6 col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Комментарий</label>
                            <?=$form->field($model, 'comment')->textarea(['class'=>'form-control', 'placeholder' => 'Что было сделано ...', 'style' => 'height: 81px'])->label(false);?>
                        </div>
                        <!-- button -->
                        <?php
                        if($model->id){
                            echo Html::submitButton('Изменить', ['class' => 'btn btn-info']);
                        }else{
                            echo Html::submitButton('Добавить', ['class' => 'btn btn-info']);
                        }
                        ?>


                        <?= Html::a('Сбросить', ['issue/index'], ['class' => 'btn btn-default']);?>
                    </div>
                </div>
            </div>





        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>


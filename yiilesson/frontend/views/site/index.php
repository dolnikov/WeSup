<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = 'Все задачи';
?>

<?php $form = ActiveForm::begin(['id' => 'report-form']); ?>
<!-- Блок фора -->
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Отчет за период</header>
                <div class="tools">
                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                </div>
            </div>

            <!-- Начало формы -->
            <div class="card-body " id="bar-parent2">
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-4 col-sm-4">
                            <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd-mm-yyyy hh:ii" data-link-field="dtp_input3" data-link-format="dd-mm-yyyy hh:ii">
                                <?=HTML::activeTextInput($model, 'date_start', ['class'=>'form-control']);?>
                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                            </div>
                            <input type="hidden" id="dtp_input3" value="" />
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd-mm-yyyy hh:ii" data-link-field="dtp_input3" data-link-format="dd-mm-yyyy hh:ii">
                                <?=HTML::activeTextInput($model, 'date_end', ['class'=>'form-control']);?>
                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                            </div>
                            <input type="hidden" id="dtp_input3" value="" />
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <?= Html::submitButton('Показать', ['class' => 'btn btn-info']);?>
                        </div>
                    </div>
                </div>
                <?= Html::a('Позавчера',['index'], ['data-method' => 'post','data-params' => ['daysAgo' => '172800',],'class'=>'btn btn-default btn-xs ',]) ?>
                <?= Html::a('Вчера',['index'], ['data-method' => 'post','data-params' => ['daysAgo' => '86400',],'class'=>'btn btn-default btn-xs',]) ?>
                <?= Html::a('Сегодня',['index'], ['data-method' => 'post','data-params' => ['daysAgo' => '-1',],'class'=>'btn btn-default btn-xs',]) ?>
            </div>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>



<!-- Блок задачи -->
<div class="row">
    <div class="col-md-12">

        <?php
        foreach ($users as $user) {
            $i = 0;
            $j = 0;
            $list = "";
            foreach ($issues as $issue) {
                $i += $user->id == $issue->user_id?1:0;
            }


            if($i>0){

        ?>

            <div class="card card-box">
                <div class="card-head" >
<!--                    <span class="mdl-chip mdl-chip--contact">-->
<!--                        <span class="mdl-chip__contact mdl-color--grey-400 mdl-color-text--white">--><?//=$i?><!--</span>-->
<!--                        <span class="mdl-chip__text">--><?//=$user->username?><!--</span>-->
<!--                    </span>-->

                    <span class="user-issue">
                        <?=$user->username?>
                    </span>

                    <div class="tools">
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="table-scrollable  m-t--10">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="center text-gray" style="min-width: 10px; width:1%"> № </th>
                                <th class="center text-gray" style="min-width: 10px; width:3%"> Статус </th>
                                <th class="text-gray" style="min-width: 350px; width:40%"> Проблема</th>
                                <th class="text-gray" style="min-width: 350px; width:40%"> Решение </th>
                                <th class="center text-gray" style="min-width: 10px; width:8%"> Создана </th>
                                <th class="center text-gray" style="min-width: 10px; width:8%"> Изменена </th>
                            </tr>
                            </thead>
                            <tbody>
                                <?
                                    foreach ($issues as $issue){
                                        if($user->id == $issue->user_id){
                                            $j++;
                                            echo "<tr>";
                                                echo "<td  class='center'> $j) </td>";
                                                echo "<td class='center' style='min-width: 10px; width=5%'><span class='label label-sm ".$issue->statusLabelColor($issue->status_issue, $statuses)."'>$issue->status_issue</span></td>";
                                                echo "<td> $issue->question </td>";
                                                echo "<td> $issue->comment </td>";
                                                echo "<td class='center'>" . $issue->getDate($issue->created_at, true) . " </td>";
                                                if($issue->created_at == $issue->updated_at) {
                                                    echo "<td class='center'>—</td>";
                                                }else{
                                                    echo "<td class='center'>" . $issue->getDate($issue->updated_at) . " </td>";
                                                }
                                            echo "</tr>";
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        <?
            }
        }
        ?>


    </div>
</div>



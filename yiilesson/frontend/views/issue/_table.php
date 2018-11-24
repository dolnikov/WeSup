<?

use yii\helpers\Html;
use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $this yii\web\View */
/* @var $issues frontend\models\Issue */

?>





<!-- Блок задачи -->
<div class="row">
    <div class="col-md-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Все ваши задачи</header>
                <div class="tools">
                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                </div>
            </div>
            <div class="card-body ">
                <div class="table-scrollable">
                    <table class="table table-striped table-hover table-checkable order-column full-width table-bordered" id="example4">
                        <thead>
                        <tr>
                            <th class="center" style="min-width: 30px">№</th>
                            <th class="center" style="min-width: 70px"> Статус </th>
                            <th class="left" style="min-width: 350px"> Задача </th>
                            <th class="left" style="min-width: 300px"> Комментарий </th>
                            <th class="center" style="min-width: 70px" title="Дата создания задачи"> Создана </th>
                            <th class="center" style="min-width: 80px"> Чат </th>
                            <th class="center" style="min-width: 70px"> Действия </th>
                        </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($issues as $issue){?>
                            <tr class="odd gradeX">
                                <td class="left"><?=$issue->id?></td>
                                <td class="center">
                                    <span class="label label-lg <?=$issue->statusLabelColor($issue->status_issue, $statuses)?>"><?=$issue->status_issue?></span>
                                </td>
                                <td class="left"><?=$issue->question?></td>
                                <td class="left"><?=$issue->comment?></td>
                                <td class="center"><?= $issue->getDate($issue->created_at) ?></td>
                                <td class="center"><?=$issue->chat?></td>
                                <td class="center">
                                    <?= Html::a('<i class="fa fa-pencil"></i>',['index', 'id'=>$issue->id], ['class' => 'btn btn-tbl-edit btn-xs', 'title'=>'Редактировать']);?>
                                    <?= Html::a(' <i class="fa fa-trash-o"></i>',['delete', 'id'=>$issue->id],['data' => ['method' => 'post'],'data-confirm' => 'Вы уверены что хотите удалить эту задачу?','class' => 'btn btn-tbl-delete btn-xs', 'title'=>'Удалить']);?>

                                </td>
                            </tr>
                            <?php } ?>





                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



















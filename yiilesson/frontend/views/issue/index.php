<?php



$this->title = 'Мои задачи';

/* @var $this yii\web\View */
/* @var $issues frontend\models\Issue */
?>



<?= $this->render('_form', [
    'model' => $model,
    'statuses' => $statuses,
    'chats' => $chats,
]) ?>




<?
if($issues){
    echo $this->render('_table', [
        'issues' => $issues,
        'statuses' => $statuses,
    ]);
}
?>




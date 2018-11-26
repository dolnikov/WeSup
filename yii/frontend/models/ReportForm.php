<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
/**
 * This is the model class for table "issue".
 *
 * @property int $date_start
 * @property int $date_end
 */
class ReportForm extends Model
{

    public $date_start;
    public $date_end;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_start','date_end'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'date_start' => 'date start',
            'date_end' => 'date end',
        ];
    }




    /**
     * Задаем дату, которая будет вписана в поля даты на главной странице
     * Если дата пришла с POST то она и запишется в поля,
     * если пользователь впрвые на страницу, то вставится сегодняшняя дата от 00:00-23:59 времени
     * если дата пришла с кнопок, то там переджается через POST['daysAgo'] число, которые необходимо отнять от сегодняшней даты
     */
    public function setDateDays($date_day=0){
        if (!$this->load(Yii::$app->request->post()) && !$this->validate()) {
            $this->dateMinusDays($date_day);
        }

        if(Yii::$app->request->post('daysAgo')){
            $this->dateMinusDays($date_day);
        }
    }

    private function dateMinusDays($date_day){
        $this->date_start = date('d-m-Y 00:00', strtotime(date('d-m-Y 00:00'))-$date_day);
        $this->date_end = date('d-m-Y 23:59', strtotime(date('d-m-Y 23:59'))-$date_day);
    }



}

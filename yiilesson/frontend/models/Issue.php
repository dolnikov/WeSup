<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "issue".
 *
 * @property int $id
 * @property int $user_id
 * @property string $status_issue
 * @property string $question
 * @property string $comment
 * @property string $chat
 * @property int $created_at
 * @property int $updated_at
 */
class Issue extends \yii\db\ActiveRecord
{



    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'issue';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status_issue', 'question'], 'required', 'message' => ''],
            [['status_issue', 'question', 'comment', 'chat'], 'string', 'max' => 255, 'message' => ''],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'status_issue' => 'Status Issue',
            'question' => 'Question',
            'comment' => 'Comment',
            'chat' => 'Chat',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }



    public function statusLabelColor($status_issue, $statuses)
    {
        foreach ($statuses as $status){
            if($status_issue == $status->name){
                return $status->color;
            }
        }
        return 'label-default';
    }



    public function getDate($date)
    {
        if($date!="—"){
            return date('d.m.Y H:i', $date);
        }
    }





}

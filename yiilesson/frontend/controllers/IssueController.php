<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Issue;
use frontend\models\Status;
use frontend\models\Chat;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IssueController implements the CRUD actions for Issue model.
 */
class IssueController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


    public function actionIndex()
    {

        if(!Yii::$app->user->isGuest){
            $model = new Issue();
            $model->user_id = Yii::$app->user->id;
            $model->created_at = time();
            $model->updated_at = time();
            $issues = Issue::find()->where(['user_id' => Yii::$app->user->identity->id])->andWhere(['>', 'created_at', time()-46800])->orderBy(['(id)'=>SORT_DESC])->all();
            $statuses = Status::find()->all();
            $chats = Chat::find()->all();

            //При изменении
            if(Yii::$app->request->get('id')) {
                $model = $this->findModel(Yii::$app->request->get('id'));
                $model->updated_at = time();
            }

            //При сохранении
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect('index');
            }

            return $this->render('index', [
                'issues' => $issues,
                'model' => $model,
                'statuses' => $statuses,
                'chats' => $chats,
            ]);

        }

    }




    /**
     * Deletes an existing Issue model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Issue model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Issue the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Issue::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }



}

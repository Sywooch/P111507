<?php

namespace backend\controllers;

use Yii;
use backend\components\BackendController;
use backend\models\AuthAssignment;
use backend\models\AuthassignmentSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\User;

/**
 * AuthassignmentController implements the CRUD actions for AuthAssignment model.
 */
class AuthassignmentController extends BackendController
{
    /**
     * Lists all AuthAssignment models.
     * @param integer $id
     * @return mixed
     */
    public function actionIndex($id)
    {
        if ($id == 2 && Yii::$app->user->identity->id != 2) {
            return $this->redirect(['user/index']);
        }
        
        $user = User::findOne(['id' => $id]);
        if (!$user){
            return $this->redirect(['user/index']);
        }
        
        $searchModel = new AuthassignmentSearch();
        $dataProvider = $searchModel->search($id, Yii::$app->request->queryParams);
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'user' => $user
        ]);
    }

    /**
     * Creates a new AuthAssignment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionCreate($id)
    {
        $user = User::findOne(['id' => $id]);
        if (!$user){
            return $this->redirect(['user/index']);
        }
        
        $model = new AuthAssignment();

        if ($model->load(Yii::$app->request->post())) {
            $auth = Yii::$app->authManager;
            $authorRole = $auth->getRole($model->item_name);
            $authorAss = $auth->getAssignment($model->item_name, $id);
            if ($authorRole && !$authorAss) {
                $auth->assign($authorRole, $id);
                return $this->redirect(['index', 'id' => $id]);
            } else {
                $err = 'This role does not exist or roles have been added to this user, please check';
                $model->addError('item_name', $err);
            }
        }
        
        return $this->render('create', [
            'model' => $model,
            'user' => $user
        ]);
    }

    /**
     * Deletes an existing AuthAssignment model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $item_name
     * @param string $user_id
     * @return mixed
     */
    public function actionDelete($item_name, $user_id)
    {
        $this->findModel($item_name, $user_id)->delete();

        return $this->redirect(['index', 'id' => $user_id]);
    }

    /**
     * Finds the AuthAssignment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $item_name
     * @param string $user_id
     * @return AuthAssignment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($item_name, $user_id)
    {
        if (($model = AuthAssignment::findOne(['item_name' => $item_name, 'user_id' => $user_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

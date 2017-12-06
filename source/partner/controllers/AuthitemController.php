<?php

namespace backend\controllers;

use Yii;
use backend\components\BackendController;
use backend\models\AuthItem;
use backend\models\AuthitemSearch;
use yii\web\NotFoundHttpException;

/**
 * AuthitemController implements the CRUD actions for AuthItem model.
 */
class AuthitemController extends BackendController
{
    /**
     * Lists all AuthItem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AuthitemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AuthItem model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AuthItem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AuthItem();
        $msg = '';
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $auth = Yii::$app->authManager;
            if ($model->type == 1) {
                // role
                if ($auth->getRole($model->name)) {
                    $err = 'Role này đã tồn tại, vui lòng kiểm tra lại';
                    $model->addError('name', $err);
                } else {
                    $role = $auth->createRole($model->name);
                    $role->description = $model->description;
                    $auth->add($role);
                    $msg = 'Thêm mới Role "'.$model->name.'" thành công.';
                }
            } else {
                // permission
                if ($auth->getPermission($model->name)) {
                    $err = 'Permission này đã tồn tại, vui lòng kiểm tra lại';
                    $model->addError('name', $err);
                } else {
                    $permission = $auth->createPermission($model->name); 
                    $permission->description = $model->description;
                    $auth->add($permission);
                    $msg = 'Thêm mới Permission "'.$model->name.'" thành công.';
                }
            }
        }
        
        return $this->render('create', [
            'model' => $model,
            'msg' => $msg
        ]);
    }

    /**
     * Updates an existing AuthItem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $type = $model->type;
        $name = $model->name;
        
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $auth = Yii::$app->authManager;
            if ($type == 1) {
                // role
                $role = $auth->getRole($name);
                if ($role){
                    $role->name = $model->name;
                    $role->description = $model->description;
                    $auth->update($name, $role);
                } else {
                    $err = 'Role này không tồn tại, vui lòng kiểm tra lại';
                    $model->addError('name', $err);
                }
            } else {
                // permission
                $permission = $auth->getPermission($name);
                if ($permission){
                    $permission->name = $model->name;
                    $permission->description = $model->description;
                    $auth->update($name, $permission);
                } else {
                    $err = 'Permission này không tồn tại, vui lòng kiểm tra lại';
                    $model->addError('name', $err);
                }
            }
            
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AuthItem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $type = $model->type;
        $name = $model->name;
        $auth = Yii::$app->authManager;
        if ($type == 1) {
            // role
            $role = $auth->getRole($name);
            $act = $auth->remove($role);
        } else {
            // permission
            $permission = $auth->getPermission($name);
            $act = $auth->remove($permission);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the AuthItem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return AuthItem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AuthItem::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

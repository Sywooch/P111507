<?php

namespace backend\controllers;

use Yii;
use backend\components\BackendController;
use backend\models\User;
use backend\models\UserSearch;
use yii\web\NotFoundHttpException;
use backend\models\UserCreateForm;
use backend\models\AuthAssignment;
use yii\web\Controller;
/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserCreateForm();
        $model->status = 10; // set default of role is Active
        if ($model->load(Yii::$app->request->post())) 
        {
            $post = Yii::$app->request->post();
            $role = $post["role"];
            if($role =="admin")
            {
                $model->type = 1;
            }
            elseif($role =="manage")
            {
                $model->type = 2;
            }
            elseif($role =="content")
            {
                $model->type = 3;
            }
            elseif($role =="ctv")
            {
                $model->type = 4;
            }
            
            if ($user = $model->signup()) {
                return $this->redirect(['view', 'id' => $user->id]);                
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        
        $model = $this->findModel($id);
        $model->updated_at = date("Y-m-d H:i:s", time());
        
        
        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $act = $model->save(false, ['email', 'status', 'updated_at']);
            if (!$act) {
                $err = 'Update email or status fail, please try again';
                $model->addError('email', $err);
                $model->addError('status', $err);
            }
            if (!empty($model->password)) {
                $umodel = \common\models\User::findOne(['id' => $id]);
                $umodel->updated_at = date("Y-m-d H:i:s", time());
                $umodel->setPassword($model->password);
                $act = $umodel->save(false);
                if (!$act) {
                    $err = 'Update new password fail, please try again';
                    $model->addError('password', $err);
                }
            }
            $arrayRole  = Yii::$app->request->post("role");
            
            if (count($arrayRole) > 0) {
                AuthAssignment::deleteAll("user_id = :user_id", ["user_id"=>$id]);
                
                foreach ($arrayRole as $role) {
                    $modelRole = new AuthAssignment();
                    $modelRole->item_name   = $role;
                    $modelRole->user_id     = $id;
                    $modelRole->created_at  = time();
                    if ($modelRole->validate()) {
                        $modelRole->save();
                    }
                }
            }
            if (count($model->getErrors()) <= 0) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
      
        }
        $roleArray = array();
        if (isset($model->authAssignments)) {
            foreach ($model->authAssignments as $item) {
                if (isset($item->item_name)) {
                    array_push($roleArray, $item->item_name);
                }
            }
        }
        $this->view->params['roleArray'] = $roleArray;
        
        return $this->render('update', [
            'model' => $model,
            'roleArray' => $roleArray,
        ]);
    }
    
    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if ($id == 2 && Yii::$app->user->identity->id != 2) {
            return $this->redirect(['index']);
        }
        
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::find()->where('id = :id', [':id' => $id])->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

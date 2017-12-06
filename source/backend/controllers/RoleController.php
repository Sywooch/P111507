<?php

namespace backend\controllers;

use Yii;
use backend\components\BackendController;
use backend\models\AuthItemChild;
use backend\models\AuthitemchildSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\AuthItem;
use \yii\helpers\ArrayHelper;
use yii\web\Controller;
/**
 * AuthitemchildController implements the CRUD actions for AuthItemChild model.
 */
class RoleController extends Controller
{
    /**
     * Lists all AuthItemChild models.
     * @return mixed
     */
    public function actionIndex()
    {
		$arrayAuthManage 	= AuthItem::find()->where("type = 1")->orderBy('type asc, name asc')->all();
        return $this->render('index', [
			'arrayAuthManage'	=> $arrayAuthManage
        ]);
    }
	
	
	public function actionAuthItem()
	{
		$nameRole 	= yii::$app->request->get("parent");
		$dataRole 	= AuthItem::find()->where("type = 1 AND name = :name",['name'=>$nameRole])->orderBy('name asc')->all();
		if(count($dataRole)==0)
		{
			return $this->redirect(['index']);
		}
		
		/* Add Quyen Cho Role */
		if(Yii::$app->request->get("submit")=="update")
		{
			$parent = Yii::$app->request->get("parent");
			$selectArray = Yii::$app->request->get("permissionArray");
			if(count($selectArray)>0)
			{
				AuthItemChild::deleteAll("parent = :parent",['parent'=>$parent]);
				$arrayInsertPermission = array();
				foreach($selectArray as $ra)
				{
					$arrayInsertPermission[] = array(
						'parent'   	=> $parent,
						'child'   => $ra,
					 );
				}
				if(!empty($arrayInsertPermission) && count($arrayInsertPermission)>0)
                {
                    Yii::$app->db->createCommand()
                    ->batchInsert('auth_item_child',['parent','child'],
						$arrayInsertPermission
                    )->execute(); 
                }
			}
		}
		
		$arrayAuthItem 				= AuthItem::find()->where("name != :name",['name'=>$nameRole])->orderBy('name asc')->all();
		$arrayAuthManage 			= AuthItem::find()->where("type = 1")->orderBy('type asc, name asc')->all();
		$dataItemChild 				= AuthItemChild::find()
									->where("parent = :parent",['parent'=>$nameRole])
									->orderBy('parent asc')
									->all();
									
		$arrayAuthManageSelected = ArrayHelper::getColumn($dataItemChild,['child']);
		
		
		return $this->render('auth-item', [
			'arrayAuthManage'			=> $arrayAuthManage,
			'arrayAuthItem'				=> $arrayAuthItem,
			'arrayAuthManageSelected'	=> $arrayAuthManageSelected
        ]);
	}
    /**
     * Displays a single AuthItemChild model.
     * @param string $parent
     * @param string $child
     * @return mixed
     */
    public function actionView($parent, $child)
    {
        return $this->render('view', [
            'model' => $this->findModel($parent, $child),
        ]);
    }

    /**
     * Creates a new AuthItemChild model.
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
                    $err = 'Role này dã t?n t?i, vui lòng ki?m tra l?i';
                    $model->addError('name', $err);
                } else {
                    $role = $auth->createRole($model->name);
                    $role->description = $model->description;
                    $auth->add($role);
                    $msg = 'Thêm m?i Role "'.$model->name.'" thành công.';
                }
            } else {
                // permission
                if ($auth->getPermission($model->name)) {
                    $err = 'Permission này dã t?n t?i, vui lòng ki?m tra l?i';
                    $model->addError('name', $err);
                } else {
                    $permission = $auth->createPermission($model->name); 
                    $permission->description = $model->description;
                    $auth->add($permission);
                    $msg = 'Thêm m?i Permission "'.$model->name.'" thành công.';
                }
            }
        }
        
        return $this->render('create', [
            'model' => $model,
            'msg' => $msg
        ]);
    }
    
    /**
     * Deletes an existing AuthItemChild model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $parent
     * @param string $child
     * @return mixed
     */
    public function actionDelete($parent, $child)
    {
        $model = $this->findModel($parent, $child);
        $auth = Yii::$app->authManager;
        $role = $auth->createRole($model->parent);
        $permission = $auth->createPermission($model->child);
        $act = $auth->removeChild($role, $permission);        

        return $this->redirect(['index']);
    }

    /**
     * Finds the AuthItemChild model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $parent
     * @param string $child
     * @return AuthItemChild the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($parent, $child)
    {
        if (($model = AuthItemChild::findOne(['parent' => $parent, 'child' => $child])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

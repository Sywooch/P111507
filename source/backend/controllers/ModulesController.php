<?php 
namespace backend\controllers;
use Yii;
use backend\components\BackendController;
use backend\models\AuthItemChild;
use backend\models\AuthItem;
use yii\web\Controller;
class ModulesController extends Controller
{
    public function actionIndex()
    {
  		$arrayAuthManage 	= AuthItem::find()->where("type = 2")->orderBy('name asc')->all();
        return $this->render('index', [
    			'arrayAuthManage'	=> $arrayAuthManage
       ]);
    }
    
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
}
?>
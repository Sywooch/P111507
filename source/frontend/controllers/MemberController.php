<?php
namespace frontend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\imagine\Image;
use frontend\components\FrontendController;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use yii\db\Query;
/**
 * Member controller
 */
class MemberController extends FrontendController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => [
                    'info', 'payment', 'changepass', 'transaction', 'manage', 
                    'delete', 'update', 'post', 'manageblog', 'updatepost', 
                    'deletepost', 'sharecode', 'goalevent'],
                'rules' => [
                    [
                        'actions' => ['sharecode', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => [
                            'info', 'payment', 'changepass', 'transaction', 
                            'manage', 'delete', 'update', 'post', 'manageblog', 
                            'updatepost', 'deletepost','goalevent'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            /*
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ]
            */
        ];
    }
    
   
    
    /**
     * Infomation and update of member.
     *
     * @return mixed
     */
    public function actionInfo()
    {
        $member_model = $this->findModel(Yii::$app->user->identity->id);
        
        if (Yii::$app->request->post()) {
            $post = Yii::$app->request->post();
            
            if (isset($post['Member']) && $member_model->load(Yii::$app->request->post()) && $member_model->validate()) {
                // upload avatar if select
                $imageFile = UploadedFile::getInstance($member_model, 'image');
                if (isset($imageFile->tempName) && $imageFile->tempName != '') {
                    $arrtmp = explode('.', $imageFile->name);
                    $type = $imageFile->type;
                    $arrtype = explode('/', $type);
                    if ($imageFile->size > 2097152) {
                        $member_model->addError('image', 'Please select photo is size < 2MB.');
                    } elseif (!in_array(strtolower($arrtype[1]), array('png', 'jpg', 'gif', 'jpeg'))) {
                        $member_model->addError('image', 'Please select photo is format: png, jpg, jpeg, gif.');
                    } else {
                        $pathFile = '/member/' . date('Y') . '/' . date('m');
                        $uploadFolder = "uploads" . $pathFile;
                        if (!is_dir($uploadFolder)) {
                            mkdir($uploadFolder, 0775, TRUE);
                        }
                        $newname = trim($arrtmp[0]).'_'. time() . '.' . $arrtype[1];
                        $uploadFile = $uploadFolder . '/' . $newname;
                        $act = $imageFile->saveAs($uploadFile, true);
                        if ($act) {
                            $member_model->avatar = '/' . $uploadFile;
                        }else{
                            $member_model->addError('image', 'Upload image fail, please try again.');
                        }
                    }
                }
                
                $member_model->updated_at = date('Y-m-d H:i:s', time());
                
                if ($member_model->save(false)) {
                    return $this->refresh();
                } else {
                    Yii::$app->session->setFlash('member-persional-error', 'Cập nhật thông tin cá nhân thất bại, vui lòng thử lại.');
                }
            }
        }
        
        return $this->render('info', [
            'member_model' => $member_model
        ]);
    }
    
   
    
    public function actionChangepass()
    {
        $model = new ChangPasswordForm();
        
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->update()) {
                Yii::$app->session->setFlash('success', 'Đổi mật khẩu thành công.');
                return $this->redirect(['/member/changepass']);
            }
        }
        
        return $this->render('changepass', [
            'model' => $model,
        ]);
    }
    
   
    
    /**
     * Finds the Member model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Member the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Member::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Không tìm thấy Thành viên này trong hệ thống.');
        }
    }
    
    public function actionSubcate() 
     {
       
    }

}

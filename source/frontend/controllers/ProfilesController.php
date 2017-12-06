<?php
namespace frontend\controllers;

use yii;
use frontend\components\FrontendController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Questions;
use yii\data\ActiveDataProvider;
use common\models\Answers;
use common\models\User;
/**
 * Site controller
 */
class ProfilesController extends FrontendController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','questions'],
                'rules' => [
                    [
                        'actions' => ['index','questions'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['index','questions'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'oAuthSuccess'],
            ],
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex($id)
    {
		$model = User::findOne($id);
		if(empty($model)){
			throw new NotFoundHttpException();
		}
        $queryAnswer = Questions::find()
        ->innerJoin('answers', 'questions.id = answers.question_id')
        ->where(["answers.user_id"=>$id]);
        
        $dataProvider = new ActiveDataProvider([
            "query" => $queryAnswer,
            'pagination' => [
                'pageSize' => 5,
            ],
            "sort"  =>
            [
                "defaultOrder" => ["id" => SORT_DESC],
            ]
        ]);
        return $this->render("index", [
			'dataProvider' 	=> $dataProvider,
			'model'			=> $model
		]);
    }
    
    public function actionQuestions($id)
    {
		$model = User::findOne($id);
		if(empty($model)){
			throw new NotFoundHttpException();
		}
        $queryQuestions = Questions::find()
        ->where(["questions.user_id"=>$id]);
        
        $dataProvider = new ActiveDataProvider([
            "query" => $queryQuestions,
            'pagination' => [
                'pageSize' => 5,
            ],
            "sort"  =>
            [
                "defaultOrder" => ["id" => SORT_DESC],
            ]
        ]);
        return $this->render("index", ['dataProvider' => $dataProvider,"model"=>$model]);
    }
}

<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use backend\models\ChangPasswordForm;
use yii\data\SqlDataProvider;
use yii\helpers\HtmlPurifier;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'captcha', 'password'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'password'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
		$sqlTimestamp = "SELECT
	answers.id AS id,
	`user`.username AS username,
	questions.title AS question_text,
	answers.question_id,
	answers.answers_text AS answers_text
FROM
	answers
INNER JOIN user ON answers.user_id = `user`.id
INNER JOIN questions ON questions.id = answers.question_id
WHERE
	answers.censor_flag = 1
AND answers.`status` = 1
AND answers.create_time BETWEEN UNIX_TIMESTAMP('2017-10-01 00:00:000') AND UNIX_TIMESTAMP('2017-10-30 00:00:000')
ORDER BY
	`user`.username ASC";
	
		$sqlAnswer = "SELECT
			answers.id as id,
			`user`.username as username,
			questions.title as question_text,
			answers.question_id,
			answers.answers_text as answers_text
		FROM
			answers
		INNER JOIN user ON answers.user_id = `user`.id
		INNER JOIN questions ON questions.id = answers.question_id
		WHERE 
			answers.censor_flag = 1 
			and answers.`status` = 1
		AND MONTH(FROM_UNIXTIME(answers.create_time)) = MONTH(CURDATE())
		ORDER BY `user`.username ASC
		";
		
		$dataProvider = new SqlDataProvider([
			'sql'	=> $sqlTimestamp
		]);
		
		$dataMonth = array();	
		foreach($dataProvider->getModels() as $key => $model) {
			$outtext = HtmlPurifier::process($model["answers_text"]);
			$outtext = nv_get_plaintext($outtext);
			$outtext = convert_vi_to_en($outtext); 
			$outtext = preg_replace('/[^a-z0-9]+/i',' ',$outtext);
			$outtext = str_replace("  "," ",$outtext);	
			$outtext = trim($outtext);	
			$artext = explode(" ",$outtext);
			
			if(array_key_exists($model["username"],$dataMonth))
			{
				$dataMonth[$model["username"]]["numText"] +=  count($artext);
			}
			else
			{
				$dataMonth[$model["username"]]["numText"] =  count($artext);
			}		
		}
        return $this->render('index',["dataMonth"=>$dataMonth]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) 
		{
            return $this->goHome();
        }
        $this->layout = "layoutLogin";
		$model = new LoginForm();
		$model->load(Yii::$app->request->post());
        if ($model->load(Yii::$app->request->post()) && $model->login()) 
		{
            return $this->goBack();

        } 
		else 
		{
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

}

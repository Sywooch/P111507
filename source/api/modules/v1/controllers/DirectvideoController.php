<?php
namespace api\modules\v1\controllers;

use yii\rest\ActiveController;
use yii\web\Response;
use yii\web\UrlManager;
use DateTime;
use yii\filters\ContentNegotiator;

class DirectvideoController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Video';
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['ContentNegotiator'] = [
            'class' => ContentNegotiator::className(),
            'formats' => [
                'application/json' => Response::FORMAT_JSON,
            ],
        ];
        return $behaviors; 
    }
    
    public function actions() {
        $actions = parent::actions();
        unset($actions['delete'], $actions['create'],$actions['index'],$actions['view'],$actions['update']);
        $actions['directvideo'] = [
            'class' => 'api\modules\v1\controllers\actions\tube\GetvideotubeAction',
            'modelClass' => $this->modelClass,
            'checkAccess' => [$this, 'checkAccess'],
        ];
        
        $actions['photovideo'] = [
            'class' => 'api\modules\v1\controllers\actions\tube\GetphotogoogledriverAction',
            'modelClass' => $this->modelClass,
            'checkAccess' => [$this, 'checkAccess'],
        ];
        return $actions;
    }

    protected function verbs() {
        return [
            'directvideo' => ['GET'],//has token
        ];
    }

}

?>
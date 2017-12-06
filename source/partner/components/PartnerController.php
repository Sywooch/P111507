<?php

namespace partner\components;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

class PartnerController extends Controller
{
    public function behaviors()
    {
        $behaviors['access'] = [
            'class' => AccessControl::className(),
            'rules' => [
                [
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function ($rule, $action) 
					{
                        $module = Yii::$app->controller->module->id;
                        $action = Yii::$app->controller->action->id;
                        $controller = Yii::$app->controller->id;
                        $route = "$module/$controller/$action";
                        $route = strtolower($route);
                        if (\Yii::$app->user->can($route)) 
						{
                            return true;
                        }
                    }
                ],
            ],
        ];

        return $behaviors;
    }
        
}

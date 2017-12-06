<?php

namespace api\modules\v1\controllers\actions\tube;

use Yii;
use yii\base\Model;
use yii\rest\Action;
use yii\web\NotFoundHttpException;

class GetvideotubeAction extends Action {

    public $scenario = Model::SCENARIO_DEFAULT;
    public $viewAction = 'view';

    public function run() 
    {
        $data 	= $_GET;
        $my_id 	= $data['q'];
       echo $domain =  getTypeLinkVideo($my_id); 
    }

}

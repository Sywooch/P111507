<?php

namespace api\modules\v1\controllers\actions\tube;

use Yii;
use yii\base\Model;
use yii\rest\Action;
use yii\web\NotFoundHttpException;

class GetphotogoogledriverAction extends Action {

    public $scenario = Model::SCENARIO_DEFAULT;
    public $viewAction = 'view';

    public function run() 
    {
        $data = $_GET;
        //$my_id = $data['q'];
        echo '<br/>';
        $test = getPhotoGoogle('https://photos.google.com/share/AF1QipP3LTtbN7FRIEMw8p1-SvDTKV8dg5QWdDanAj4QRvhLChmb4cNV8knSoCEfwH13GA/photo/AF1QipOOtZdTyl9zrd6q6y24QcXwhQRIhy2h1HiUogRB?key=cnQ1c0FQMXZmVzg2Y2NPWlA2M1BiSHVxWS00dElR');
        
        print_r($test);
    }
    

}

<?php
namespace frontend\components;

use Yii;
use yii\web\UrlRuleInterface;
use frontend\models\UrlSlug;
use frontend\models\Link;
use yii\web\NotFoundHttpException;
use common\models\Clip;
class SeoUrl implements UrlRuleInterface
{
    /**
     * Parses the given request and returns the corresponding route and parameters.
     * @param \yii\web\UrlManager $manager the URL manager
     * @param \yii\web\Request $request the request component
     * @return array|boolean the parsing result. The route and the parameters are returned as an array.
     * If false, it means this rule cannot be used to parse this path info.
     */
    public function parseRequest($manager, $request)
    {
        
        $pathInfo = $request->getPathInfo();
        $parameters = $pathInfo;
        $params = [];
        $route = "";
        if($parameters !=='')
        {
            $modelUrlSlug = new UrlSlug();
            $dataSlug = $modelUrlSlug::find()->where("slug = :slug",["slug" =>$parameters])->one();
            if(count($dataSlug)>0)
            {
                if($dataSlug->params_id !="" && $dataSlug->params_id > 0)
                {
					$params['id'] = $dataSlug->params_id;
					$this->redirectBaLeMot($dataSlug->params_route,$dataSlug->params_id);
                }
                $route= $dataSlug->params_route;
            }
            else // URL NOT IN SLUG DATA XU LY CHUYEN VE 301
            {
				$pathInfoArray  = explode("/",$parameters);
				$pathInfoEnd    = end($pathInfoArray);
                
                //NH?NG ID CU DANG PARAM-SLUG-ID, BÓC TÁCH Ð? REDIRECT 301
				$inPathInfoEnd  = explode("-",$pathInfoEnd);
				$idInfo         =  end($inPathInfoEnd);
                
			    $dataParameters = explode("/",$parameters); 
                if(count($dataParameters)>1)
                {
                    $route = $dataParameters[0].'/'.$dataParameters[1]; //route = module/action
                }
                
                $modelUrlSlug = new UrlSlug();
                $dataSlug = $modelUrlSlug::find()
                    ->where("params_route = :params_route",["params_route" =>$route]);
                if(isset($dataParameters[2]))
                {
                    $dataSlug->andWhere('params_id = :params_id',['params_id' => $dataParameters[2] ]);
                }
                $resultDataSlug = $dataSlug->one();
				// xu ly url google nhan co dang : https://taichua.com/link/detail/417
                if(count($resultDataSlug) > 0) 
                {
                    $routeUrl = $route;
                    if(isset($dataParameters[2]))
                    {
                        $url = Yii::$app->urlManager->createUrl([$routeUrl,'id' => $dataParameters[2]]);
					}
                    else
                    {
                        $url = Yii::$app->urlManager->createUrl($routeUrl);
                    }
                    Yii::$app->response->redirect($url, 301);
					Yii::$app->end();
                }
                //URL SEO WEBSITE CU
				$arrayParamsOld = array(
                    'tin-moi-nhat' 	=> 'news/list',
                    'the-loai' 		=> 'link/catalog',
                    'chi-tiet-tin' 	=> 'news/detail'
                );
				// ROUTER IN  PARAMS OLD
				if(array_key_exists($pathInfoArray[0],$arrayParamsOld))
				{
					$routeUrl = $arrayParamsOld[$pathInfoArray[0]];
					$url = Yii::$app->urlManager->createUrl([$routeUrl,'id' => $idInfo]);
					Yii::$app->response->redirect($url, 301);
					Yii::$app->end();
				}
				elseif(count($pathInfoArray) == 1) // Kiem tra neu id co ton tai thi rediect 301 ve link, con khong thi redirect 301 ve home
				{
					$dataLink = Link::findOne($idInfo);
                    if(count($dataLink)>0)
                    {
                        $routeUrl = "link/detail";
    					$url = Yii::$app->urlManager->createUrl([$routeUrl,'id' => $idInfo]);
    					Yii::$app->response->redirect($url, 301);
    					Yii::$app->end();
                    }
                    else
                    {
                        throw new NotFoundHttpException();
                    }
                    
				}
					
				//END URL SEO WEBSITE CU
                if(isset($dataParameters[2]))
                {
                    $params['id'] = $dataParameters[2];
                }
            }
           
        }
        else
        {
            $route = 'site/index';
        }
        return [$route, $params];
    }

    /**
     * Creates a URL according to the given route and parameters.
     * @param \yii\web\UrlManager $manager the URL manager
     * @param string $route the route. It should not have slashes at the beginning or the end.
     * @param array $params the parameters
     * @return string|boolean the created URL, or false if this rule cannot be used for creating this URL.
     */
    public function createUrl($manager, $route, $params)
    {
        if(isset($route))
        {   
            $params_id= "";
            $strParamId = "";
            if(array_key_exists('id',$params))
            {
                $params_id= $params['id'];
                $strParamId = "/".$params_id;
            }
            
            $modelSlug = new UrlSlug();
            if($params_id != "")
            {
                $dataSlug = $modelSlug::find()->where("params_id = :params_id AND params_route = :params_route",[
                ":params_id"=>$params_id,
                ":params_route" => $route
                ])->one();
            }
            else
            {
                $dataSlug = $modelSlug::find()->where(" params_route = :params_route",[
                ":params_route" => $route,
                ])->one();
            }
			
            //Begin URL in DB
            if(count($dataSlug) > 0 )
            {
                if(count($params)>0)
                {
                    $strParams = $this->generateStrParams($params);
                    //URL Has PARAMS
                    $url = $dataSlug->slug.$strParams;
                }
                else
                {
                    //URL Non Params
                    $url = $dataSlug->slug;
                }
            }
            else
            {
                $strParams = $this->generateStrParams($params);
                if($strParams != "")
                {
                    $url = $route.$strParamId.$strParams;
                }
                else
                {
                    $url = $route.$strParamId;
                }
            }
        }
        
        //If a parameter is defined and not empty - add it to the URL
        return $url;
    }
    public function generateStrParams($params)
    {
        //$params = array()
        $strParams  = "";
        $query = "";
        $i = 0;
        foreach($params  as $key => $value)
        {
            if($key != "id")
            {
                if($i==0)
                {
                    $strParams = "?".$key.'='.$value;
                }
                else
                {
                    $strParams = '&'.$key.'='.$value;
                }
                $query .= $strParams;
                $i++;
            }
        }
        return $query;
                    
    }
	
	public function redirectBaLeMot($routeUrl,$idInfo)
	{
		if($routeUrl == "link/detail")
		{
			$model = Link::findOne($idInfo);
			if(count($model)>0)
			{
				if($model->url_301_redirect != "")
				{
					$url = $model->url_301_redirect;
					Yii::$app->response->redirect($url, 301);
					Yii::$app->end(); 
				}
			}
			else
			{
				throw new NotFoundHttpException();
			}
			
		}
		elseif($routeUrl == "clip/detail")
		{
			$model = Clip::findOne($idInfo);
			if(count($model)>0)
			{
				if($model->url_301_redirect != "")
				{
					$url = $model->url_301_redirect;
					Yii::$app->response->redirect($url, 301);
					Yii::$app->end(); 
				}
			}
			else
			{
				throw new NotFoundHttpException();
			}	
			
		}
	}
}
<?php
namespace frontend\components;

use yii\web\UrlRuleInterface;
use yii\base\Object;

class QuestionUrlRule extends Object implements UrlRuleInterface
{
    public function createUrl($manager, $route, $params)
    {
        if ($route === 'question/unanswered') {
            if (isset($params['slug'])) {
                return "unanswered". '/' . $params['slug'];
            }
        }
		
		if ($route === 'question/answered') {
            if (isset($params['slug'])) {
                return $params['slug'];
            }
        }
		
        return false; // this rule does not apply
    }

    public function parseRequest($manager, $request)
    {
        $pathInfo = $request->getPathInfo();
		
        if (preg_match('%^(?P<module>unanswered)\/(?P<slug>[._\sA-Za-z-0-9-]+)?%', $pathInfo, $matches)) {
			var_dump($matches);exit;
			return ['questions/unanswered', $params];
			exit;
            // check $matches[1] and $matches[3] to see
            // if they match a manufacturer and a model in the database.
            // If so, set $params['manufacturer'] and/or $params['model']
            // and return ['car/index', $params]
        }
		if (preg_match('%^(?P<slug>[._\sA-Za-z-0-9-]+)?%', $pathInfo, $matches)) {
			var_dump($matches);exit;
			return ['questions/answered', $params];
			exit;
            // check $matches[1] and $matches[3] to see
            // if they match a manufacturer and a model in the database.
            // If so, set $params['manufacturer'] and/or $params['model']
            // and return ['car/index', $params]
        }
        return false; // this rule does not apply
    }
}
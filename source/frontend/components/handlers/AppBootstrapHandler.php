<?php 
namespace frontend\components\handlers;
class AppBootstrapHandler implements \yii\base\BootstrapInterface {

    public function bootstrap($app)
    {
        return $this->addMainRules($app);
    }

    /**
     * Adds main application rules
     */
    protected function addMainRules(\yii\web\Application $app)
    {
        $rules = require(\Yii::getAlias('@frontend/config/url/rules.php'));

        return $app->getUrlManager()->addRules($rules, false);
    }
}
?>
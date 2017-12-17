<?php

namespace frontend\components;

use yii\web\Controller;
use Facebook\Facebook;
use Yii;

class FrontendController extends Controller {

	public $fb;
	public $permissions;

	public $gg;

	public function __construct($id, $module, $config = []) {
		$this->fb = new Facebook([
            'app_id' => Yii::$app->params['facebook_appid'],
            'app_secret' => Yii::$app->params['facebook_secret'],
            'default_graph_version' => 'v2.2',
        ]);
        $this->permissions = ['email, public_profile'];

        $this->gg = new \Google_Client();
        $this->gg->setApplicationName('Login to quickrep.dev');
        $this->gg->setClientId(Yii::$app->params['google_clientid']);
        $this->gg->setClientSecret(Yii::$app->params['google_client_secret']);
        $this->gg->setRedirectUri(cparams('google_redirect_url'));
        $this->gg->addScope("email");
        $this->gg->addScope("profile");
        parent::__construct($id, $module, $config);
	}

	public function beforeAction($action) {
		if (!parent::beforeAction($action)) {
			return false;
		}

		return true;
	}

	/*
		     * Displays SEO-related Variables
	*/
	public function display_seo() {

	}

}

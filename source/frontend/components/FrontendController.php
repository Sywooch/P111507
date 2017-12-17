<?php

namespace frontend\components;

use yii\web\Controller;
use Facebook\Facebook;
use Yii;

class FrontendController extends Controller {

	public $fb;
	public $permissions;

	public function __construct($id, $module, $config = []) {
		$this->fb = new Facebook([
            'app_id' => Yii::$app->params['facebook_appid'],
            'app_secret' => Yii::$app->params['facebook_secret'],
            'default_graph_version' => 'v2.2',
        ]);
        $this->permissions = ['email, public_profile'];
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

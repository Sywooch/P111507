<?php

namespace frontend\components;

use yii\web\Controller;

class FrontendController extends Controller {

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

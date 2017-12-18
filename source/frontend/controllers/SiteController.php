<?php

namespace frontend\controllers;

session_start();

use common\components\CRestFull;
use common\models\Answers;
use common\models\Comments;
use common\models\ContactForm;
use common\models\LoginForm;
use common\models\Questions;
use common\models\SearchForm;
use common\models\User;
use Facebook\Facebook;
use frontend\components\FrontendController;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use Yii;
use yii\base\InvalidParamException;
use yii\db\Expression;
use yii\helpers\Url;
use yii\web\BadRequestHttpException;

/**
 * Site controller
 */
class SiteController extends FrontendController {
	/**
	 * @inheritdoc
	 */
	public function behaviors()
    {
		return [
			// 'access' => [
			// 	'class' => AccessControl::className(),
			// 	'only' => ['logout', 'signup'],
			// 	'rules' => [
			// 		[
			// 			'actions' => ['signup', 'index', 'login'],
			// 			'allow' => true,
			// 			'roles' => ['?'],
			// 		],
			// 		[
			// 			'actions' => ['logout', 'index'],
			// 			'allow' => true,
			// 			'roles' => ['@'],
			// 		],
			// 	],
			// ],
			// 'verbs' => [
			// 	'class' => VerbFilter::className(),
			// ],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function actions()
    {
		return [
			// 'captcha' => [
			// 	'class' => 'yii\captcha\CaptchaAction',
			// 	'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
			// ],
			// 'auth' => [
			// 	'class' => 'yii\authclient\AuthAction',
			// 	'successCallback' => [$this, 'oAuthSuccess'],
			// ],
			// 'error' => [
			// 	'class' => 'yii\web\ErrorAction',
			// ],
		];
	}

	/**
	 * Displays homepage.
	 *
	 * @return mixed
	 */
	public function actionIndex()
    {
		/*
			        if (Yii::$app->user->isGuest) {
			            return $this->redirect(['/site/login']);
			        }

			        $questions_down = \yii\helpers\ArrayHelper::getColumn(Upvotes::find()
			        ->where([
			            'user_id' => cuser()->id,
			            'type' => Upvotes::TYPE_DOWN,
			            'upvote_type' => Upvotes::TYPE_QUESTIONS
			        ])->select('post_id')->asArray()->all(), 'post_id');

			        $query = Questions::find();

			        if (!empty($questions_down)) {
			            $query = Questions::find()
			            ->where('id NOT IN ('.implode(',', $questions_down).')');
			        }

			        $query->where(['status' => 1]);

		*/
		/*
					$dataProvider = new ActiveDataProvider([
			            'query' => $query,
			            'pagination' => [
			                'pageSize' => 5,
			            ],
			            'sort'=> [
			                'defaultOrder' => ['id' => SORT_DESC]
			            ]
			        ]);
		*/
        // if (cuser()) {
        //     echo "<a href='/dang-xuat'>Đăng xuất</a>";
        //     echo cuser()->username;die;
        // }
		$dataProvider = array();
		/** SEO META **/
		$metaTitle = "";
		$metaDescription = "";
		$metaImgage = "";

		$metaDescription = "Quickrep.vn - Một nền tảng Hỏi & Đáp được tạo ra kết nối mọi người chia sẻ và tìm kiếm thông tin về bất kỳ chủ đề nào,
            Đem những kiến thức được cá nhân hóa có chất lượng cao đến cho cộng đồng.";

		\Yii::$app->view->registerMetaTag([
			'name' => 'description',
			'content' => $metaDescription,
		]);
		\Yii::$app->view->registerMetaTag([
			'name' => 'og:description',
			'content' => $metaDescription,
		]);

		$metaTitle = "Quickrep.vn - Hỏi đáp trực tuyến, nơi chia sẻ kiến ​​thức và hiểu rõ hơn về thế giới.";
		$this->view->title = $metaTitle;
		\Yii::$app->view->registerMetaTag([
			'property' => 'og:title',
			'content' => $metaTitle . ' - Quickrep',
		]);

		$metaImages = \Yii::$app->homeUrl . '/v1/images/index_social_bg';
		\Yii::$app->view->registerMetaTag([
			'property' => 'og:image',
			'content' => $metaImages,
		]);

		\Yii::$app->view->registerMetaTag([
			'property' => 'og:url',
			'content' => \Yii::$app->homeUrl . Url::to(["site/index"]),
		]);
		$this->view->registerLinkTag([
			'rel' => 'canonical',
			'href' => \Yii::$app->homeUrl . Url::to(["site/index"]),
			'type' => 'text/html',
		]);
		$this->view->registerMetaTag([
			'name' => 'robots',
			'content' => 'noarchive',
		]);
		/** END SEO META **/

		return $this->render('index', ['dataProvider' => $dataProvider]);
	}

	/**
	 * Search page.
	 *
	 * @return mixed
	 */
	public function actionSearch() {
		$model = new SearchForm();
		$model->search = Yii::$app->session->get('search');
		$model->catalog = Yii::$app->session->get('catalog');
		return $this->render('search', ['model' => $model]);
	}

	/**
	 * Signs user up.
	 *
	 * @return mixed
	 */
	public function actionSignup()
    {
		// TODO config on behavior function
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $this->layout = 'login_layout';
		$model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            try {
                $res = $this->verifyReCaptcha($_POST['g-recaptcha-response']);
    			if (!$res) {
                    Yii::$app->session->setFlash(
                        'error',
                        'Captcha không hợp lệ.'
                    );
                    return $this->render('signup', [
                        'model' => $model,
                    ]);
                }
                if ($user = $model->signup()) {
                    Yii::$app->user->login($user, true);
    				Yii::$app->session->setFlash(
    					'success',
    					'Chúc mừng bạn đã đăng ký tài khoản thành công, '
    					. 'một email kích hoạt tài khoản đã được gửi vào hòm thư của bạn, '
    					. 'vui lòng kiểm tra để kích hoạt tài khoản trước khi đăng nhập.'
    				);
    				return $this->goHome();
    			}
            } catch (\Exception $e) {
                Yii::$app->session->setFlash($e->getMessage());
            }
		}
		/** SEO META **/
        $this->setMetaSignup();
		/** END SEO META **/

		return $this->render('signup', [
			'model' => $model,
            'fb_login_url' => $this->getFacebookUrl(),
            'gg_login_url' => $this->gg->createAuthUrl()
		]);
	}

    /**
     * get Facebook login url.
     * @return string
     */
    private function getFacebookUrl() 
    {
        $fb_helper = $this->fb->getRedirectLoginHelper();
        return $fb_helper->getLoginUrl(Yii::$app->params['facebook_redirect_url'], $this->permissions);
    }

    /**
     * Login user by facebook.
     * @return boolean|yii\web\Response
     */
    private function loginFacebook()
    {
        $session = Yii::$app->session;
        $fb_helper = $this->fb->getRedirectLoginHelper();
        $session->set('FBRLH_state', $_REQUEST['state']);
        $accessToken = $fb_helper->getAccessToken();
        $response = $this->fb->get('/me?fields=id,name,email,picture,first_name,last_name', $accessToken);
        $user_fb = $response->getGraphUser();
        $user_fb_id = User::findByFbId($user_fb['id']);
        if (!empty($user_fb_id)) {
            Yii::$app->user->login($user_fb_id, cparams('loginExpire'));
            if (isset($_GET['go'])) {
                return $this->redirect(urldecode($_GET['go']));
            } else {
                return $this->redirect(Yii::$app->request->referrer);
            }
        } else {
            // register new 
            $model = new SignupForm();
            $model->fbid = $user_fb['id'];
            $model->avatar = $user_fb['picture']['url'];
            $model->fullname = $user_fb['last_name'] . ' ' . $user_fb['first_name'];
            $model->firstname = $user_fb['first_name'];
            $model->lastname = $user_fb['last_name'];
            $model->fbtoken = $accessToken->getValue();
            $model->email = isset($user_fb['email']) ? $user_fb['email'] : '';
            if ($user = $model->signup()) {
                Yii::$app->user->login($user, cparams('loginExpire'));
                $this->goHome();
            } else {
                throw new \Exception("Không thể đăng nhập bằng facebook vui long thử lại", 1);
            }
        }
    }

    /**
     * Login user by google.
     * @return boolean|yii\web\Response
     */
    private function loginGoogle() {
        $this->gg->authenticate(crequest()->get('code'));
        $google_oauthV2 = new \Google_Service_Oauth2($this->gg);
        $userData = $google_oauthV2->userinfo->get();
        if (!empty($userData)) {
            $model = new SignupForm();
            $model->email = $userData->email;
            $model->fullname = $userData->familyName . ' ' . $userData->givenName;
            $model->firstname = $userData->givenName;
            $model->lastname = $userData->familyName;
            $model->avatar = $userData->picture;
            $model->google_id = $userData->id;
            $model->google_token = $this->gg->getAccessToken();
            if ($user = $model->signup()) {
                Yii::$app->user->login($user, cparams('loginExpire'));
                return $this->goHome();
            } else {
                throw new \Exception("Lỗi máy chủ, Không thể đăng nhập bằng google.", 1);
            }
        }
    }

    private function verifyReCaptcha($recaptcha)
    {
        $google_url = Yii::$app->params["google_captcha_url"];
        $secret = Yii::$app->params["google_captcha_secret"];
        $ip = $_SERVER['REMOTE_ADDR'];
        $url = $google_url . "?secret=" . $secret . "&response=" . $recaptcha . "&remoteip=" . $ip;
        $res = CRestFull::get($url)->getResponse();
        $res = json_decode($res, true);
        return $res['success'];
    }

    /**
     * Đình Tin add TODO
     * Fix late
     */
    private function setMetaSignup()
    {
        $metaTitle = "";
        $metaDescription = "";
        $metaImgage = "";
        $metaImages = \Yii::$app->homeUrl . '/v1/images/index_social_bg';
        $metaDescription = "Quickrep.vn - Một nền tảng Hỏi & Đáp được tạo ra kết nối mọi người chia sẻ và 
        tìm kiếm thông tin về bất kỳ chủ đề nào,
        Đem những kiến thức được cá nhân hóa có chất lượng cao đến cho cộng đồng.";
        $metaTitle = "Quickrep.vn - Hỏi đáp trực tuyến, nơi chia sẻ kiến ​​thức và hiểu rõ hơn về thế giới.";
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $metaDescription,
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'og:description',
            'content' => $metaDescription,
        ]);

        $this->view->title = $metaTitle;
        \Yii::$app->view->registerMetaTag([
            'property' => 'og:title',
            'content' => $metaTitle . ' - Quickrep',
        ]);

        \Yii::$app->view->registerMetaTag([
            'property' => 'og:image',
            'content' => $metaImages,
        ]);

        \Yii::$app->view->registerMetaTag([
            'property' => 'og:url',
            'content' => \Yii::$app->homeUrl . Url::to(["site/index"]),
        ]);
        $this->view->registerLinkTag([
            'rel' => 'canonical',
            'href' => \Yii::$app->homeUrl . Url::to(["site/index"]),
            'type' => 'text/html',
        ]);
        $this->view->registerMetaTag([
            'name' => 'robots',
            'content' => 'noarchive',
        ]);
    }

	/**
	 * Active account register.
	 *
	 * @param string $email
	 * @param string $token
	 * @return mixed
	 */
	public function actionActiveaccount($email, $token)
    {
		$email = trim($email);
		$email = base64_decode($email);
		$token = trim($token);
		$token = base64_decode($token);

		$member = \frontend\models\Member::find()->where(
			'email = :email and auth_token = :auth_token and status = 0',
			[':email' => $email, 'auth_token' => $token]
		)->one();
		if ($member) {
			$member->status = \frontend\models\Member::STATUS_ACTIVE;
			$member->authentication = 1;
			$save = $member->save(true, ['status', 'authentication']);
			if ($save) {
				Yii::$app->session->setFlash('success', 'Kích hoạt tài khoản thành công!');
				return $this->redirect(['login']);
			} else {
				Yii::$app->session->setFlash(
					'error',
					'Kích hoạt tài khoản thất bại,'
					. ' vui lòng refresh lại trang để thử lại!'
				);
			}
		} else {
			$msg = 'Thông tin kích hoạt tài khoản không đúng, '
				. 'vui lòng kiểm tra lại email kích hoạt trong hòm thư của bạn!';
			Yii::$app->session->setFlash('error', $msg);
		}

		return $this->render('active_account', [

		]);
	}

    /**
     * Login user.
     * @return boolean|yii\web\Response
     */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $this->layout = 'login_layout';
        $model = new LoginForm();
        try {
            // our system login
            if ($model->load(Yii::$app->request->post())) {
                if ($user = $model->login()) {
                    return $this->goHome();
                }
            }
            // social login
            if (!empty(Yii::$app->request->get('code')) && !empty(Yii::$app->request->get('state'))) {
                return $this->loginFacebook();
            } 
            if (isset($_GET['code']) && isset($_GET['type']) && $_GET['type'] == 'gg') {
                return $this->loginGoogle();
            }
        } catch (\Exception $e) {
            Yii::$app->session->setFlash(
                'error',
                $e->getMessage()
            );
        }
        return $this->render('login', [
            'model' => $model,
            'fb_login_url' => $this->getFacebookUrl(),
            'gg_login_url' => $this->gg->createAuthUrl()
        ]);
    }

    /**
     * TODO
    */
    private function setSeoMetaLogin()
    {
        $metaTitle = "";
        $metaDescription = "";
        $metaImgage = "";

        $metaDescription = "Quickrep.vn - Một nền tảng Hỏi & Đáp được tạo ra kết nối mọi người chia sẻ và tìm kiếm thông tin về bất kỳ chủ đề nào,
            Đem những kiến thức được cá nhân hóa có chất lượng cao đến cho cộng đồng.";
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $metaDescription,
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'og:description',
            'content' => $metaDescription,
        ]);

        $metaTitle = "Quickrep.vn - Hỏi đáp trực tuyến, nơi chia sẻ kiến ​​thức và hiểu rõ hơn về thế giới.";
        $this->view->title = $metaTitle;
        \Yii::$app->view->registerMetaTag([
            'property' => 'og:title',
            'content' => $metaTitle . ' - Quickrep',
        ]);

        $metaImages = \Yii::$app->homeUrl . '/v1/images/index_social_bg.jpg';
        \Yii::$app->view->registerMetaTag([
            'property' => 'og:image',
            'content' => $metaImages,
        ]);

        \Yii::$app->view->registerMetaTag([
            'property' => 'og:url',
            'content' => \Yii::$app->homeUrl . Url::to(["site/login"]),
        ]);
        $this->view->registerLinkTag([
            'rel' => 'canonical',
            'href' => \Yii::$app->homeUrl . Url::to(["site/login"]),
            'type' => 'text/html',
        ]);
        $this->view->registerMetaTag([
            'name' => 'robots',
            'content' => 'noarchive',
        ]);
    }

	/**
	 * Logs out the current user.
	 *
	 * @return mixed
	 */
	public function actionLogout()
    {
		$a = Yii::$app->user->logout();
		return $this->redirect(['/dang-nhap']);
	}

	/**
	 * Displays contact page.
	 *
	 * @return mixed
	 */
	public function actionContact()
    {
		$model = new ContactForm();
		if (!empty(Yii::$app->user->identity->email)) {
			$model->email = Yii::$app->user->identity->email;
		}
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
				Yii::$app->session->setFlash(
					'contact-success',
					'Cảm ơn bạn đã liên hệ với chúng tôi.' .
					' Chúng tôi sẽ trả lời bạn trong thời gian sớm nhất.'
				);
			} else {
				Yii::$app->session->setFlash('contact-error', 'Đã xảy ra lỗi khi gửi email.');
			}

			return $this->refresh();
		} else {
			return $this->render('contact', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Displays about page.
	 *
	 * @return mixed
	 */
	public function actionAbout()
    {
		$about = Post::findOne(2);
		return $this->render('about', ['about' => $about]);
	}

	/**
	 * Displays policy page.
	 *
	 * @return mixed
	 */
	public function actionPolicy()
    {
		$policy = Post::findOne(3);
		return $this->render('policy', ['policy' => $policy]);
	}

	/**
	 * Displays ads page.
	 *
	 * @return mixed
	 */
	public function actionAds()
    {
		$ads = Post::findOne(4);
		return $this->render('ads', ['ads' => $ads]);
	}

	/**
	 * Displays get money page.
	 *
	 * @return mixed
	 */
	public function actionGetmoney()
    {
		$getmoney = Post::findOne(17);
		return $this->render('getmoney', ['getmoney' => $getmoney]);
	}

	/**
	 * Requests password reset.
	 *
	 * @return mixed
	 */
	public function actionRequestPasswordReset()
    {
		$model = new PasswordResetRequestForm();
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			if ($model->sendEmail()) {
				Yii::$app->session->setFlash(
					'rq-resetpass-success',
					'Kiểm tra Email của bạn để được hướng dẫn bước tiếp theo.'
				);
			} else {
				Yii::$app->session->setFlash(
					'rq-resetpass-error',
					'Xin lỗi, chúng tôi không thể thiết lập lại mật khẩu'
					. ' cho email được cung cấp.'
				);
			}
			return $this->refresh();
		}

		return $this->render('requestPasswordResetToken', [
			'model' => $model,
		]);
	}

	/**
	 * Resets password.
	 *
	 * @param string $token
	 * @return mixed
	 * @throws BadRequestHttpException
	 */
	public function actionResetPassword($token)
    {
		try {
			$model = new ResetPasswordForm($token);
		} catch (InvalidParamException $e) {
			throw new BadRequestHttpException($e->getMessage());
		}

		if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
			Yii::$app->session->setFlash(
				'resetpass-success',
				'Đặt lại mật khẩu mới thành công.' .
				' Vui lòng Đăng nhập với mật khẩu mới.'
			);
			return $this->redirect(['site/login']);
		}

		return $this->render('resetPassword', [
			'model' => $model,
		]);
	}

	public function actionError() {
		$exception = Yii::$app->errorHandler->exception;
		if ($exception !== null) {
			return $this->render('error', ['exception' => $exception]);
		}
		return $this->render('error', ['exception' => $exception]);
	}
}

<?php

namespace frontend\controllers;

session_start();

use Yii;
use common\models\LoginForm;
use frontend\models\SignupForm;
use frontend\models\SignupSocialForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use common\models\ContactForm;
use common\models\SearchForm;
use frontend\components\FrontendController;

use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use Facebook\Facebook;
use common\components\CRestFull;
use common\models\User;
use common\models\Questions;
use yii\db\Expression;
use common\models\Answers;
use common\models\Comments;
use common\models\Upvotes;

/**
 * Site controller
 */
class SiteController extends FrontendController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup', 'index', 'login'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'oAuthSuccess'],
            ],
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
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
		
        /*debug($query->createCommand()->getRawSql());*/
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
		$dataProvider = array();
		/** SEO META **/
		$metaTitle			= "";
		$metaDescription 	= "";
		$metaImgage			= "";
		
		$metaDescription 	= "Quickrep.vn - Một nền tảng Hỏi & Đáp được tạo ra kết nối mọi người chia sẻ và tìm kiếm thông tin về bất kỳ chủ đề nào,
 Đem những kiến thức được cá nhân hóa có chất lượng cao đến cho cộng đồng.";
 
		\Yii::$app->view->registerMetaTag([
			'name' 		=> 'description',
			'content' 	=> $metaDescription
		]);	
		\Yii::$app->view->registerMetaTag([
			'name' 		=> 'og:description',
			'content'	=> $metaDescription
		]);	
		
		$metaTitle 			= "Quickrep.vn - Hỏi đáp trực tuyến, nơi chia sẻ kiến ​​thức và hiểu rõ hơn về thế giới.";
		$this->view->title 	= $metaTitle;
		\Yii::$app->view->registerMetaTag([
			'property'	=> 'og:title',
			'content'	=> $metaTitle.' - Quickrep',	
		]);
		
		$metaImages = \Yii::$app->homeUrl.'/v1/images/index_social_bg';
		\Yii::$app->view->registerMetaTag([
			'property'	=> 'og:image',
			'content'	=> $metaImages,	
		]);
		
		\Yii::$app->view->registerMetaTag([
			'property'	=> 'og:url',
			'content'	=> \Yii::$app->homeUrl.Url::to(["site/index"]),
		]);
		$this->view->registerLinkTag([
                'rel'  	=> 'canonical',
                'href' 	=> \Yii::$app->homeUrl.Url::to(["site/index"]),
				'type'	=> 'text/html'
        ]);	
		$this->view->registerMetaTag([
				'name'  	=> 'robots',
                'content'   => 'noarchive',
        ]);
		/** END SEO META **/
		
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }
    
    /**
     * Search page.
     *
     * @return mixed
     */
    public function actionSearch()
    {
        //$url = Yii::$app->urlManager->createUrl(['site/index']);
       // $this->redirect($url);
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
		
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
    
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                Yii::$app->session->setFlash(
                    'success',
                    'Chúc mừng bạn đã đăng ký tài khoản thành công, '
                    . 'một email kích hoạt tài khoản đã được gửi vào hòm thư của bạn, '
                    . 'vui lòng kiểm tra để kích hoạt tài khoản trước khi đăng nhập.'
                );
                return $this->refresh();
            }
        }
		
		
		/** SEO META **/
		$metaTitle			= "";
		$metaDescription 	= "";
		$metaImgage			= "";
		
		$metaDescription 	= "Quickrep.vn - Một nền tảng Hỏi & Đáp được tạo ra kết nối mọi người chia sẻ và tìm kiếm thông tin về bất kỳ chủ đề nào,
 Đem những kiến thức được cá nhân hóa có chất lượng cao đến cho cộng đồng.";
		\Yii::$app->view->registerMetaTag([
			'name' 		=> 'description',
			'content' 	=> $metaDescription
		]);	
		\Yii::$app->view->registerMetaTag([
			'name' 		=> 'og:description',
			'content'	=> $metaDescription
		]);	
		
		$metaTitle 			= "Quickrep.vn - Hỏi đáp trực tuyến, nơi chia sẻ kiến ​​thức và hiểu rõ hơn về thế giới.";
		$this->view->title 	= $metaTitle;
		\Yii::$app->view->registerMetaTag([
			'property'	=> 'og:title',
			'content'	=> $metaTitle.' - Quickrep',	
		]);
		
		$metaImages = \Yii::$app->homeUrl.'/v1/images/index_social_bg';
		\Yii::$app->view->registerMetaTag([
			'property'	=> 'og:image',
			'content'	=> $metaImages,	
		]);
		
		\Yii::$app->view->registerMetaTag([
			'property'	=> 'og:url',
			'content'	=> \Yii::$app->homeUrl.Url::to(["site/index"]),
		]);
		$this->view->registerLinkTag([
                'rel'  	=> 'canonical',
                'href' 	=> \Yii::$app->homeUrl.Url::to(["site/index"]),
				'type'	=> 'text/html'
        ]);	
		$this->view->registerMetaTag([
				'name'  	=> 'robots',
                'content'   => 'noarchive',
        ]);
		/** END SEO META **/
    
        return $this->render('signup', [
            'model' => $model,
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
                    .' vui lòng refresh lại trang để thử lại!'
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
    * This function will be triggered when user is successfuly authenticated using some oAuth client.
    *
    * @param yii\authclient\ClientInterface $client
    * @return boolean|yii\web\Response
    */
    public function oAuthSuccess($client)
    {
        // get user data from client
        $userAttributes = $client->getUserAttributes();
        $email = '';
        $fullname = '';
        $social = $client->getName();
        if ($social == 'facebook') {
            $email = isset($userAttributes['email']) ? $userAttributes['email'] : '';
            $fullname = isset($userAttributes['name']) ? $userAttributes['name'] : '';
        } elseif ($social == 'google') {
            $email = isset($userAttributes['emails'][0]['value']) ? $userAttributes['emails'][0]['value'] : '';
            $fullname = isset($userAttributes['displayName']) ? $userAttributes['displayName'] : '';
        } elseif ($social == 'linkedin') {
            $email = isset($userAttributes['email']) ? $userAttributes['email'] : '';
            $lastname = isset($userAttributes['last-name'])
                ? $userAttributes['last-name']
                : $userAttributes['last_name'];
            $firstname = isset($userAttributes['first-name'])
                ? $userAttributes['first-name']
                : $userAttributes['first_name'];
            $fullname = $firstname . ' ' . $lastname;
        }
        if (!empty($email)) {
            if (empty($fullname)) {
                $tmp = explode('@', $email);
                $fullname = isset($tmp[0]) ? $tmp[0] : '';
            }
            // check email exits
            $user = \common\models\User::findByEmail($email, 0);

            if ($user) {
                // login
                Yii::$app->user->login($user, true ? cparams('loginExpire') : 0);
            } else {
                // singup
                Yii::$app->response->redirect(
                    Url::to([
                        'signupoauth',
                        'email' => base64_encode($email),
                        'fullname' => base64_encode($fullname)
                    ])
                );
            }
        }
    }

    /**
     * Signs user up by social.
     *
     * @param string $email
     * @return mixed
     */
    /*public function actionSignupoauth($email, $fullname)
    {
        $this->layout = false;
        
        $model = new SignupSocialForm();
        $model->email = base64_decode($email);
    
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup($fullname)) {
                if (Yii::$app->getUser()->login($user)) {
                    echo 'T';
                }
            }
        }
    
        return $this->render('signupOauth', [
            'model' => $model,
        ]);
    }*/
    
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
		
		/** SEO META **/
		$metaTitle			= "";
		$metaDescription 	= "";
		$metaImgage			= "";
		
		$metaDescription 	= "Quickrep.vn - Một nền tảng Hỏi & Đáp được tạo ra kết nối mọi người chia sẻ và tìm kiếm thông tin về bất kỳ chủ đề nào,
 Đem những kiến thức được cá nhân hóa có chất lượng cao đến cho cộng đồng.";
		\Yii::$app->view->registerMetaTag([
			'name' 		=> 'description',
			'content' 	=> $metaDescription
		]);	
		\Yii::$app->view->registerMetaTag([
			'name' 		=> 'og:description',
			'content'	=> $metaDescription
		]);	
		
		$metaTitle 			= "Quickrep.vn - Hỏi đáp trực tuyến, nơi chia sẻ kiến ​​thức và hiểu rõ hơn về thế giới.";
		$this->view->title 	= $metaTitle;
		\Yii::$app->view->registerMetaTag([
			'property'	=> 'og:title',
			'content'	=> $metaTitle.' - Quickrep',	
		]);
		
		$metaImages = \Yii::$app->homeUrl.'/v1/images/index_social_bg.jpg';
		\Yii::$app->view->registerMetaTag([
			'property'	=> 'og:image',
			'content'	=> $metaImages,	
		]);
		
		\Yii::$app->view->registerMetaTag([
			'property'	=> 'og:url',
			'content'	=> \Yii::$app->homeUrl.Url::to(["site/login"]),
		]);
		$this->view->registerLinkTag([
                'rel'  	=> 'canonical',
                'href' 	=> \Yii::$app->homeUrl.Url::to(["site/login"]),
				'type'	=> 'text/html'
        ]);	
		$this->view->registerMetaTag([
				'name'  	=> 'robots',
                'content'   => 'noarchive',
        ]);
		/** END SEO META **/
		
        try {
            $session = Yii::$app->session;
            $session->open();
            $this->layout = 'login_layout';
            $siteKey = Yii::$app->params['google_sitekey'];
            $secret = Yii::$app->params['google_secret'];
            $lang = Yii::$app->language;
            $gg_login_url = null;
            $fb_login_url = null;
            if (!\Yii::$app->user->isGuest) {
                return $this->goHome();
            }
            $model = new LoginForm();
            $signup_model = new SignupForm();

            // google login
            $redirect_uri = Yii::$app->params['google_redirect_url'];
            $gClient = new \Google_Client();
            $gClient->setApplicationName('Login to quickrep.dev');
            $gClient->setClientId(Yii::$app->params['google_clientid']);
            $gClient->setClientSecret(Yii::$app->params['google_client_secret']);
            $gClient->setRedirectUri($redirect_uri);
            $gClient->addScope("email");
            $gClient->addScope("profile");
            $gg_login_url = $gClient->createAuthUrl();
            $google_oauthV2 = new \Google_Service_Oauth2($gClient);
            if (isset($_GET['code']) && isset($_GET['type']) && $_GET['type'] == 'gg') {
                $gClient->authenticate($_GET['code']);
                $session->set('gg_access_token', $gClient->getAccessToken());
                // header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
            }
            if ($session->has('gg_access_token')) {
                $gClient->setAccessToken($session->get('gg_access_token'));
            }
            if ($gClient->getAccessToken()) {
                $session->get('gg_access_token', $gClient->getAccessToken());
                $userData = $google_oauthV2->userinfo->get();
                if (!empty($userData)) {
                    $model = new SignupForm();
                    $model->email        = $userData->email;
                    $model->firstname    = $userData->givenName;
                    $model->lastname     = $userData->familyName;
                    $model->avatar       = $userData->picture;
                    $model->google_id    = $userData->id;
                    $access_token = $gClient->getAccessToken();
                    $model->google_token = $access_token;
                    if ($user = $model->signup()) {
                        Yii::$app->user->login($user, cparams('loginExpire'));
                        return $this->redirect(['site/index']);
                    }
                }
            }

            //facebook login
            $fb = new Facebook([
                'app_id' => Yii::$app->params['facebook_appid'],
                'app_secret' => Yii::$app->params['facebook_secret'],
                'default_graph_version' => 'v2.2',
            ]);
            $permissions = ['email, public_profile'];
            $fb_helper = $fb->getRedirectLoginHelper();
            $fb_login_url = $fb_helper->getLoginUrl(Yii::$app->params['facebook_redirect_url'], $permissions);
            if (Yii::$app->request->get('type') == 'fb'
                && !empty(Yii::$app->request->get('code'))
                && !empty(Yii::$app->request->get('state'))) {
                // try {
                $session->set('FBRLH_state', $_REQUEST['state']);
                $accessToken = $fb_helper->getAccessToken();
                // } catch (Facebook\Exceptions\FacebookResponseException $e) {
                //     // When Graph returns an error
                //     echo 'Graph returned an error: ' . $e->getMessage();
                //     exit;
                // } catch (Facebook\Exceptions\FacebookSDKException $e) {
                //     // When validation fails or other local issues
                //     echo 'Facebook SDK returned an error: ' . $e->getMessage();
                //     exit;
                // }
                $oAuth2Client = $fb->getOAuth2Client();
                $tokenMetadata = $oAuth2Client->debugToken($accessToken);
                $tokenMetadata->validateAppId(Yii::$app->params['facebook_appid']);
                $tokenMetadata->validateExpiration();
                
                $session->set('fb_access_token', $accessToken->getValue());
                $response = $fb->get('/me?fields=id,name,email,picture,first_name,last_name', $accessToken);
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
                    if (isset($user_fb['email'])) {
                        $model = new SignupForm();
                        $model->email        = $user_fb['email'];
                        $model->firstname    = $user_fb['first_name'];
                        $model->lastname     = $user_fb['last_name'];
                        $model->avatar       = $user_fb['picture']['url'];
                        $model->fbid         = $user_fb['id'];
                        $model->fbtoken      = $session->get('fb_access_token');
                        if ($user = $model->signup()) {
                            Yii::$app->user->login($user, cparams('loginExpire'));
                            return $this->redirect(['site/index']);
                        }
                    } else {
                        $session->set('user_fb', $user_fb);
                        $signup_model->firstname = $user_fb['first_name'];
                        $signup_model->lastname = $user_fb['last_name'];
                        return $this->render('login', [
                            'model' => $model,
                            'gg_login_url' => $gg_login_url,
                            'fb_login_url' => $fb_login_url,
                            'siteKey' => $siteKey,
                            'secret' => $secret,
                            'lang' => $lang,
                            'signup_model' => $signup_model,
                            'error' => 'signup'
                        ]);
                    }
                }
            }

            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                if (isset($_GET['go'])) {
                    return $this->redirect(urldecode($_GET['go']));
                } else {
                    return $this->redirect(Yii::$app->request->referrer);
                }
            } elseif ($signup_model->load(Yii::$app->request->post())) {
                $recaptcha=$_POST['g-recaptcha-response'];
                if (!empty($recaptcha)) {
                    $google_url = Yii::$app->params["google_captcha_url"];
                    $secret = Yii::$app->params["google_captcha_secret"];
                    $ip = $_SERVER['REMOTE_ADDR'];
                    $url = $google_url."?secret=".$secret."&response=".$recaptcha."&remoteip=".$ip;
                    $res = CRestFull::get($url)->getResponse();
                    $res = json_decode($res, true);
                    // reCaptcha success check
                    if ($res['success']) {
                        if (!empty($session['user_fb'])) {
                            $signup_model->fbtoken = $session['fb_access_token'];
                            $signup_model->fbid = $session['user_fb']['id'];
                            $signup_model->avatar = $session['user_fb']['picture']['url'];
                            $session->remove('user_fb');
                            $session->remove('fb_access_token');
                        }
                        if ($user = $signup_model->signup()) {
                            Yii::$app->user->login($user, cparams('loginExpire'));
                            return $this->redirect(['site/index']);
                        } else {
                            return $this->render('login', [
                                'model' => $model,
                                'gg_login_url' => $gg_login_url,
                                'fb_login_url' => $fb_login_url,
                                'siteKey' => $siteKey,
                                'secret' => $secret,
                                'lang' => $lang,
                                'signup_model' => $signup_model,
                                'error' => 'signup'
                            ]);
                        }
                    }
                }
                Yii::$app->session->setFlash('error', "Please re-enter your reCAPTCHA.");
                return $this->render('login', [
                    'model' => $model,
                    'gg_login_url' => $gg_login_url,
                    'fb_login_url' => $fb_login_url,
                    'siteKey' => $siteKey,
                    'secret' => $secret,
                    'lang' => $lang,
                    'signup_model' => $signup_model,
                    'error' => 'signup'
                ]);
            } else {
                return $this->render('login', [
                    'model' => $model,
                    'gg_login_url' => $gg_login_url,
                    'fb_login_url' => $fb_login_url,
                    'siteKey' => $siteKey,
                    'secret' => $secret,
                    'lang' => $lang,
                    'signup_model' => $signup_model,
                ]);
            }
        } catch (Exception $e) {
            return $this->render('login', [
                'model' => $model,
                'gg_login_url' => $gg_login_url,
                'fb_login_url' => $fb_login_url,
                'siteKey' => $siteKey,
                'secret' => $secret,
                'lang' => $lang,
                'signup_model' => $signup_model,
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['site/login']);
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
                    'Cảm ơn bạn đã liên hệ với chúng tôi.'.
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
                    .' cho email được cung cấp.'
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
                'Đặt lại mật khẩu mới thành công.'.
                ' Vui lòng Đăng nhập với mật khẩu mới.'
            );
            return $this->redirect(['site/login']);
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionError()
    {
        $exception = Yii::$app->errorHandler->exception;
		if ($exception !== null) {
			return $this->render('error', ['exception' => $exception]);
		}
		return $this->render('error', ['exception' => $exception]);
    }

    public function actionGenData()
    {
        $faker = \Faker\Factory::create('en_EN');
        $query = User::find()
            ->orderBy(new Expression('rand()'))
            ->one();
        for ($i = 0; $i < 100; $i++) {
            $model = new Questions;
            $model->link('user', cuser());
            $model->title = $faker->text(255);
            $model->body = $faker->text;
            $model->save();
            for ($i = 0; $i < 10; $i++) {
                $question = Questions::find()
                    ->orderBy(new Expression('rand()'))
                    ->one();
                $answer = new Answers;
                $answer->link('user', cuser());
                $answer->link('question', $question);
                $answer->answers_text = $faker->text;
                $answer->status = 1;
                $answer->save();
                
                $comment = new Comments;
                $comment->link('user', cuser());
                $comment->link('question', $question);
                $comment->comment_type = Comments::TYPE_QUESTIONS;
                $comment->comment = $faker->text;
                $comment->save();
            }
        }
    }
}

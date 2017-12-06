<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;
use common\models\CredentialEmployment;
use common\models\CredentialEducation;
use common\models\CredentialLocation;
use common\models\User;
class WidgetProfilesCredential extends Widget
{
    public $view = "widget-profiles-credential";
	public $uid;	
    public function run()
    {
		$userInfo = User::findOne($this->uid);
		if(!empty($userInfo)){
			$fullName = $userInfo->first_name.' '.$userInfo->last_name;
		}
		$profilesCredential = CredentialEmployment::find()->where(['user_id'=>$this->uid])->one();
        $profilesEducation	= CredentialEducation::find()->where(['user_id'=>$this->uid])->one();
		$profilesLocation	= CredentialLocation::find()->where(['user_id'=>$this->uid])->one();
		return $this->render($this->view,[
			"profilesCredential"	=> $profilesCredential,
			"profilesEducation"		=> $profilesEducation,
			"profilesLocation"		=> $profilesLocation,
			"uid"					=> $this->uid,
			"userInfo"				=> $userInfo,
			"fullName"				=> $fullName
		]);
    }
}

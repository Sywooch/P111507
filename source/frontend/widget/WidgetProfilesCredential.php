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
		
		$profilesEmployment = CredentialEmployment::find()->where(['user_id'=>$this->uid])->one();
        $profilesEducation	= CredentialEducation::find()->where(['user_id'=>$this->uid])->one();
		$profilesLocation	= CredentialLocation::find()->where(['user_id'=>$this->uid])->one();
		$primaryFlag  		= $this->isPrimaryAccount();
		
		/** .Data Location Choosed **/
		$dataChoosedLocation	= [];
		if(!empty($profilesLocation)){
			$dataChoosedLocation = [
				"id"	=> $profilesLocation->topics->id,
				"name"	=> $profilesLocation->topics->title
			];
		}
		
		
		/** .Data Education Choosed **/
		$dataChoosedEducationSchool 				= [];
		$dataChoosedEducationConcentration 			= [];
		$dataChoosedEducationSecondaryConcentration = [];
		if(!empty($profilesEducation) && !empty($profilesEducation->topicsschool))
		{
			$dataChoosedEducationSchool = [
				"id"	=> $profilesEducation->topicsschool->id,
				"name"	=> $profilesEducation->topicsschool->title
			];
		}
		
		if(!empty($profilesEducation) && !empty($profilesEducation->topicsconcentration))
		{
			$dataChoosedEducationConcentration = [
				"id"	=> $profilesEducation->topicsconcentration->id,
				"name"	=> $profilesEducation->topicsconcentration->title
			];
		}
		
		if(!empty($profilesEducation) && !empty($profilesEducation->topicsconcentration))
		{
			$dataChoosedEducationSecondaryConcentration = [
				"id"	=> $profilesEducation->topicsecondaryconcentration->id,
				"name"	=> $profilesEducation->topicsecondaryconcentration->title
			];
		}
		
		/** .Data Employments Choosed **/
		$dataChoosedEmploymentCompany 	= [];
		if(!empty($profilesEmployment) && !empty($profilesEmployment->topics))
		{
			$dataChoosedEmploymentCompany = [
				"id"	=> $profilesEmployment->topics->id,
				"name"	=> $profilesEmployment->topics->title
			];
		}
		
		return $this->render($this->view,[
			"profilesEmployment"	=> $profilesEmployment,
			"profilesEducation"		=> $profilesEducation,
			"profilesLocation"		=> $profilesLocation,
			"uid"					=> $this->uid,
			"userInfo"				=> $userInfo,
			"fullName"				=> $fullName,
			"primaryFlag"			=> $primaryFlag,
			"dataChoosedLocation"	=> $dataChoosedLocation,
			"dataChoosedEducationSchool"					=> $dataChoosedEducationSchool,
			"dataChoosedEducationConcentration"				=> $dataChoosedEducationConcentration,
			"dataChoosedEducationSecondaryConcentration"	=> $dataChoosedEducationSecondaryConcentration,
			"dataChoosedEmploymentCompany"	=> $dataChoosedEmploymentCompany
		]);
    }
	
	function isPrimaryAccount()
	{
		if(Yii::$app->user->isGuest)
		{
			return false;
		}
		else
		{
			if($this->uid == \Yii::$app->user->identity->id)
			{
				return true;
			}
			return false;
		}
		
	}
}

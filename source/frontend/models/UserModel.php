<?php 
namespace frontend\models;
use common\models\BaseModel;
use common\models\User;
use yii\data\ActiveDataProvider;
use yii\data\Sort;
use yii\db\Expression;
use yii\helpers\StringHelper;
use Yii;

class UserModel extends BaseModel
{
	public $id; // User creator
	public $desc;
	public $quotes;
	/**
     * @inheritdoc
     */
    public $rules = [
        ['id', 'filter', 'filter' => 'trim'],
        ['id', 'filter', 'filter' => 'strip_tags'],
        [['id'], 'required'],
    ];
	
	public function rules()
    {
        return $this->rules;
    }

	public function attributeLabels()
    {
        return [
            'id' => 'id',
        ];
    }
	
	public function setRulesUpdateProfileDescription()
    {
        $this->rules = [
            // TODO UDPATE ID ANSWER EXITS IN TALBE ANSWER
            [['id'], 'filter', 'filter' => 'trim'],
            [['id', 'desc'], 'filter', 'filter' => 'strip_tags'],
            [['id', 'desc'], 'required'],
        ];
    }
	
	public function setRulesUpdateProfileQuotes()
    {
        $this->rules = [
            // TODO UDPATE ID ANSWER EXITS IN TALBE ANSWER
            [['id'], 'filter', 'filter' => 'trim'],
            [['id', 'quotes'], 'filter', 'filter' => 'strip_tags'],
            [['id', 'quotes'], 'required'],
        ];
    }
	
	public function getUserById()
	{
		$model = User::findOne($this->id);
		if(empty($model))
		{
			throw new \Exception(" Không tìm thấy tài khoản này!",1);
		}
		return $model;
	}
	
	public function setProfileDescription()
	{
		$user = $this->getUserById();
		$user->profile_description = $this->desc;
		if($user->save())
		{
			return $user;
		}
		throw new \Exception("Có lỗi xảy ra vui lòng quay lại sau!", 1);
	}
	
	public function setProfileQuotes()
	{
		$user 	= $this->getUserById();
		$user->quotes = $this->quotes;
		if($user->save())
		{
			return $user;
		}
		throw new \Exception("Có lỗi xảy ra vui lòng quay lại sau!", 1);
	}
	
	
}
?>
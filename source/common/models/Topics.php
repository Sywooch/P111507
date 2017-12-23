<?php

namespace common\models;

use Yii;
use yii\db\Expression;
use yii\helpers\ArrayHelper;
use yii\helpers\HtmlPurifier;
use yii\db\Query;
use yii\data\ActiveDataProvider;
use yii\behaviors\SluggableBehavior;
/**
 * This is the model class for table "topics".
 *
 * @property integer $id
 * @property string $title
 * @property string $quote
 * @property string $body
 * @property string $images
 * @property string $google_title
 * @property string $google_description
 * @property string $create_time
 * @property string $update_time
 */
class Topics extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    const STATUS_ACTIVE = 1;
    public static function tableName()
    {
        return 'topics';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quote', 'body', 'google_description','slug'], 'string'],
            [['create_time', 'update_time'], 'safe'],
            [['title', 'images', 'google_title'], 'string', 'max' => 255],
        ];
    }
	
	
	public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'title',
                'slugAttribute' => 'slug',
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'quote' => 'Quote',
            'body' => 'Body',
            'images' => 'Images',
            'google_title' => 'Google Title',
            'google_description' => 'Google Description',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
			'slug'			=> 'slug'
        ];
    }
	public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->slug = vietnamese_permalink($this->title);
            /*$this->create_time = \yii\db\Expression('NOW');*/
            /*if ($this->getIsNewRecord() ) {
                
            }*/
            return true;
        } else {
            return false;
        }
    }
    public static function getTopicsByKey($key)
    {
        return self::find()
        ->select('topics.*, COUNT(user_topic_follow.topic_id) as user_follow ')
        ->leftJoin('user_topic_follow', 'topics.id = user_topic_follow.topic_id')
        ->where(['like', 'title', $key], false)
        ->groupBy('user_topic_follow.topic_id')
        ->asArray()
        ->all();
        /*$r = $query->createCommand()->getRawSql();*/
    }
	
	/** KEN : TIM TOPIC BY SLUG **/
	public function findTopicBySlug($slug){
		return Topics::find()
            ->where(['slug' => $slug])
            ->one();
	}

    public static function createTopicKnow($topic)
    {
        $model = Topics::find()->where(['title' => $topic])->asArray()->one();
        if (empty($model)) {
            $new_topic = new Topics();
            $new_topic->title = $topic;
            $new_topic->create_time = new Expression('NOW()');
            if ($new_topic->save()) {
                /*return  ArrayHelper::toArray($new_topic);*/
                $model = Topics::find()->where(['id' => $new_topic->id])->asArray()->one();
            }
        }
        return $model;
    }
	
	public function getImages()
    {
        if (!empty($this->images)) {
            return  Yii::$app->homeUrl.'/uploads/topics/'.$this->images;
        } else {
            return Yii::$app->homeUrl.'/v2/images/default-topics.png';
        }
    }

    public static function getFullPathAvatar($avatar) 
    {
        if (!empty($avatar)) {
            return Yii::$app->homeUrl . '/uploads/topics/' . $avatar;
        } else {
            return Yii::$app->homeUrl . '/v1/images/default-topics.png';
        }
    }
	
	public function suggetTopics($textSearch)
	{
		if(isset($textSearch))
		{
			$textSearch = trim($textSearch);
		}
		else
		{
			return json_encode([
				'error' => true,
				'data'	=> 'topic không được rỗng'
			]);
		}
		echo "0".$textSearch."<br/>";
		$textSearch = HtmlPurifier::process($textSearch); //Loai bo ky tu dac biet, ma doc trong cau hoi
		echo "1".$textSearch."<br/>";
		
		$kt	= explode(" ",$textSearch);//Breaking the string to array of words
		$strAndWhereSearch = "";
		while(list($key,$val)=each($kt))
		{
			if($val<>" " and strlen($val) > 0)
			{
				if($key==0){
					$strAndWhereSearch .= " `title` LIKE '$val%' "; 
				}
				else
				{
					$strAndWhereSearch .= " OR `title` LIKE '$val%' "; 
				}
			}
		}
		$sqlTopic	= (new \yii\db\Query())
				->select([
					"id",
					"title",
					"images",
					new Expression('"topic" as type'),
				])
				->from('topics')
				->where($strAndWhereSearch)
				->andWhere("status = 1");
				
		$queryM = new Query();
		$queryM->select(['*'])
		->from(['u' => $sqlTopic])
		->orderBy(['type' => SORT_ASC]);
		echo $queryM->createCommand()->getRawSql();	
				
		$dataProvider = new ActiveDataProvider([
			"query"				=> $queryM,
				"pagination" 	=> [
				"pagesize"		=> 5
			],
		]);	
		return json_encode([
			'error' => false,
			'data'	=> $dataProvider->getModels()
		]);
	}
}

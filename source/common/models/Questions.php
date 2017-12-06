<?php

namespace common\models;

use Yii;
use yii\behaviors\SluggableBehavior;
use common\models\QuestionTopic;
/**
 * This is the model class for table "questions".
 *
 * @property integer $id
 * @property string $title
 * @property integer $user_id
 * @property integer $is_anonymous
 * @property string $body
 * @property integer $follow_total
 * @property integer $comment_total
 * @property integer $upvote_total
 * @property integer $views
 * @property integer $status
 * @property string $create_time
 * @property string $update_time
 */
class Questions extends BaseModel
{
    const IS_ANONYMOUS      = 1;
	const IS_ACTIVE = 1; // TRANG THAI CON HOAT DONG
    const IN_ACTIVE = 0; // TRANG THAI KHONG HOAT DONG
	const DEFAULT_CENSOR_FAG = 0; // TRANG THAI DUYET BAI
    const DEFAULT_STATUS    = self::IS_ACTIVE;
    const HAS_UNANSWERED    = "question/unanswered";
    const HAS_ANSWERED      = "question/answered";
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'questions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'title'], 'required'],
            [['status','censor_flag'], 'integer'],
            [['body','social_description'], 'string'],
            [['create_time', 'update_time'], 'safe'],
            [['title','images', 'social_title', 'social_images'], 'string', 'max' => 255],
            ['slug', 'string', 'max' => 500],
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
            'slug' => 'Slug',
            'title' => 'Tiêu đề câu hỏi',
            'user_id' => 'User ID',
            'is_anonymous' => 'Is Anonymous',
            'body' => 'Nội dung chi tiết câu hỏi',
            'follow_total' => 'Follow Total',
            'comment_total' => 'Comment Total',
            'upvote_total' => 'Upvote Total',
            'views' => 'Views',
            'images'        => 'Hình ảnh',
            'status'        => 'Trạng thái',
            'create_time'   => 'Create Time',
            'update_time'   => 'Update Time',
			'social_title'	=> 'Tiêu đề MXH',
			'social_description'	=> 'Mô tả MXH',
			'social_images'	=> 'Hình ảnh MXH',
			'censor_flag'	=> 'Kiểm duyệt',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
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
    /*This function for site/index*/
    public function getAnswer()
    {
        return $this->hasOne(Answers::className(), ['question_id' => 'id'])
        ->orderBy(['create_time' => SORT_DESC]);
    }
    
    public function getAnswerbyuser()
    {
        return $this->hasOne(Answers::className(), [
            'question_id'   => 'id'
        ])->where(['user_id'        =>  Yii::$app->user->getId()]);
    }

    public function getAnswers()
    {
        return $this->hasMany(Answers::className(), ['question_id' => 'id']);
    }

    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['post_id' => 'id'])
        ->where(['comment_type' => Comments::TYPE_QUESTIONS]);
    }

    public function getVotes()
    {
        return $this->hasMany(Upvotes::className(), ['post_id' => 'id'])
        ->where(['upvote_type' => Upvotes::TYPE_QUESTIONS])
        ->andWhere(['!=', 'type', Upvotes::TYPE_DOWN])
        ;
    }
    
    public function getNumfollow()
    {
        return $this->hasMany(UserQuestionFollow::className(), ['question_id' => 'id']);
    }
    
    public function getQuestionfollowflag()
    {
        return $this->hasOne(UserQuestionFollow::className(), ['question_id' => 'id'])
        ->where(['user_id' =>Yii::$app->user->getId()]);
    }
    
    // check unanswer and answer
    public function getFlaghadanswer()
    {
        $numAnswers = self::getAnswers()->count();
        if($numAnswers>0){
            return true;
        }
        else{
            return false;
        }
    }
    
    // get module unanswer and answer
    public function getModulehadanswer()
    {
        $numAnswers = self::getAnswers()->count();
        if($numAnswers>0){
            return self::HAS_ANSWERED;
        }
        else{
            return self::HAS_UNANSWERED;
        }
    }
    
    public function findQuestionBySlug($slug)
    {
        return Questions::find()->where(['slug' => $slug])->one();
    }
    
    public function addQuestionToTopics($question_id,$arrayTopics){
         $question_id = intval($question_id) < 0 ? 0 : intval($question_id);
         if($question_id==0)
             return false;
         if(!is_array($arrayTopics))
             return false;
         
         $modelQuestion = self::findOne($question_id);
         if(empty($modelQuestion))
             return false;
         
         foreach($arrayTopics as $topic){
                $modelQuestionTopic = new QuestionTopic();
                $modelQuestionTopic->addQuestionTopic($modelQuestion->id,$topic->id);
         }
        return true;    
    }
}

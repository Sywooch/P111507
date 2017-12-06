<?php

namespace common\models;

use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property string $comment
 * @property integer $comment_parent_id
 * @property integer $user_id
 * @property string $comment_type
 * @property integer $post_id
 * @property string $create_date
 * @property string $update_date
 */
class BaseModel extends \yii\db\ActiveRecord
{
    public function beforeSave($insert)
    {
        if ($this->isNewRecord) {
            $this->create_time =  time();
            $this->update_time =  time();
        } else {
            $this->update_time =  time();
        }
        return parent::beforeSave($insert);
    }
}

<?php
namespace common\models\sphinx;
use Yii;
class SphinxGlobalSearch extends \yii\sphinx\ActiveRecord
{
	
	public static function tableName(){
		return "sphinx_global_search";
	}
	public function rules(){
		return [
			[["tile"],"string"]
		];
	}
	
	public function attributeLabels(){
		return [
			'id'	=> 'Id',
			'title'	=> 'Title',
			'type'	=> 'Type'
		];
	}
	
	public function getResult(){
		if(empty($this->title))
			return self::find();
		
		$params = [":title"=>$this->title];
		return self::findBySql("SELECT * FROM sphinx_global_search WHERE MATCH(:title)",$params);
	}
} 

?>
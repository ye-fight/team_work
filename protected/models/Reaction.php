<?php

/**
 * This is the model class for table "soft_reaction".
 *
 * The followings are the available columns in table 'soft_reaction':
 * @property integer $reward_reaction_id
 * @property integer $user_id
 * @property integer $reward_id
 * @property string $reaction_info
 * @property integer $flag
 * @property integer $create_time
 */
class Reaction extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Reaction the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'soft_reaction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, reward_id, reaction_info, flag, create_time', 'required'),
			array('user_id, reward_id, flag, create_time', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('reward_reaction_id, user_id, reward_id, reaction_info, flag, create_time', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'author'=>array(self::BELONGS_TO, 'User', 'user_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'reward_reaction_id' => '回复ID',
			'user_id' => '用户ID',
			'reward_id' => '悬赏ID',
			'reaction_info' => '回复描述',
			'flag' => '状态',
			'create_time' => '回复时间',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('reward_reaction_id',$this->reward_reaction_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('reward_id',$this->reward_id);
		$criteria->compare('reaction_info',$this->reaction_info,true);
		$criteria->compare('flag',$this->flag);
		$criteria->compare('create_time',$this->create_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
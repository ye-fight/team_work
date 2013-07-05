<?php

/**
 * This is the model class for table "soft_reward".
 *
 * The followings are the available columns in table 'soft_reward':
 * @property integer $reward_id
 * @property integer $user_id
 * @property string $reward_name
 * @property string $reward_info
 * @property integer $flag
 * @property string $price_name
 * @property string $price_info
 * @property integer $create_time
 * @property integer $end_time
 */
class Reward extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Reward the static model class
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
		return 'soft_reward';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, reward_name, flag, price_name, create_time, end_time', 'required'),
			array('user_id, flag, create_time, end_time', 'numerical', 'integerOnly'=>true),
			array('reward_name, price_name', 'length', 'max'=>60),
			array('reward_info, price_info', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('reward_id, user_id, reward_name, reward_info, flag, price_name, price_info, create_time, end_time', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'reward_id' => 'Reward',
			'user_id' => 'User',
			'reward_name' => '任务名',
			'reward_info' => '任务描述',
			'flag' => '状态',
			'price_name' => '赏金',
			'price_info' => '赏金描述',
			'create_time' => '创建时间',
			'end_time' => '结束时间',
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

		$criteria->compare('reward_id',$this->reward_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('reward_name',$this->reward_name,true);
		$criteria->compare('reward_info',$this->reward_info,true);
		$criteria->compare('flag',$this->flag);
		$criteria->compare('price_name',$this->price_name,true);
		$criteria->compare('price_info',$this->price_info,true);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('end_time',$this->end_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
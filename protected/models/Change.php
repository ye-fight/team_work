<?php

/**
 * This is the model class for table "soft_change".
 *
 * The followings are the available columns in table 'soft_change':
 * @property integer $change_id
 * @property integer $user_id
 * @property integer $sof_change_id
 * @property integer $type
 * @property string $change_name
 * @property string $change_info
 * @property integer $flag
 * @property integer $create_time
 * @property integer $end_time
 * @property string $image
 */
class Change extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Change the static model class
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
		return 'soft_change';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, type, change_name, flag, create_time, end_time', 'required'),
			array('user_id, sof_change_id, type, flag, create_time, end_time', 'numerical', 'integerOnly'=>true),
			array('change_name', 'length', 'max'=>60),
			array('image', 'file', 'types'=>'jpg, gif, png'),
			array('change_info', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('change_id, user_id, sof_change_id, type, change_name, change_info, flag, create_time, end_time, image', 'safe', 'on'=>'search'),
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
			'change_id' => '交换ID',
			'user_id' => '用户ID',
			'sof_change_id' => '交换回应ID',
			'type' => '类型',
			'change_name' => '物品名',
			'change_info' => '物品描述',
			'flag' => '状态',
			'create_time' => '创建时间',
			'end_time' => '结束时间',
			'image' => '图片',
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

		$criteria->compare('change_id',$this->change_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('sof_change_id',$this->sof_change_id);
		$criteria->compare('type',$this->type);
		$criteria->compare('change_name',$this->change_name,true);
		$criteria->compare('change_info',$this->change_info,true);
		$criteria->compare('flag',$this->flag);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('end_time',$this->end_time);
		$criteria->compare('image',$this->image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
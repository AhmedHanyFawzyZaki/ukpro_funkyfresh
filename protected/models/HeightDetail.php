<?php

/**
 * This is the model class for table "height_detail".
 *
 * The followings are the available columns in table 'height_detail':
 * @property integer $id
 * @property integer $height_id
 * @property string $weight
 * @property string $size
 * @property string $shoulder
 * @property string $sleeve
 * @property string $waist
 */
class HeightDetail extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return HeightDetail the static model class
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
		return 'height_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('height_id', 'numerical', 'integerOnly'=>true),
			array('weight, size, shoulder, sleeve, waist', 'length', 'max'=>260),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, height_id, weight, size, shoulder, sleeve, waist', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'height_id' => 'Height',
			'weight' => 'Weight',
			'size' => 'Size',
			'shoulder' => 'Shoulder',
			'sleeve' => 'Sleeve',
			'waist' => 'Waist',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('height_id',$this->height_id);
		$criteria->compare('weight',$this->weight,true);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('shoulder',$this->shoulder,true);
		$criteria->compare('sleeve',$this->sleeve,true);
		$criteria->compare('waist',$this->waist,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
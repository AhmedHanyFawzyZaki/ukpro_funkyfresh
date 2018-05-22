<?php

/**
 * This is the model class for table "snap".
 *
 * The followings are the available columns in table 'snap':
 * @property integer $id
 * @property string $title
 * @property integer $type
 * @property string $image
 * @property string $color
 * @property string $extra_image
 * @property string $left_image
 * @property string $right_image
 */
class Snap extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Snap the static model class
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
		return 'snap';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, sub_category', 'numerical', 'integerOnly'=>true),
			array('title, image, color, extra_image, left_image, right_image', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, type, image, color, extra_image, left_image, right_image', 'safe', 'on'=>'search'),
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
                    'subCategory' => array(self::BELONGS_TO, 'Subcategory', 'sub_category'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'type' => 'Type',
			'image' => 'Front Image',
			'color' => 'Color',
			'extra_image' => 'Extra Image',
			'left_image' => 'Left Image',
			'right_image' => 'Right Image',
                        'sub_category'=>'Sub Category',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('extra_image',$this->extra_image,true);
		$criteria->compare('left_image',$this->left_image,true);
		$criteria->compare('right_image',$this->right_image,true);
                $criteria->compare('sub_category',$this->sub_category);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public static function GetSnapType($val)
	{
		switch($val)
		{
			case "0":
				return "Snap";break;
			case "1":
				return "Zip";break;
			case "2":
				return "Hidden Zip";break;
		}
	}
	public static function GetSnapColor($color)
	{
		return '<span style="padding:5px 15px;border:1px solid;background:'.$color.'"> </span>';
	}
}
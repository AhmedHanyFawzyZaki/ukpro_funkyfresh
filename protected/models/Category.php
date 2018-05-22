<?php

/**
 * This is the model class for table "category".
 *
 * The followings are the available columns in table 'category':
 * @property integer $id
 * @property string $title
 * @property string $desc
 * @property integer $sort
 * @property string $image
 * @property integer $temp1
 * @property integer $temp2
 *
 * The followings are the available model relations:
 * @property Product[] $products
 */
class Category extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Category the static model class
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
		return 'category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sort, temp1, temp2,price', 'numerical', 'integerOnly'=>true),
			array('title, image, image1, image2, image3', 'length', 'max'=>255),
			array('desc', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, desc, sort, image, temp1, temp2', 'safe', 'on'=>'search'),
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
			'products' => array(self::HAS_MANY, 'Product', 'cat_id'),
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
			'desc' => 'Description',
			'sort' => 'Sort',
			'image' => 'Image',
			'image1' => 'SubImage 1',
			'image2' => 'SubImage 2',
			'image3' => 'SubImage 3',
			'temp1' => 'Temp1',
			'temp2' => 'Temp2',
			'price' => 'Price Start From',
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
		$criteria->compare('desc',$this->desc,true);
		$criteria->compare('sort',$this->sort);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('image1',$this->image1,true);
		$criteria->compare('image2',$this->image2,true);
		$criteria->compare('image3',$this->image3,true);
		$criteria->compare('temp1',$this->temp1);
		$criteria->compare('temp2',$this->temp2);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function getCategories()
	{
		return CHtml::listData(Category::model()->findAll(),'id','title');

	}
}
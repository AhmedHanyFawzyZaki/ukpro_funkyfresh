<?php

/**
 * This is the model class for table "orders_details".
 *
 * The followings are the available columns in table 'orders_details':
 * @property integer $id
 * @property integer $orders_id
 * @property integer $qty
 * @property integer $pro_id
 * @property string $price
 * @property integer $cat_id
 * @property integer $subcat_id
 * @property string $body
 * @property string $collar
 * @property string $cuff_left
 * @property string $cuff_right
 * @property string $pocket_bottom_left
 * @property string $pocket_bottom_right
 * @property string $knit
 * @property string $sleeve_left
 * @property string $sleeve_right
 * @property string $buttons
 */
class OrdersDetails extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OrdersDetails the static model class
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
		return 'orders_details';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('orders_id', 'required'),
			array('orders_id, qty, pro_id, cat_id, subcat_id', 'numerical', 'integerOnly'=>true),
			array('price', 'length', 'max'=>11),
			array('body, collar, cuff_left, cuff_right, pocket_bottom_left, pocket_bottom_right, knit, sleeve_left, sleeve_right, buttons', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, orders_id, qty, pro_id, price, cat_id, subcat_id, body, collar, cuff_left, cuff_right, pocket_bottom_left, pocket_bottom_right, knit, sleeve_left, sleeve_right, buttons', 'safe', 'on'=>'search'),
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
			'cat'=>array(self::BELONGS_TO,'Category','cat_id'),
			'subcat'=>array(self::BELONGS_TO,'Subcategory','subcat_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'orders_id' => 'Orders',
			'qty' => 'Qty',
			'pro_id' => 'Product',
			'price' => 'Price',
			'cat_id' => 'Type',
			'subcat_id' => 'SubType',
			'body' => 'Body',
			'collar' => 'Collar',
			'cuff_left' => 'Cuff Left',
			'cuff_right' => 'Cuff Right',
			'pocket_bottom_left' => 'Pocket Bottom Left',
			'pocket_bottom_right' => 'Pocket Bottom Right',
			'knit' => 'Knit',
			'sleeve_left' => 'Sleeve Left',
			'sleeve_right' => 'Sleeve Right',
			'buttons' => 'Buttons',
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
		$criteria->compare('orders_id',$this->orders_id);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('pro_id',$this->pro_id);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('subcat_id',$this->subcat_id);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('collar',$this->collar,true);
		$criteria->compare('cuff_left',$this->cuff_left,true);
		$criteria->compare('cuff_right',$this->cuff_right,true);
		$criteria->compare('pocket_bottom_left',$this->pocket_bottom_left,true);
		$criteria->compare('pocket_bottom_right',$this->pocket_bottom_right,true);
		$criteria->compare('knit',$this->knit,true);
		$criteria->compare('sleeve_left',$this->sleeve_left,true);
		$criteria->compare('sleeve_right',$this->sleeve_right,true);
		$criteria->compare('buttons',$this->buttons,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
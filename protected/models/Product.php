<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $id
 * @property string $title
 * @property string $desc
 * @property string $main_image
 * @property integer $gallery_id
 * @property double $price
 * @property integer $cat_id
 * @property integer $color_id
 * @property string $button
 * @property string $cuff_left
 * @property string $top_right_pocket
 * @property string $top_left_pocket
 * @property string $bottom_right_pocket
 * @property string $bottom_left_pocket
 * @property string $collar
 * @property string $top_right_patch
 * @property string $top_left_patch
 * @property string $bottom_right_patch
 * @property string $bottom_left_patch
 * @property string $hoode
 * @property string $upper_body
 * @property string $bottom_body
 * @property string $right_body
 * @property string $left_body
 * @property string $knit
 * @property string $inner_lining
 * @property string $right_sleeve
 * @property string $left_sleeve
 *
 * The followings are the available model relations:
 * @property BuyingLog[] $buyingLogs
 * @property OrdersDetails[] $ordersDetails
 * @property Gallery $gallery
 * @property Category $cat
 * @property ProductShipping[] $productShippings
 */
class Product extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
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
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('gallery_id, cat_id, subcat_id, default', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			array('title, color, code, main_image, button, cuff_left, cuff_right, top_right_pocket, top_left_pocket, bottom_right_pocket, bottom_left_pocket, collar, top_right_patch, top_left_patch, bottom_right_patch, bottom_left_patch, hoode, upper_body, bottom_body, right_body, left_body, knit, inner_lining, right_sleeve, left_sleeve, front_sleeves, pockets, left_knit, left_button, right_knit, right_button, back, back_sleeves, back_knit, color_title, top_zip', 'length', 'max'=>255),
			array('desc,body','safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, body, desc, main_image, gallery_id, price, cat_id, color_id, button, cuff_left, cuff_right, top_right_pocket, top_left_pocket, bottom_right_pocket, bottom_left_pocket, collar, top_right_patch, top_left_patch, bottom_right_patch, bottom_left_patch, hoode, upper_body, bottom_body, right_body, left_body, knit, inner_lining, right_sleeve, left_sleeve, front_sleeves, pockets, left_knit, left_button, right_knit, right_button, back, back_sleeves, back_knit, color_title', 'safe', 'on'=>'search'),
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
			'ordersDetails' => array(self::HAS_MANY, 'OrdersDetails', 'pro_id'),
			'gallery' => array(self::BELONGS_TO, 'Gallery', 'gallery_id'),
			'cat' => array(self::BELONGS_TO, 'Category', 'cat_id'),
			'subcat' => array(self::BELONGS_TO, 'Subcategory', 'subcat_id'),
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
			'main_image' => 'Main Image',
			'gallery_id' => 'Gallery',
			'price' => 'Price',
			'cat_id' => 'Type',
			'subcat_id' => 'Subtype',
			'color' => 'Color',
			'code' => 'Code',
			'button' => 'Buttons',
			'cuff_left' => 'Cuff Left',
			'cuff_right' => 'Cuff Right',
			'top_right_pocket' => 'Top Right Pocket',
			'top_left_pocket' => 'Top Left Pocket',
			'bottom_right_pocket' => 'Right Pocket',
			'bottom_left_pocket' => 'Left Pocket',
			'collar' => 'Collar',
			'top_right_patch' => 'Top Right Patch',
			'top_left_patch' => 'Top Left Patch',
			'bottom_right_patch' => 'Bottom Right Patch',
			'bottom_left_patch' => 'Bottom Left Patch',
			'hoode' => 'Hoode',
			'upper_body' => 'Upper Body',
			'bottom_body' => 'Bottom Body',
			'right_body' => 'Right Body',
			'left_body' => 'Left Body',
			'knit' => 'Knit',
			'inner_lining' => 'Inner Lining',
			'right_sleeve' => 'Right Sleeve',
			'left_sleeve' => 'Left Sleeve',
			'front_sleeves' => 'Front Sleeves',
			'body'=>'Body',
			'pockets'=>'Pockets',
			'left_knit'=>'Left Knit',
			'left_button'=>'Left Buttons',
			'right_knit'=>'Right Knit',
			'right_button'=>'Right Buttons',
			'back'=>'Back',
			'back_sleeves'=>'Back Sleeves',
			'back_knit'=>'Back Knit',
			'default'=>'Default',
			'color_title'=>'Color Name',
                        'top_zip'=>'Top Zip',
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
		$criteria->compare('main_image',$this->main_image,true);
		$criteria->compare('gallery_id',$this->gallery_id);
		$criteria->compare('price',$this->price);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('subcat_id',$this->subcat_id);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('button',$this->button,true);
		$criteria->compare('cuff_left',$this->cuff_left,true);
		$criteria->compare('cuff_right',$this->cuff_right,true);
		$criteria->compare('top_right_pocket',$this->top_right_pocket,true);
		$criteria->compare('top_left_pocket',$this->top_left_pocket,true);
		$criteria->compare('bottom_right_pocket',$this->bottom_right_pocket,true);
		$criteria->compare('bottom_left_pocket',$this->bottom_left_pocket,true);
		$criteria->compare('collar',$this->collar,true);
		$criteria->compare('top_right_patch',$this->top_right_patch,true);
		$criteria->compare('top_left_patch',$this->top_left_patch,true);
		$criteria->compare('bottom_right_patch',$this->bottom_right_patch,true);
		$criteria->compare('bottom_left_patch',$this->bottom_left_patch,true);
		$criteria->compare('hoode',$this->hoode,true);
		$criteria->compare('upper_body',$this->upper_body,true);
		$criteria->compare('bottom_body',$this->bottom_body,true);
		$criteria->compare('right_body',$this->right_body,true);
		$criteria->compare('left_body',$this->left_body,true);
		$criteria->compare('knit',$this->knit,true);
		$criteria->compare('inner_lining',$this->inner_lining,true);
		$criteria->compare('right_sleeve',$this->right_sleeve,true);
		$criteria->compare('left_sleeve',$this->left_sleeve,true);
		$criteria->compare('front_sleeves',$this->front_sleeves,true);
		$criteria->compare('pockets',$this->pockets,true);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('default',$this->default);
		$criteria->compare('color_title',$this->color_title,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}



	/*public function Getcolors($type_id,$subtype_id)
	{


		$criteria= new CDbCriteria();

		$criteria->condition='cat_id ='.$type_id.' and subcat_id='.$subtype_id;

		$products=  Product::model()->findAll($criteria);


		return $products;



	}*/


}
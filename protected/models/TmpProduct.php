<?php

/**
 * This is the model class for table "tmp_product".
 *
 * The followings are the available columns in table 'tmp_product':
 * @property integer $id
 * @property string $title
 * @property string $code
 * @property string $desc
 * @property string $main_image
 * @property integer $gallery_id
 * @property double $price
 * @property integer $cat_id
 * @property integer $subcat_id
 * @property string $color
 * @property string $button
 * @property string $cuff_left
 * @property string $cuff_right
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
 * @property string $body
 * @property integer $default
 * @property string $front_sleeves
 * @property string $pockets
 * @property string $left_knit
 * @property string $left_button
 * @property string $right_knit
 * @property string $right_button
 * @property string $back
 * @property string $back_knit
 * @property string $back_sleeves
 * @property string $color_title
 * @property string $top_zip
 */
class TmpProduct extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TmpProduct the static model class
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
		return 'tmp_product';
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
			array('title, code, main_image, button, cuff_left, cuff_right, top_right_pocket, top_left_pocket, bottom_right_pocket, bottom_left_pocket, collar, top_right_patch, top_left_patch, bottom_right_patch, bottom_left_patch, hoode, upper_body, bottom_body, right_body, left_body, knit, inner_lining, right_sleeve, left_sleeve, body, front_sleeves, pockets, left_knit, left_button, right_knit, right_button, back, back_knit, back_sleeves, color_title, top_zip,body_color,sleeves_color,button_color,pocket_color,knit_base_color,
                             leftchest,leftchest_txt_color,leftchest_txt_type,rightchest1,rightchest_txt_color1,rightchest_txt_type1,rightchest2,rightchest_txt_color2,rightchest_txt_type2,
                             right_arm1,rightarm_txt_type1,rightarm_txt_color1,right_arm2,rightarm_txt_type2,rightarm_txt_color2,
                             left_arm1,leftarm_txt_type1,leftarm_txt_color1,left_arm2,leftarm_txt_type2,leftarm_txt_color2,
                             back_text,back_text_color,back_text_type,back_text1,back_text_color1,back_text_type1 ,back_text2,back_text_color2,back_text_type2,
                             user_id', 'length', 'max'=>255),
			array('color', 'length', 'max'=>11),
			array('desc,form_size , waist_size ,shoulder_length , body_length,sleeve_length,knit_stripe,knit_stripe_right,knit_stripe_left ,knit_stripe_back,knit_stripe_color,product_id,rightchest_image,leftchest_image,rightarm_image,rightarm_image2,leftarm_image,leftarm_image2,back_image,knit_stripe_border,knit_stripe_border_color,top_zip,back_type, sold', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, code, desc, main_image, gallery_id, price, cat_id, subcat_id, color, button, cuff_left, cuff_right, top_right_pocket, top_left_pocket, bottom_right_pocket, bottom_left_pocket, collar, top_right_patch, top_left_patch, bottom_right_patch, bottom_left_patch, hoode, upper_body, bottom_body, right_body, left_body, knit, inner_lining, right_sleeve, left_sleeve, body, default, front_sleeves, pockets, left_knit, left_button, right_knit, right_button, back, back_knit, back_sleeves, color_title, top_zip', 'safe', 'on'=>'search'),
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
                    'size' => array(self::HAS_MANY, 'Size', 'form_size'),
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
			'code' => 'Code',
			'desc' => 'Desc',
			'main_image' => 'Main Image',
			'gallery_id' => 'Gallery',
			'price' => 'Price',
			'cat_id' => 'Cat',
			'subcat_id' => 'Subcat',
			'color' => 'Color',
			'button' => 'Button',
			'cuff_left' => 'Cuff Left',
			'cuff_right' => 'Cuff Right',
			'top_right_pocket' => 'Top Right Pocket',
			'top_left_pocket' => 'Top Left Pocket',
			'bottom_right_pocket' => 'Bottom Right Pocket',
			'bottom_left_pocket' => 'Bottom Left Pocket',
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
			'body' => 'Body',
			'default' => 'Default',
			'front_sleeves' => 'Front Sleeves',
			'pockets' => 'Pockets',
			'left_knit' => 'Left Knit',
			'left_button' => 'Left Button',
			'right_knit' => 'Right Knit',
			'right_button' => 'Right Button',
			'back' => 'Back',
			'back_knit' => 'Back Knit',
			'back_sleeves' => 'Back Sleeves',
			'color_title' => 'Color Title',
			'top_zip' => 'Top Zip',
                                                'sold' => 'Sold'
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
		$criteria->compare('code',$this->code,true);
		$criteria->compare('desc',$this->desc,true);
		$criteria->compare('main_image',$this->main_image,true);
		$criteria->compare('gallery_id',$this->gallery_id);
		$criteria->compare('price',$this->price);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('subcat_id',$this->subcat_id);
		$criteria->compare('color',$this->color,true);
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
		$criteria->compare('body',$this->body,true);
		$criteria->compare('default',$this->default);
		$criteria->compare('front_sleeves',$this->front_sleeves,true);
		$criteria->compare('pockets',$this->pockets,true);
		$criteria->compare('left_knit',$this->left_knit,true);
		$criteria->compare('left_button',$this->left_button,true);
		$criteria->compare('right_knit',$this->right_knit,true);
		$criteria->compare('right_button',$this->right_button,true);
		$criteria->compare('back',$this->back,true);
		$criteria->compare('back_knit',$this->back_knit,true);
		$criteria->compare('back_sleeves',$this->back_sleeves,true);
		$criteria->compare('color_title',$this->color_title,true);
		$criteria->compare('top_zip',$this->top_zip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
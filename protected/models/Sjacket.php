<?php

/**
 * This is the model class for table "sjacket".
 *
 * The followings are the available columns in table 'sjacket':
 * @property integer $id
 * @property integer $user_id
 * @property integer $prod_id
 * @property string $type
 * @property integer $cat_id
 * @property integer $subcat_id
 * @property string $price
 * @property string $body
 * @property string $buttons
 * @property string $collar
 * @property string $cuff_left
 * @property string $cuff_right
 * @property string $knite
 * @property string $sleeve_left
 * @property string $sleeve_right
 * @property string $pocket_left
 * @property string $pocket_right
 * @property string $save_date
 * @property string $top_collar
 * @property string $bottom_jacket
 * @property string $image
 * @property string $leftchest
 * @property string $leftchest_txt_color
 * @property string $leftchest_txt_type
 * @property string $rightchest
 * @property string $rightchest_txt_color
 * @property string $rightchest_txt_type
 * @property string $leftarm
 * @property string $leftarm_txt_color
 * @property string $leftarm_txt_type
 * @property string $rightarm
 * @property string $rightarm_txt_color
 * @property string $rightarm_txt_type
 * @property string $back
 * @property string $back_txt_color
 * @property string $back_txt_type
 * @property string $back_txt_tail
 */
class Sjacket extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Sjacket the static model class
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
		return 'sjacket';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, prod_id, cat_id, subcat_id', 'numerical', 'integerOnly'=>true),
			array('type, price, body, buttons, collar, cuff_left, cuff_right, knite, sleeve_left, sleeve_right, pocket_left, pocket_right, save_date, top_collar, bottom_jacket, image, leftchest, leftchest_txt_color, leftchest_txt_type, rightchest, rightchest_txt_color, rightchest_txt_type, leftarm, leftarm_txt_color, leftarm_txt_type, rightarm, rightarm_txt_color, rightarm_txt_type, back, back_txt_color, back_txt_type, back_txt_tail', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, prod_id, type, cat_id, subcat_id, price, body, buttons, collar, cuff_left, cuff_right, knite, sleeve_left, sleeve_right, pocket_left, pocket_right, save_date, top_collar, bottom_jacket, image, leftchest, leftchest_txt_color, leftchest_txt_type, rightchest, rightchest_txt_color, rightchest_txt_type, leftarm, leftarm_txt_color, leftarm_txt_type, rightarm, rightarm_txt_color, rightarm_txt_type, back, back_txt_color, back_txt_type, back_txt_tail', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'prod_id' => 'Prod',
			'type' => 'Type',
			'cat_id' => 'Cat',
			'subcat_id' => 'Subcat',
			'price' => 'Price',
			'body' => 'Body',
			'buttons' => 'Buttons',
			'collar' => 'Collar',
			'cuff_left' => 'Cuff Left',
			'cuff_right' => 'Cuff Right',
			'knite' => 'Knite',
			'sleeve_left' => 'Sleeve Left',
			'sleeve_right' => 'Sleeve Right',
			'pocket_left' => 'Pocket Left',
			'pocket_right' => 'Pocket Right',
			'save_date' => 'Save Date',
			'top_collar' => 'Top Collar',
			'bottom_jacket' => 'Bottom Jacket',
			'image' => 'Image',
			'leftchest' => 'Leftchest',
			'leftchest_txt_color' => 'Leftchest Txt Color',
			'leftchest_txt_type' => 'Leftchest Txt Type',
			'rightchest' => 'Rightchest',
			'rightchest_txt_color' => 'Rightchest Txt Color',
			'rightchest_txt_type' => 'Rightchest Txt Type',
			'leftarm' => 'Leftarm',
			'leftarm_txt_color' => 'Leftarm Txt Color',
			'leftarm_txt_type' => 'Leftarm Txt Type',
			'rightarm' => 'Rightarm',
			'rightarm_txt_color' => 'Rightarm Txt Color',
			'rightarm_txt_type' => 'Rightarm Txt Type',
			'back' => 'Back',
			'back_txt_color' => 'Back Txt Color',
			'back_txt_type' => 'Back Txt Type',
			'back_txt_tail' => 'Back Txt Tail',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('prod_id',$this->prod_id);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('subcat_id',$this->subcat_id);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('buttons',$this->buttons,true);
		$criteria->compare('collar',$this->collar,true);
		$criteria->compare('cuff_left',$this->cuff_left,true);
		$criteria->compare('cuff_right',$this->cuff_right,true);
		$criteria->compare('knite',$this->knite,true);
		$criteria->compare('sleeve_left',$this->sleeve_left,true);
		$criteria->compare('sleeve_right',$this->sleeve_right,true);
		$criteria->compare('pocket_left',$this->pocket_left,true);
		$criteria->compare('pocket_right',$this->pocket_right,true);
		$criteria->compare('save_date',$this->save_date,true);
		$criteria->compare('top_collar',$this->top_collar,true);
		$criteria->compare('bottom_jacket',$this->bottom_jacket,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('leftchest',$this->leftchest,true);
		$criteria->compare('leftchest_txt_color',$this->leftchest_txt_color,true);
		$criteria->compare('leftchest_txt_type',$this->leftchest_txt_type,true);
		$criteria->compare('rightchest',$this->rightchest,true);
		$criteria->compare('rightchest_txt_color',$this->rightchest_txt_color,true);
		$criteria->compare('rightchest_txt_type',$this->rightchest_txt_type,true);
		$criteria->compare('leftarm',$this->leftarm,true);
		$criteria->compare('leftarm_txt_color',$this->leftarm_txt_color,true);
		$criteria->compare('leftarm_txt_type',$this->leftarm_txt_type,true);
		$criteria->compare('rightarm',$this->rightarm,true);
		$criteria->compare('rightarm_txt_color',$this->rightarm_txt_color,true);
		$criteria->compare('rightarm_txt_type',$this->rightarm_txt_type,true);
		$criteria->compare('back',$this->back,true);
		$criteria->compare('back_txt_color',$this->back_txt_color,true);
		$criteria->compare('back_txt_type',$this->back_txt_type,true);
		$criteria->compare('back_txt_tail',$this->back_txt_tail,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
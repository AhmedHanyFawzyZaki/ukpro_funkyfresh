<?php

/**
 * This is the model class for table "stripe".
 *
 * The followings are the available columns in table 'stripe':
 * @property integer $id
 * @property string $title
 * @property string $image
 */
class Stripe extends CActiveRecord
{
  /**
   * Returns the static model of the specified AR class.
   * @param string $className active record class name.
   * @return Stripe the static model class
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
    return 'stripe';
  }

  /**
   * @return array validation rules for model attributes.
   */
  public function rules()
  {
    // NOTE: you should only define rules for those attributes that
    // will receive user inputs.
    return array(
      array('title, image, icon, left_image, right_image, back_image, color_title', 'length', 'max'=>255),
      array('type, sub_category', 'numerical', 'integerOnly'=>true),
      // The following rule is used by search().
      // Please remove those attributes that should not be searched.
      array('id, title, image, icon, type, left_image, right_image, back_image, color_title', 'safe', 'on'=>'search'),
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
      'image' => 'Image',
      'left_image' => 'Left Image',
      'right_image' => 'Right Image',
      'back_image' => 'Back Image',
      'icon' => 'Stripe Color',
      'type' => 'Stripe Type',
      'color_title'=>'Color Name',
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
    $criteria->compare('image',$this->image,true);
    $criteria->compare('left_image',$this->left_image,true);
    $criteria->compare('right_image',$this->right_image,true);
    $criteria->compare('back_image',$this->back_image,true);
    $criteria->compare('type',$this->type,true);
    $criteria->compare('color_title',$this->color_title,true);
    $criteria->compare('sub_category',$this->sub_category);

    return new CActiveDataProvider($this, array(
      'criteria'=>$criteria,
    ));
  }
  
  public static function getStripes($flag='1',$sub_category='1')
  {
    $criteria=new CDbCriteria;
    $criteria->condition='type='.$flag;
    $picker_id=$flag==1?'single-color-picker':'double-color-picker';
    $criteria->addCondition('sub_category='.$sub_category);
    $stripes=Stripe::model()->findAll($criteria);
    foreach($stripes as $stripe)
    {
      $list.='<a style="background:'.$stripe->icon.'" title="'.$stripe->color_title.'" class="btn round" href="javascript:void(0)" onclick="change_stripe(\''.$stripe->image.'\',\''.$stripe->type.'\');document.getElementById(\''.$picker_id.'\').style.background=\''.$stripe->icon.'\';'
              . 'document.getElementById(\'tmp_knit_stripe_color\').value=\'' . $stripe->color_title . '\';document.getElementById(\'tmp_knit_stripe\').value=\''.$stripe->image.'\';document.getElementById(\'tmp_knit_stripe_back\').value=\''.$stripe->image.'\';document.getElementById(\'tmp_knit_stripe_right\').value=\''.$stripe->image.'\';document.getElementById(\'tmp_knit_stripe_left\').value=\''.$stripe->image.'\''
              . '"></a>';
    }
    return $list;
  }
}
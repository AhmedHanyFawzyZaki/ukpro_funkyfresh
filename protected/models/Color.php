<?php

/**
 * This is the model class for table "color".
 *
 * The followings are the available columns in table 'color':
 * @property integer $id
 * @property string $title
 * @property string $color
 */
class Color extends CActiveRecord
{
  /**
   * Returns the static model of the specified AR class.
   * @param string $className active record class name.
   * @return Color the static model class
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
    return 'color';
  }

  /**
   * @return array validation rules for model attributes.
   */
  public function rules()
  {
    // NOTE: you should only define rules for those attributes that
    // will receive user inputs.
    return array(    
      array('gallery_id', 'numerical', 'integerOnly'=>true),
      array('title,color','unique'),
      array('title,color','required'),  
      array('title, color', 'length', 'max'=>255),
      // The following rule is used by search().
      // Please remove those attributes that should not be searched.
      array('id, title, gallery_id, color', 'safe', 'on'=>'search'),
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
    'gallery' => array(self::BELONGS_TO, 'Gallery', 'gallery_id'),
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
      'color' => 'Color',
      'gallery_id' => 'Gallery',      
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
    $criteria->compare('color',$this->color,true);    
    $criteria->compare('gallery_id',$this->gallery_id);

    return new CActiveDataProvider($this, array(
      'criteria'=>$criteria,
    ));
  }
  public static function getColors()
  {
    return CHtml::listData(Color::model()->findAll(),'id','title');

  }
  
  public static function getColorsLinks($flag)
  {
    $colors=Color::model()->findAll();
    foreach($colors as $color)
    {
      $list.='<a style="background:'.$color->color.'" title="'.$color->title.'" class="btn round" href="javascript:void(0)"  onclick="change_txt_color(\''.$color->color.'\','.$flag.');document.getElementById(\'tmp_rightchest_txt_color'.$flag.'\').value=\'' . $color->color . '\';"></a>';
    }
    return $list;
  }
  public static function getColorsLinks1()
  {
    $colors=Color::model()->findAll();
    foreach($colors as $color)
    {
      $list.='<a style="background:'.$color->color.'" title="'.$color->title.'" class="btn round" href="javascript:void(0)" onclick="change_txt_color1(\''.$color->color.'\')"></a>';
    }
    return $list;
  }
  public static function getColorsLinksLeftSide($flag,$line)
  {
    $colors=Color::model()->findAll();
    foreach($colors as $color)
    {
      $list.='<a style="background:'.$color->color.'" title="'.$color->title.'" class="btn round" href="javascript:void(0)" onclick="change_txt_color_leftside(\''.$color->color.'\',\''.$flag.'\',\''.$line.'\')"></a>';
    }
    return $list;
  }
  public static function getColorsLinksRightSide($flag ,$line)
  {
    $colors=Color::model()->findAll();
    foreach($colors as $color)
    {
      $list.='<a style="background:'.$color->color.'" title="'.$color->title.'" class="btn round" href="javascript:void(0)" onclick="change_txt_color_rightside(\''.$color->color.'\',\''.$flag.'\',\''.$line.'\')"></a>';
    }
    return $list;
  }
  
  public static function getColorsLinksBack($id="back_text_id",$form_id="tmp_back_text_color" ,$picker_id)
  {
    $colors=Color::model()->findAll();
    foreach($colors as $color)
    {
      $list.='<a style="background:'.$color->color.'" title="'.$color->title.'" class="btn round" href="javascript:void(0)" onclick="change_txt_color_back(\''.$color->color.'\',\''.$id.'\',\''.$form_id.'\',\''.$picker_id.'\')"></a>';
    }
    return $list;
  }
  public static function getColorsLinksBack1($text_id='back_text_id',$form_id='form_back_text_shadow' ,$line)
  {
    $colors=Color::model()->findAll();
    foreach($colors as $color)
    {
      $list.='<a style="background:'.$color->color.'" title="'.$color->title.'" class="btn round" href="javascript:void(0)" onclick="change_txt_color_back1(\''.$color->color.'\',\''.$text_id.'\',\''.$form_id.'\',\''.$line.'\')"></a>';
    }
    return $list;
  }
  
  
   public static function getTopZipLinks()
  {
       
       
          if($_GET['cat_id']){
                $cat_id = $_GET['cat_id'];
       } elseif($_POST['cat_id']) {
            $cat_id = $_POST['cat_id'];
        }elseif (!$_POST['cat_id']) {
            $cat_id = '1';
        }
        
        
       if($_GET['subcat_id']){
                $subcat_id = $_GET['subcat_id'];
       }elseif($_POST['subcat_id']) {
            $subcat_id = $_POST['subcat_id'];
        }else if (!$_POST['subcat_id']) {
            $subcat_id = '1';
        }
        //get the default product to display
        $criteria = new CDbCriteria();

        $criteria->condition = 'cat_id=' . $cat_id . ' and subcat_id=' . $subcat_id;

        $products = Product::model()->findAll($criteria);
        
    $cat_and_sub_path = Yii::app()->user->getState('cat') . '/' . Yii::app()->user->getState('subcat');
                           $list='';
                            foreach ($products as $product) {
                                $color = $product->code;
                                $color_code = $product->color;
                                $path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/top_zip.png';
                               // $back_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/back/back.png';
                              //  $right_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/right/body-right.png';
                               // $left_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/left/body-left.png';
                                $list.= '<span class="btn round" title="' . $product->color_title . '" style="background:' . $color_code . '" onclick="document.getElementById(\'tmp_top_zip\').value=\''.$color.'\';document.getElementById(\'zip_top\').src=\''.$path.'\';document.getElementById(\'zip-color-picker\').style.background=\'' . $color_code . '\';'
                                        . '"></span>';
                            }
                           
    return $list;
  }

}
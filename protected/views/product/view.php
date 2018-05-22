<?php
$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Product','url'=>array('index')),
	array('label'=>'Create Product','url'=>array('create')),
	array('label'=>'Update Product','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Product','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Product #<?php echo $model->id; ?></h1>

<?php 

$img_url=Yii::app()->baseUrl.'/media/types/'.strtolower(Category::model()->findByPk($model->cat_id)->title).'/'.strtolower(Subcategory::model()->findByPk($model->subcat_id)->title).'/'.strtolower($model->code).'/';


$this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
	//	'id',		
		'cat_id'=>array(
			'name'=>'cat_id',			
			'value'=>$model->cat->title,
		),
		'subcat_id'=>array(
			'name'=>'subcat_id',			
			'value'=>$model->subcat->title,
		),
		'title',
		'color_title',
		//'desc',
		/*'main_image'=>array(
				'name'=>'main_image',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->main_image,$model->title,array('width'=>250)),
			),*/	
		//'price',		
		'color'=>array(
				'name'=>'color',
				'type'=>'raw',
				'value'=>Helper::displayColor($model->color),
			),
		'body'=>array(
				'name'=>'body',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->body,$model->title,array('width'=>250)),
			),
		'front_sleeves'=>array(
				'name'=>'front_sleeves',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->front_sleeves,$model->title,array('width'=>250)),
			),
		'pockets'=>array(
				'name'=>'pockets',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->pockets,$model->title,array('width'=>250)),
			),
		'knit'=>array(
				'name'=>'knit',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->knit,$model->title,array('width'=>250)),
			),
                'button'=>array(
				'name'=>'button',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->button,$model->title,array('width'=>250)),
			),
                'top_zip'=>array(
				'name'=>'top_zip',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->top_zip,$model->title,array('width'=>250)),
			),
////////////////////////////////////////////////left//////////////////////////////////////////////////////////////
		'left_body'=>array(
				'name'=>'left_body',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'left/'.$model->left_body,$model->title,array('width'=>250)),
			),
		'left_sleeve'=>array(
				'name'=>'left_sleeve',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'left/'.$model->left_sleeve,$model->title,array('width'=>250)),
			),
		'bottom_left_pocket'=>array(
				'name'=>'bottom_left_pocket',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'left/'.$model->bottom_left_pocket,$model->title,array('width'=>250)),
			),
		'left_knit'=>array(
				'name'=>'left_knit',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'left/'.$model->left_knit,$model->title,array('width'=>250)),
			),
		'left_button'=>array(
				'name'=>'left_button',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'left/'.$model->left_button,$model->title,array('width'=>250)),
			),
////////////////////////////////////////////////Right//////////////////////////////////////////////////////////////
		'right_body'=>array(
				'name'=>'right_body',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'right/'.$model->right_body,$model->title,array('width'=>250)),
			),
		'right_sleeve'=>array(
				'name'=>'right_sleeve',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'right/'.$model->right_sleeve,$model->title,array('width'=>250)),
			),
		'bottom_right_pocket'=>array(
				'name'=>'bottom_right_pocket',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'right/'.$model->bottom_right_pocket,$model->title,array('width'=>250)),
			),
		'right_knit'=>array(
				'name'=>'right_knit',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'right/'.$model->right_knit,$model->title,array('width'=>250)),
			),
		'right_button'=>array(
				'name'=>'right_button',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'right/'.$model->right_button,$model->title,array('width'=>250)),
			),
////////////////////////////////////////////////back//////////////////////////////////////////////////////////////
		'back'=>array(
				'name'=>'back',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'back/'.$model->back,$model->title,array('width'=>250)),
			),
		'back_sleeves'=>array(
				'name'=>'back_sleeves',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'back/'.$model->back_sleeves,$model->title,array('width'=>250)),
			),
		'back_knit'=>array(
				'name'=>'back_knit',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'back/'.$model->back_knit,$model->title,array('width'=>250)),
			),
		/*'cuff_left'=>array(
				'name'=>'cuff_left',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->cuff_left,$model->title,array('width'=>250)),
			),
		'cuff_right'=>array(
				'name'=>'cuff_right',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->cuff_right,$model->title,array('width'=>250)),
			),
		/*'top_right_pocket'=>array(
				'name'=>'top_right_pocket',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->top_right_pocket,$model->title,array('width'=>250)),
			),
		'top_left_pocket'=>array(
				'name'=>'top_left_pocket',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->top_left_pocket,$model->title,array('width'=>250)),
			),*/
		/*'bottom_right_pocket'=>array(
				'name'=>'bottom_right_pocket',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->bottom_right_pocket,$model->title,array('width'=>250)),
			),
		'bottom_left_pocket'=>array(
				'name'=>'bottom_left_pocket',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->bottom_left_pocket,$model->title,array('width'=>250)),
			),
		/*'collar'=>array(
				'name'=>'collar',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->collar,$model->title,array('width'=>250)),
			),*/
		
		/*'top_right_patch'=>array(
				'name'=>'top_right_patch',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->top_right_patch,$model->title,array('width'=>250)),
			),
		'top_left_patch'=>array(
				'name'=>'top_left_patch',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->top_left_patch,$model->title,array('width'=>250)),
			),
		'bottom_right_patch'=>array(
				'name'=>'bottom_right_patch',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->bottom_right_patch,$model->title,array('width'=>250)),
			),
		'bottom_left_patch'=>array(
				'name'=>'bottom_left_patch',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->bottom_left_patch,$model->title,array('width'=>250)),
			),
		'hoode'=>array(
				'name'=>'hoode',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->hoode,$model->title,array('width'=>250)),
			),
		'upper_body'=>array(
				'name'=>'upper_body',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->upper_body,$model->title,array('width'=>250)),
			),
		'bottom_body'=>array(
				'name'=>'bottom_body',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->bottom_body,$model->title,array('width'=>250)),
			),
		'right_body'=>array(
				'name'=>'right_body',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->right_body,$model->title,array('width'=>250)),
			),
		'left_body'=>array(
				'name'=>'left_body',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->left_body,$model->title,array('width'=>250)),
			),
		'knit'=>array(
				'name'=>'knit',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->knit,$model->title,array('width'=>250)),
			),
		'inner_lining'=>array(
				'name'=>'inner_lining',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->inner_lining,$model->title,array('width'=>250)),
			),*/
		/*'right_sleeve'=>array(
				'name'=>'right_sleeve',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->right_sleeve,$model->title,array('width'=>250)),
			),
		'left_sleeve'=>array(
				'name'=>'left_sleeve',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.$model->left_sleeve,$model->title,array('width'=>250)),
			),*/
			
		array(
			'name'=>'default',
			'type'=>'raw',
			'value'=>Helper::getStatus($model->default,'yes','no'),
		),
	),
)); 

	$gallery= Helper::getGalleryImages($model->gallery_id);

?>

<ul>
	<?

			//if(! $gallery===null){
	foreach($gallery as $image)
	   {
		  ?>
		  
		  	<li class="span2">
	    		<a href="#" class="thumbnail" rel="tooltip" data-title="<?= $image['name']?>">
	        		<img src="<?= Yii::app()->getBaseUrl(true)?>/gallery/<?= $image['id']?>small.jpg" alt="">
	    		</a>
			</li>
		 
	 <?   }  //} ?>
 </ul>

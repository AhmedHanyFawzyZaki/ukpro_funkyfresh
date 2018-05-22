<?php
$this->breadcrumbs=array(
	'Colors'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Color','url'=>array('index')),
	array('label'=>'Create Color','url'=>array('create')),
	array('label'=>'Update Color','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Color','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Color #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
	//	'id',
		'title',
		'color',	
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
	        		<img src="<?= Yii::app()->getBaseUrl(true)?>/gallery/<?= $image['id']?>small.png" alt="">
	    		</a>
			</li>
		 
	 <?   }  //} ?>
 </ul>
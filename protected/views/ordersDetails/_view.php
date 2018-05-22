<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orders_id')); ?>:</b>
	<?php echo CHtml::encode($data->orders_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_id')); ?>:</b>
	<?php echo CHtml::encode($data->pro_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_id')); ?>:</b>
	<?php echo CHtml::encode($data->cat_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subcat_id')); ?>:</b>
	<?php echo CHtml::encode($data->subcat_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('body')); ?>:</b>
	<?php echo CHtml::encode($data->body); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('collar')); ?>:</b>
	<?php echo CHtml::encode($data->collar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuff_left')); ?>:</b>
	<?php echo CHtml::encode($data->cuff_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuff_right')); ?>:</b>
	<?php echo CHtml::encode($data->cuff_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pocket_bottom_left')); ?>:</b>
	<?php echo CHtml::encode($data->pocket_bottom_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pocket_bottom_right')); ?>:</b>
	<?php echo CHtml::encode($data->pocket_bottom_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('knit')); ?>:</b>
	<?php echo CHtml::encode($data->knit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sleeve_left')); ?>:</b>
	<?php echo CHtml::encode($data->sleeve_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sleeve_right')); ?>:</b>
	<?php echo CHtml::encode($data->sleeve_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buttons')); ?>:</b>
	<?php echo CHtml::encode($data->buttons); ?>
	<br />

	*/ ?>

</div>
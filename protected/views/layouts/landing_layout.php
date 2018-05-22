<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?> </title>
<?php Yii::app()->bootstrap->register(); ?>
 <link href="<?php echo Yii::app()->getBaseUrl(true); ?>/css/style.css" rel="stylesheet">

  <script src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/jquery.elevatezoom.js"></script>


</head>
<body>

<?php echo $content; ?>

	<script>

$('#img_01').elevateZoom({
	gallery:'gal1',
            zoomType: "inner",
            cursor: "crosshair",
            zoomWindowFadeIn: 500,
            zoomWindowFadeOut: 750
               });
			   
			   

//pass the images to Fancybox
$("#img_01").bind("click", function(e) {  
  var ez =   $('#img_01').data('elevateZoom');	
	$.fancybox(ez.getGalleryList());
  return false;
});
</script>




</body>
</html>

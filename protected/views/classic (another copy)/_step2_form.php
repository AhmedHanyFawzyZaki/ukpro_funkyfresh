<h4>Sleeves color</h4>
<h5 class="title8">choose your Sleeves color</h5>

<!-- availabel colors  -->
<div class="colors">
    <?php
// send the type id and subtype id
    $products = Product::model()->Getcolors(1, 1);

    foreach ($products as $product) {

        $color = $product->code;
        $color_code = $product->color;
        $pathleft = Yii::app()->getBaseUrl(true) . '/media/types/classic/classic1/' . $color . '/sleeve-left.png';
        $pathright = Yii::app()->getBaseUrl(true) . '/media/types/classic/classic1/' . $color . '/sleeve-right.png';
        echo CHtml::ajaxLink(
                "", Yii::app()->createUrl('classic/setdata'), array(// ajaxOptions
            'type' => 'POST',
            'beforeSend' => "function( request )
                     {
                       // Set up any pre-sending stuff like initializing progress indicators
                     }",
            'success' => "function( data )
                  {
                    // handle return data
			    document.getElementById('sleeve-left').src='$pathleft';
				document.getElementById('sleeve-right').src='$pathright';
			      				
                  }",
            'data' => array('field' => 'sleeve-left', 'data' => $color)
                ), array(//htmlOptions
            'href' => Yii::app()->createUrl('classic/setdata'),
            'class' => 'btn round',
            'style' => 'background:' . $color_code
                )
        );
    }
    ?>
</div>
<div class="row1">

    <a href="step3" class="btn next" >next</a>
    <a href="index" class="btn bk" >previous</a>



</div>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/>
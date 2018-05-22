<?php
// set the page title
$this->pageTitle = Yii::app()->name . ' - Build jacket';
?>


<?php
Yii::app()->clientScript->registerScript('steps','
    var current_step = 1;
    var total_steps = 10;
    
    function next_step(){
        var next_step = current_step + 1;
        if(next_step <= total_steps){
            $.ajax({
                url : "' . Yii::app()->request->baseUrl . '/classic/load_step/" + next_step ,
                success : function(data){
                    $("#steps_con").html(data);
                    current_step = next_step;
                }
            });
        }
    }
    
    $("body").on("click",".next_bt",function(){
        next_step();
    });
');
?>


<div class="wrapper">
    <h3 class="main-title">Design Process</h3>
    <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/title-shadow.png'/>
    <div class="container">
        <div class="rev-left" id="step_con">
            <h4>body color</h4>
            <h5 class="title8">choose your body color</h5>

            <!-- availabel colors  -->
            <div class="colors">

                <?php
// send the type id and subtype id
                $products = Product::model()->Getcolors(1, 1);

                foreach ($products as $product) {

                    $color = $product->code;
                    $color_code = $product->color;
                    $path = Yii::app()->getBaseUrl(true) . '/media/types/classic/classic1/' . $color . '/body.png';
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
			    document.getElementById('body').src='$path';
			      				
                  }",
                        'data' => array('field' => 'body', 'data' => $color)
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
                <a href="javascript:void(0)" class="btn next next_bt" >next</a>
                <a href="index" class="btn bk prev_bt" >previous</a>
            </div>
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>
        
        <?php echo $this->renderPartial('_jacket', array()); ?>
        
        <div class="rev-button">
            <?php echo $this->renderPartial('_Buybuttons', array()); ?>
        </div>
        <!--end rev-button--> 

    </div>
    <!--end container--> 
</div>
<!--end wrapper--> 

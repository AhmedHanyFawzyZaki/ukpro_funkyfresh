<?php
// set the page title
$this->pageTitle = Yii::app()->name . ' - Saved Jackets';
?>

<div class="wrapper">
    <h3 class="main-title">Saved jackets</h3>
    <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/title-shadow.png'/>

    <div class="container">

<?php echo $this->renderPartial('profile_left', array()); ?>

        <div class="content">


            <!--<div class="filter">
                <span>Filter jackets by :</span>
                <button class="btn active-bt" type="button">all</button>
                <button class="btn" type="button">classic</button>
                <button class="btn" type="button">legancy</button>
                <button class="btn" type="button">group</button>
            </div>
-->
            <?php 
            foreach($jackets as $jacket)
            {
            ?>
            <div class="row saved">
                <div class="user-photo">

                    <div class="my-jacket">
                        <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/captured/<?= $jacket->main_image ?>'/>
                        <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket-shadow.png' class="j-shadow"/>
                    </div><!--end my-jacket-->

                    <h4 class="share">share my jacket:</h4>
                    <a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/fb2.png'/></a>
                    <a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/tw2.png'/></a>
                    <a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/steg2.png'/></a>
                    <a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/p2.png'/></a>
                    <a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/in.png'/></a>
                </div>
                <div class="user-info">
                    <p class="title2"><label>jacket type :</label><?= Category::model()->findByPk($jacket->cat_id)->title; ?> </p>
                    <p class="title2"><label>jacket Sub type :</label><?= Subcategory::model()->findByPk($jacket->subcat_id)->title; ?> </p>
                    <?php  $subcat_of_pro = Subcategory::model()->findByPk($jacket->subcat_id); ?>
                    <p class="title2"><label>price :</label>&pound; <?= $subcat_of_pro->price ?> </p>
                    <br><br><br><br></p>
                    <p>
                        <button class="btn s-btn" onclick="window.location.assign('<?= Yii::app()->request->baseUrl ?>/classic/index/<?= $jacket->id ?>')" type="button">edit design</button>  
                        <?=
                        CHtml::ajaxLink(
                                "delete", Yii::app()->createUrl('/home/DeleteSaved'), array(// ajaxOptions
                                     'type' => 'POST',
                                     //'beforeSend' => "function( request )						 }",
                                     'success' => "function( data )	{ if(data == 1){alert('image deleted'); $(this).parents('.row').hide('slow'); } }",
                                     'data' => array('id' => $jacket->id)
                                ), array(//htmlOptions
                            //'href' => Yii::app()->createUrl( 'classic/savejacket' ),
                            'class' => 'btn s-btn',
                        ));
                        ?>
                    </p>
                    <!--<a class="btn s-btn" href="delete" >delete</a><p class="title2"><label>quantity :</label>1</p>
                    <p class="title2"><label>size :</label>small</p>
                    <p class="title2"><label>total :</label>$200<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/cartdetails" class="more">more details</a></p>-->
                </div><!--end user-info-->
            </div>
            <?
            }
            ?>


            <div class="pagination">
                <?php
                $this->widget('CLinkPager', array(
                    'pages' => $pages,
                    'htmlOptions' => array('class' => ''),
                    'nextPageLabel' => 'next',
                    'prevPageLabel' => 'prev',
                    'lastPageLabel' => 'last',
                    'firstPageLabel' => 'first',
                    'header' => '',
                ))
                ?>
            </div>
        </div><!--end content-->
    </div><!--end container-->

</div><!--end wrapper-->

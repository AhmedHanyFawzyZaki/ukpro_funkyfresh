<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>


<div class="wrapper">
    <div class="slider">

        <div class="carousel slide" id="myCarousel">
            <ol class="carousel-indicators">

                <?php for ($i = 0; $i < count($banners); $i++) { ?>
                    <li class="" data-slide-to="<?php echo $i; ?>" data-target="#myCarousel"></li>
                <?php } ?>
            </ol>
            <div class="carousel-inner">
<?php
$classTemp = 'active';
foreach ($banners as $banner) {
    ?>
                    <div class="item <?= $classTemp?>">
                        <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/banner/<?php echo $banner->image; ?>'/>
                        <div class="carousel-caption">
                            <h4><?php echo $banner->header; ?></h4>
                            <p><?php echo $banner->subheader; ?></p>
                            <a class="btn btn-large" href="<?=Yii::app()->request->baseUrl?>/home/designjacket">customize</a>
                        </div>
                    </div>
                    <?php
                    $classTemp = '';
                }
                ?>
            </div>
            <a data-slide="prev" href="#myCarousel" class="left carousel-control">‹</a>
            <a data-slide="next" href="#myCarousel" class="right carousel-control">›</a>
        </div>
        

    </div><!--end slider-->

    <h3 class="title1">jackets types</h3>

    <div class="row">
        <div class="main-prod">
            <div class="product">
                <div class="p-img">
                    <img src="<?php echo Yii::app()->baseUrl; ?><?=Helper::categoryMainImg('1')?>" width="318" height="194"/>
                </div><!--end p-img-->

                <a href="<?php echo Yii::app()->baseUrl; ?>/home/mysize" class="j-type">Whats<span>My Size</span></a>
                <p class="parag1"><?=Helper::categoryDesc('1')?></p>

                <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/p-shadow.png' class="p-shadow"/>
                <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/classic/1" class="btn btn-large" type="button">Design your jacket</a>
            </div><!--end product-->
        </div><!--main-product-->
        
        <div class="product special">
            <div class="p-img">
                <img src="<?php echo Yii::app()->baseUrl; ?><?=Helper::categoryMainImg('3')?>" width="318" height="194"/>
            </div><!--end p-img-->

            <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/classic/3" class="j-type">Groups<span>Jackets</span></a>
            <p class="parag1"><?=Helper::categoryDesc('3')?></p>
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/p-shadow.png' class="p-shadow"/>
            <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/classic/3" class="btn btn-large" type="button">Design your jacket</a>
        </div><!--end product-->

        <div class="product">
            <div class="p-img">
                <img src="<?php echo Yii::app()->baseUrl; ?><?=Helper::categoryMainImg('2')?>" width="318" height="194"/>
            </div><!--end p-img-->

            <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/classic/2" class="j-type">Design a <span>Jacket</span></a>
            <p class="parag1"><?=Helper::categoryDesc('2')?></p>

            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/p-shadow.png' class="p-shadow"/>
            <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/classic/2" class="btn btn-large" type="button">Design your jacket</a>
        </div><!--end product-->

    </div>
</div><!--end wrapper-->



























<?php if (Yii::app()->user->hasFlash('register-success')) { ?>
    <script>
        $(document).ready(function(e) {
            $('#PopupL').click()
        });
    </script>
    <? } ?> 



    <a   data-target="#myModal" data-toggle="modal" style="display:none" id="PopupL"></a>

    <?php $this->beginWidget('bootstrap.widgets.TbModal', array('id' => 'myModal')); ?>

    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3>New  profile notification</h3>
    </div>

    <div class="modal-body">
        <p>
            Thank you for becoming a registered user at <?= CHtml::encode(Yii::app()->name)?>.<br/>  
            Please check your Email
        </p>
    </div>

    <div class="modal-footer">

        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'label' => 'Close',
            'url' => '#',
            'type' => 'primary',
            'htmlOptions' => array('data-dismiss' => 'modal'),
        ));
        ?>
    </div>

    <?php $this->endWidget(); ?>
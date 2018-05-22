<?php
// set the page title
$this->pageTitle = Yii::app()->name . ' - Shopping Cart';
?>

<div class="wrapper">
    <h3 class="main-title">Your Shopping Cart (<?= count($ids) ?>) Items</h3>
    <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/title-shadow.png'/>
    <div class="container">

        <?php
        if (count($ids) > 0):
            foreach ($ids as $key => $id):
                $pro = TmpProduct::model()->findByPk($id);
                $product = Product::model()->findByPk($pro->product_id);
                ?>
                <div class="row new-row">
                    <div class="shop-left">
                        <div class="my-jacket">
                            <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/profile"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/captured/<?= $pro->main_image ?>'/></a>
                            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/j-sh2.png' class="j-shadow"/>
                        </div><!--end my-jacket-->
                        <h4 class="share">share my jacket:</h4>
                        <div class="sharing">
                            <a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/fb2.png'/></a>
                            <a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/tw2.png'/></a>
                            <a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/steg2.png'/></a>
                            <a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/p2.png'/></a>
                            <a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/in.png'/></a>
                        </div><!--end sharing-->

                    </div><!--end shop-left-->

                    <div class="shop-details">
                        <h4 class="heading"><?= Subcategory::model()->findByPk($pro->subcat_id)->title ?></h4>

                        <?php
                        $subcat_of_pro = Subcategory::model()->findByPk($pro->subcat_id);
                        ?>
                        <p class="title2"><label>price :</label>$<?= $subcat_of_pro->price ?></p>
                        <p class="title2"><label>size :</label><?= Size::model()->findByPk($pro->form_size)->title ?></p>
                        
                        <p class="title2"><label>total :</label>$<?= Subcategory::model()->findByPk($pro->subcat_id)->price ?></p>
                        <button onclick="window.location.assign('<?= Yii::app()->request->baseUrl ?>/classic/index/<?= $pro->id ?>')" class="btn s-btn" type="button">edit jacket</button> 
                        <a href="<?= Yii::app()->request->baseUrl ?>/home/removeCartItem/k/<?= $key ?>" class="btn s-btn">delete from cart</a>
                        <button style="margin-left:0px" onclick="window.location.assign('<?= Yii::app()->request->baseUrl ?>/home/checkout/id/<?= $pro->id ?>/k/<?= $key ?>')" class="btn s-btn" type="button">buy</button> 
                   


                        <!--<p><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/checkout" class="more">Buy</a></p>-->
                    </div><!--end shop-details-->
                </div>
                <?php
            endforeach;
        endif;
        ?>
    </div><!--end container-->

</div><!--end wrapper-->

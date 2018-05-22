<div class="left-menu">

<? $pg_url=Yii::app()->request->requestUri;?>
<div style="max-width: 340px; padding: 8px 0;" class="well">
              <ul class="nav nav-list">
                <li class="nav-header">settings</li>
                <li class="<? if(($pg_url==Yii::app()->request->baseUrl.'/home/profile')){echo 'active';}else{echo '';}?>"><a href="<?php echo Yii::app()->request->baseUrl; ?>/home/profile">my account</a></li>
                <li class="<? if(($pg_url==Yii::app()->request->baseUrl.'/home/settings')){echo 'active';}else{echo '';}?>"><a href="<?php echo Yii::app()->request->baseUrl; ?>/home/settings">account settings</a></li>
                <li class="<? if(($pg_url==Yii::app()->request->baseUrl.'/home/shippingDet')){echo 'active';}else{echo '';}?>"><a href="<?php echo Yii::app()->request->baseUrl; ?>/home/shippingDet">shipping details</a></li>
                <li class="<? if(($pg_url==Yii::app()->request->baseUrl.'/home/billingDet')){echo 'active';}else{echo '';}?>"><a href="<?php echo Yii::app()->request->baseUrl; ?>/home/billingDet">billing details</a></li>
                <li class="<? if(($pg_url==Yii::app()->request->baseUrl.'/home/designjacket')){echo 'active';}else{echo '';}?>"><a href="<?php echo Yii::app()->request->baseUrl; ?>/home/designjacket">Design jacket</a></li>
                <li class="<? if(($pg_url==Yii::app()->request->baseUrl.'/home/cart')){echo 'active';}else{echo '';}?>"><a href="<?php echo Yii::app()->request->baseUrl; ?>/home/cart">shopping cart</a></li>
                <li class="<? if(($pg_url==Yii::app()->request->baseUrl.'/home/savedjackets')){echo 'active';}else{echo '';}?>"><a href="<?php echo Yii::app()->request->baseUrl; ?>/home/savedjackets">saved jackets</a></li>
                <!--<li class="<? if(($pg_url==Yii::app()->request->baseUrl.'/home/myjackets')){echo 'active';}else{echo '';}?>"><a href="<?php echo Yii::app()->request->baseUrl; ?>/home/myjackets">my jackets</a></li>-->
                 <li><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/logout">sign out</a></li>
              </ul>
            </div>

</div><!--end left-menu-->
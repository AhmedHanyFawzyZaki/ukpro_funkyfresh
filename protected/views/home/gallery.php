<?php  // set the page title
$this->pageTitle=Yii::app()->name . ' - Gallery';
?>

<div class="wrapper">
<h3 class="main-title">photo Gallery</h3>

    <div class="container">
        <div class="row">
        <?php 
			$i=0;
			foreach($gallery as $item)
			{
		?>
            	<div class="gallery">
                    <a href="<?php echo Yii::app()->getBaseUrl(true); ?>#myModal<?=$i?>" role="button" data-toggle="modal">
                        <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/frontgallery/<?=$item->image?>'/>
                    </a>
            	</div>
        
            	<div id="myModal<?=$i?>" class="modal hide fade modal-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                
                <div class="gallery-slider">
                    <div class="carousel slide" id="myCarousel<?=$i?>">
                        <div class="carousel-inner">
                        	<? 
								$j=0;
								foreach($gallery as $img)
								{
									if($i==$j)
									{
										$class='item active';
									}
									else
									{
										$class='item';
									}
							?>
                                  <div class="<?=$class?>">
                                    <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/frontgallery/<?=$img->image?>'/>
                                  </div>
                            <?
									$j++;
								}
                            ?>
                        </div>
                        <a data-slide="prev" href="#myCarousel<?=$i?>" class="left carousel-control">‹</a>
                        <a data-slide="next" href="#myCarousel<?=$i?>" class="right carousel-control">›</a>
                    </div>
                </div><!--end gallery-slider-->
            </div>
        <? 
				$i++;
			}
		?>
        </div><!--row-->
    	
        <div class="pagination">
        	<?php $this->widget('CLinkPager', array(
				'pages' => $pages,
				'htmlOptions' =>array('class'=>''),
				'nextPageLabel' => 'next',
				'prevPageLabel' => 'prev',
				'lastPageLabel' => 'last',
				'firstPageLabel' => 'first',
				'header' => '',
			)) ?>
                </div>
    </div><!--end container-->
</div><!--end wrapper-->

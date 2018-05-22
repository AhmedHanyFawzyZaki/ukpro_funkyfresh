<?php
// set the page title
$this->pageTitle = Yii::app()->name . ' - FAQ';
?>

<div class="wrapper">
    <h4 class="ship-title">faq:</h4>


    <?php foreach ($faqs as $faq) { ?>        
        <div class="shipping">
            <p class="question"><?= $faq->question; ?></p>
            <p class="answer"><?= $faq->answer; ?></p>
        </div><!--end shipping-->
    <?php } ?>


    <div class="pagination">
        <?php
        $this->widget('CLinkPager', array(
            'pages' => $pages,
           // 'cssFile' => Yii::app()->theme->baseUrl . "/css/bootstrap.css",
            'firstPageLabel' => '&lt;&lt;',
            'prevPageLabel' => '&lt;',
            'nextPageLabel' => '&gt;',
            'lastPageLabel' => '&gt;&gt;',
            'header' => '',
        ))
        ;
        ?>
    </div>

</div><!--end wrapper-->

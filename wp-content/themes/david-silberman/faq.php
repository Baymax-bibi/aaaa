<?php
/*
Template Name: FAQ Page
*/
?>
<?php $gfid = 1; $gfajax = true; ?>
<?php include("site-header.php"); ?>

<?php include("inner-banner.php"); ?>

<!--Inner Content area Start -->

<div class="inner-content-area">
<div class="inner-content-area-in">
<?php include("pagination-faq.php"); ?>

<!--Inner Content area Left  -->

<div class="inner-content-area-left">

<h1><?php the_title(); ?></h1>


<div class="faq-wrapper ">
<?php if($count_num_faq > 0){
        while($data=mysql_fetch_array($result_faq)){
?>
<div class="faq-wrap"><?php echo $data['faq_question']; ?></div>
<div class="answer-wrap"><?php echo $data['faq_answer']; ?></div>

<?php } echo $pagination; }else{echo '<p>Coming Soon!</p>';}?>

<div class="clear"></div>
<a href="javascript:history.go(-1)" title="Back" class="back-btn" ><i class="icon-caret-left"></i> Back</a>

</div>




</div>

<!--Inner Content area left End  -->

<!--Inner Side Bar Start-->
<?php include("inner-side-bar.php"); ?>


<!--Inner Side Bar End -->
<div class="clear"></div>
</div>
<div class="clear"></div>

</div>
<!--Inner Content area End -->






<?php // include("inner-bottom-banner.php"); ?>
<?php // include("bottom-news-letter.php"); ?>
<?php include("site-footer.php"); ?>
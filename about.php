<?php 
$page_title = 'О компании';
include_once('header-page.php'); ?>
<?php
$header_features_text = 'header-features-text-black';
$arrow = '<img src="img/svg/arrow-prev-black.svg" alt="arrow-prev-black" />';
include_once('./template-parts/swiper-top-block.php')?>
<?php include_once('./template-parts/founder-block.php')?>
<?php
$display_n = 'blog-card-title-about';
 include_once('./template-parts/swiper-bottom-block.php')?>
 <?php include_once('./template-parts/clients.php')?>
<?php include_once('./template-parts/cta.php')?>
<?php include_once('./template-parts/footer.php')?>
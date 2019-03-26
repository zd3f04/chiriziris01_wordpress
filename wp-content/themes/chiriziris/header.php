<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<link href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/jquery.bxslider.min.js">

</script>
<title><?php the_title();?> | <?php bloginfo('name'); ?></title>
<meta name="description" content="Chiriziris（チリヂリズ）公式サイト。最新情報、ライブ情報、音源情報、ヒストリーを紹介しています。">

<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
</head>
<body>

<div id="wrap">

<header>
<!-- <h1><a href="<?php echo get_template_directory_uri(); ?>/http:chiriziris.com">
              Chiriziris Official Website

            </a></h1> -->
<a href="<?php echo get_template_directory_uri(); ?>top"><img src="<?php echo get_template_directory_uri(); ?>/images/chiriziris_logo.png"></a>
              <ul>
<li id="sns-box"><a href="<?php echo get_template_directory_uri(); ?>/https://play.spotify.com/artist/43kKsfG1eZSFW785NtHDYs?play=true&utm_source=open.spotify.com&utm_medium=open" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/snv01.png" alt="Chiriziris spotify"></a></li>
<li  id="sns-box"><a href="<?php echo get_template_directory_uri(); ?>/https://twitter.com/chiriziris" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/snv02.png" alt="Chiriziris twitter"></a></li>
<li  id="sns-box"><a href="<?php echo get_template_directory_uri(); ?>/http://instagram.com/chiriziris" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/snv03.png" alt="Chiriziris instagram"></a></li>
<li id="sns-box"><a href="<?php echo get_template_directory_uri(); ?>/https://www.facebook.com/chiriziris" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/snv04.png" alt="Chiriziris facebook" ></a></li>
<li  id="sns-box"><a href="<?php echo get_template_directory_uri(); ?>/https://www.youtube.com/channel/UCpolcCaJwW6pYHwMWKmvfHg" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/snv05.png" alt="Chiriziris youtube"></a></li>

</ul>
<?php wp_head(); ?>

</header>
 <link href="<?php echo get_template_directory_uri(); ?>/https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >


<div id="page_top"><a href="<?php echo get_template_directory_uri(); ?>/#"></a></div>

 <div class="side_bar">
<div id="sidenavi">
<!-- <h2>Chiriziris<br />
              チリヂリズ</h2> -->

 <nav>
      <?php wp_nav_menu(array("container"=>false)); ?>
    </nav>
</div>
</div>
  <div class="container">
       <div class="contents">
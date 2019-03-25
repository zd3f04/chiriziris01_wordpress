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
<script>
  $(function(){
    $('.bxslider').bxSlider({
    auto: true,
    autoControls: true,
    stopAutoOnClick: true,
    pager: true,
    slideWidth: 600
    });
  });
</script>
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
</head>
<body>

<div id="wrap">

<header>
<!-- <h1><a href="<?php echo get_template_directory_uri(); ?>/http:chiriziris.com">
              Chiriziris Official Website

            </a></h1> -->
<a href="<?php echo get_template_directory_uri(); ?>/index.html"><<img src="<?php echo get_template_directory_uri(); ?>/images/chiriziris_logo.png"></a>
              <ul>
<li id="sns-box"><a href="<?php echo get_template_directory_uri(); ?>/https://play.spotify.com/artist/43kKsfG1eZSFW785NtHDYs?play=true&utm_source=open.spotify.com&utm_medium=open" target="_blank"><<img src="<?php echo get_template_directory_uri(); ?>/images/snv01.png" alt="Chiriziris spotify"></a></li>
<li  id="sns-box"><a href="<?php echo get_template_directory_uri(); ?>/https://twitter.com/chiriziris" target="_blank"><<img src="<?php echo get_template_directory_uri(); ?>/images/snv02.png" alt="Chiriziris twitter"></a></li>
<li  id="sns-box"><a href="<?php echo get_template_directory_uri(); ?>/http://instagram.com/chiriziris" target="_blank"><<img src="<?php echo get_template_directory_uri(); ?>/images/snv03.png" alt="Chiriziris instagram"></a></li>
<li id="sns-box"><a href="<?php echo get_template_directory_uri(); ?>/https://www.facebook.com/chiriziris" target="_blank"><<img src="<?php echo get_template_directory_uri(); ?>/images/snv04.png" alt="Chiriziris facebook" ></a></li>
<li  id="sns-box"><a href="<?php echo get_template_directory_uri(); ?>/https://www.youtube.com/channel/UCpolcCaJwW6pYHwMWKmvfHg" target="_blank"><<img src="<?php echo get_template_directory_uri(); ?>/images/snv05.png" alt="Chiriziris youtube"></a></li>

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
            <h1>News</h1>
    <hr>


    <div class="news_topics">
      <?php if (have_posts()): ?>
         <?php $more = 1; ?>
    <?php while (have_posts()): the_post(); ?>
    <article class="post">
      <div class="news_date">
    <?php echo get_the_date('n/j'); ?></div>

      <div class="news_title">
        <?php the_title(); ?>
              <div class="entry">
        <?php the_content(); ?>
      </div>

      </div>
          <?php endwhile; ?>
    <?php endif; ?>
    <div id="link">
      <?php previous_posts_link(); ?>
      <?php next_posts_link(); ?>
    </div>
    </div>

    <hr>


        </div>
        <!-- /contents -->

    </div>
    <!-- /container -->

</div>
<!-- /wrapp -->
<footer>
    <hr>
  <div id="footer-contents">

  <div id="footer-sitename">
<p>Chiriziris<br />チリヂリズ</p>
</div>
<div  id="footer-menu">
          <ul>
            <li><a href="<?php echo get_template_directory_uri(); ?>/http:chiriziris.com/category/news" class="overline">News</a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/http:chiriziris.com/category/live" class="overline">Live</a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/http:chiriziris.com/biography" class="overline">Biography</a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/http:chiriziris.com/category/discography" class="overline">Discography</a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/http:chiriziris.com/category/movie" class="overline">Movie</a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/http://kakubarhythm.shop-pro.jp" target="_blank" class="overline">Store</a></li>
<li><a href="<?php echo get_template_directory_uri(); ?>/http://kakubarhythm.shop-pro.jp" target="_blank" class="overline">Blog</a></li>
<li><a href="<?php echo get_template_directory_uri(); ?>/http://kakubarhythm.shop-pro.jp" target="_blank" class="overline">Contact</a></li>
          </ul>
        </div>
                <div  id="footer-sns-menu">
          <ul>
            <li><a href="<?php echo get_template_directory_uri(); ?>/https://open.spotify.com/artist/4Yt6N4u5vIpjRhT2O7zsLk" target="_blank" class="overline">Spotify</a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/https://twitter.com/chiriziris" target="_blank" class="overline">Twitter</a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/https://www.youtube.com/watch?v=kVPUS9RE4ho&list=PL552EB1DF23C3E62B" target="_blank" class="overline">YouTube</a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/https://www.facebook/chiriziris" target="_blank" class="overline">Facebook</a></li>

          </ul>
        </div>
        <div  id="footer-snv">
              <ul>
<li id="sns-box"><a href="<?php echo get_template_directory_uri(); ?>/https://play.spotify.com/artist/43kKsfG1eZSFW785NtHDYs?play=true&utm_source=open.spotify.com&utm_medium=open" target="_blank"><<img src="<?php echo get_template_directory_uri(); ?>/images/snv01.png" alt="Chiriziris spotify"></a></li>
<li  id="sns-box"><a href="<?php echo get_template_directory_uri(); ?>/https://twitter.com/chiriziris" target="_blank"><<img src="<?php echo get_template_directory_uri(); ?>/images/snv02.png" alt="Chiriziris twitter"></a></li>
<li  id="sns-box"><a href="<?php echo get_template_directory_uri(); ?>/http://instagram.com/chiriziris" target="_blank"><<img src="<?php echo get_template_directory_uri(); ?>/images/snv03.png" alt="Chiriziris instagram"></a></li>
<li id="sns-box"><a href="<?php echo get_template_directory_uri(); ?>/https://www.facebook.com/chiriziris" target="_blank"><<img src="<?php echo get_template_directory_uri(); ?>/images/snv04.png" alt="Chiriziris facebook" ></a></li>
<li  id="sns-box"><a href="<?php echo get_template_directory_uri(); ?>/https://www.youtube.com/channel/UCpolcCaJwW6pYHwMWKmvfHg" target="_blank"><<img src="<?php echo get_template_directory_uri(); ?>/images/snv05.png" alt="Chiriziris youtube"></a></li>

</ul>
  <p class="niyaniyarecords"><a href="<?php echo get_template_directory_uri(); ?>/https://niyaniyarecords.com/" target="_blank">&copy; niyaniyarecords</a></p>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div id="page-top">

</footer>

</body>
</html>
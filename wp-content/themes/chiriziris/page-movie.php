<?php get_header(); ?>

<script>
jQuery(document).ready(function($){
$(".movie_box").colorbox({
iframe:true,
innerWidth:425,   //幅の指定
innerHeight:344 //高さの指定
});
});
</script>
 <?php if (have_posts()): ?>
 <?php while (have_posts()): the_post(); ?>

 <?php the_content(); ?>


   <?php endwhile; ?>
 <?php endif; ?>
<?php get_footer(); ?>


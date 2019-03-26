<?php get_header(); ?>
<script>
jQuery(function($){
    $('.bxslider').bxSlider({
    auto: true,
    autoControls: true,
    stopAutoOnClick: true,
    pager: true,
    slideWidth: 600
    });
});
</script>
<?php if (have_posts()): ?>
 <?php while (have_posts()): the_post(); ?>

 <?php the_content(); ?>


   <?php endwhile; ?>
 <?php endif; ?>
<?php get_footer(); ?>



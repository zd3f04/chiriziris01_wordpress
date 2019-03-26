

<?php get_header(); ?>
    <div class="news_topics">
      <?php if (have_posts()): ?>
         <?php $more = 1; ?>
    <?php while (have_posts()): the_post(); ?>
    <article class="post">
      <div class="news_title">
           <h1> <?php the_title(); ?></h1>
               <hr>

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
<div id="link">
 <a href="#" >&laquo; back</a>
 <a href="#" >next &raquo;</a>
 </div>
 <?php get_footer(); ?>
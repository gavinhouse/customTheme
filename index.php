<?php
/**
 * Created by PhpStorm.
 * User: Gavin
 * Date: 23/07/2018
 * Time: 15:43
 */
get_header();
?>
<div class="about-header">
    <h2 class="about-title">Home</h2>
</div>
    <div class="main">

      <div class="page-head"></div>
      <div class="left-sidebar"></div>

      <div class="main-content">
        <?php
        if(have_posts()) : while(have_posts()) : the_post();

          get_template_part('content',get_post_format());
        endwhile; ?>
      </div>

      <div class="right-sidebar"><?php get_sidebar(); ?></div>

      <div class="left-foot">
        <ul>
          <li><?php previous_posts_link( 'Newer' ); ?></li>
        </ul>
      </div>
      <div class="page-foot"></div>

      <div class="right-foot">
        <ul>
          <li><?php next_posts_link( 'Older' ); ?></li>
        </ul>
        <?php endif; ?>
      </div>

    </div>

    <?php get_footer(); ?>

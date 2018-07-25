<div class="about-page">
    <div class="about-header">
        <h2 class="about-title"><?php the_title(); ?> Me</h2>
    </div>
    <div class="about-content">
        <?php if (has_post_thumbnail()){
            the_post_thumbnail('single-image');
            echo '<br /><br />';
        } ?>
        <?php the_content(); ?>
    </div>
</div>
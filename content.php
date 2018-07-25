<div class="blog-post">
    <h2 class="blog-post-title"><?php the_title(); ?></h2>
    <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>

    <?php the_excerpt(); ?>

    <form action="<?php the_permalink(); ?>">
        <input class="btn btn-primary" type="submit" value="Read More" />
    </form>

    <hr>

</div><!-- /.blog-post -->
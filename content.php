<div class="blog-post">
    <h2 class="blog-post-title"><?php the_title(); ?></h2>
    <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>

    <?php if ( has_post_thumbnail() ) {?>
        <div class="row">
            <div class="col-md-4">
                <?php	the_post_thumbnail('thumbnail'); ?>
            </div>
            <div class="col-md-6">
                <?php the_excerpt(); ?>
            </div>
        </div>
    <?php } else { ?>
        <?php the_excerpt(); ?>
    <?php } ?>
    <form action="<?php the_permalink(); ?>">
        <input class="btn btn-dark" type="submit" value="Read More →" />
    </form>

    <hr>

</div><!-- /.blog-post -->

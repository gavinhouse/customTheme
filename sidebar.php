
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p><?php the_author_meta('description');?></p>
    </div>
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            <?php wp_get_archives('type=monthly'); ?>
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Other sites</h4>
        <ol class="list-unstyled">
            <li><a href="<?= get_option('github'); ?>">GitHub</a></li>
            <li><a href="<?= get_option('twitter'); ?>">Twitter</a></li>
        </ol>
    </div>

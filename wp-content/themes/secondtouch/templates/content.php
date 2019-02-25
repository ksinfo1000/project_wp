<?php $options = get_option('second-touch'); ?>

<?php  if (!have_posts()) : ?>

    <article id="post-0" class="post no-results not-found">
        <header class="entry-header">
            <h1><?php _e( 'Nothing Found', 'crum' ); ?></h1>
        </header>

        <div class="entry-content">
            <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'crum' ); ?></p>
            <?php get_search_form(); ?>
        </div>


        <header class="entry-header">
            <h2><?php _e('Tags also can be used', 'crum'); ?></h2>
        </header>

        <div class="tags-widget">
            <?php wp_tag_cloud('smallest=10&largest=10&number=30'); ?>
        </div>

    </article><!-- #post-0 -->
    <?php endif; ?>

<?php while (have_posts()) : the_post();
    if (has_post_format('link')) {
        get_template_part('templates/post', 'link');
    } else {
        get_template_part('templates/loop-content');
    }

 endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>

<nav class="page-nav">

    <?php echo crumina_pagination(); ?>

</nav>

<?php endif; ?>

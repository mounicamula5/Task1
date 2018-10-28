<?php
/**
 * @package unite
 */
?>

<article id="post-<?php the_ID(); ?>" class="film-grid col-xs-12 col-sm-2 col-md-4">
    <header class="entry-header page-header">

        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'unite-featured', array( 'class' => 'thumbnail' )); ?></a>

        <h2 class="entry-title animated">
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
            <div class="entry-metas">
                <div class="entry-meta">
                    Country : <?php echo films_get_terms($post->ID, 'country'); ?>
                </div><!-- .entry-meta -->
                <div class="entry-meta">
                    Genres : <?php echo films_get_terms($post->ID, 'genre'); ?>
                </div><!-- .entry-meta -->
                <div class="entry-meta">
                    Release : <?php echo get_field('release_date' ); ?>
                </div><!-- .entry-meta -->
                <div class="entry-meta">
                    Ticket price : <?php echo get_field('ticket_price' ); ?>
                </div><!-- .entry-meta -->
            </div>
        </h2>

    </header><!-- .entry-header -->

</article><!-- #post-## -->

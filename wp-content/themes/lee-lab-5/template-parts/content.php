<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lee_Lab_5
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!--    ch11-6-->
    <?php
    if ( has_post_thumbnail() ) { ?>
        <figure class="featured-image index-image">
            <?php
            the_post_thumbnail('lee-lab-5-index-img');
            ?>
        </figure>
    <?php } ?>

    <div class="post__content">
        <header class="entry-header">
            <?php lee_lab_5_the_category_list(); ?>

            <?php
            if ( is_singular() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;

            if ( 'post' === get_post_type() ) :
                ?>
                <div class="entry-meta">
                    <?php
                    lee_lab_5_posted_on();
                    lee_lab_5_posted_by();
                    ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->

        <?php lee_lab_5_post_thumbnail(); ?>

        <div class="entry-content">
            <?php
                the_excerpt();
            ?>
        </div><!-- .entry-content -->

        <div class="continue-reading">
            <?php
            $read_more_link = sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading', 'lee-lab-5' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            );
            ?>

            <a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
                <?php echo $read_more_link; ?>
            </a>
        </div>


    </div><!-- .post__content -->
</article><!-- #post-<?php the_ID(); ?> -->

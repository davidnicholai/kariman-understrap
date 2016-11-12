<?php
/**
 * @package understrap
 */
?>

<article class="row" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <div class="col-xs-1 offset-xs-1 _nopadding">
    <div class="_article-date-container pull-right">
      <center>
        <table>
            <td style="text-align: center; font-size: 16px; padding-top: 8px"><?php kariman_posted_on_month_year(); ?></td>
          </tr>
          <tr>
            <td style="text-align: center; font-size: 56px; padding-top: 0px"><?php kariman_posted_on_day(); ?></td>
          </tr>
        </table>
      </center>
    </div>
  </div>

  <div class="col-xs-8 _article-container">
    <header class="entry-header">

      <?php the_title( sprintf( '<h2 class="entry-title _story-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

      <?php if ( 'post' == get_post_type() ) : ?>

        <!-- <div class="entry-meta"> -->
          <!-- <?php understrap_posted_on(); ?> -->
        <!-- </div>.entry-meta -->

      <?php endif; ?>

    </header><!-- .entry-header -->

    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

    <div class="entry-content _article-content">

      <?php
        the_excerpt();
      ?>

      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
          'after'  => '</div>',
        ) );
      ?>

    </div><!-- .entry-content -->

    <!-- <footer class="entry-footer"> -->

      <!-- <?php understrap_entry_footer(); ?> -->

    <!-- </footer>.entry-footer -->
  </div>

</article><!-- #post-## -->

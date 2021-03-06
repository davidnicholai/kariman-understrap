<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package understrap
 */
?>
<article class="row" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <div class="hidden-sm-up">
    <hr width=95%>

    <div class="_article-container">
      <header class="entry-header">

        <?php the_title( sprintf( '<h2 class="entry-title _story-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        <?php if ( 'post' == get_post_type() ) : ?>

          <div class="entry-meta">
            <?php understrap_posted_on(); ?>
          </div>

        <?php endif; ?>

      </header>

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
      </div>
    </div>
  </div>

  <div class="hidden-sm-down">
    <div class="col-md-1 offset-md-1 _nopadding">
      <div class="_article-date-container pull-right">
        <center>
          <table>
            <tr>
              <td class="_article-date-td-monthyear"><?php kariman_posted_on_month_year(); ?></td>
            </tr>
            <tr>
              <td class="_article-date-td-day"><?php kariman_posted_on_day(); ?></td>
            </tr>
          </table>
        </center>
      </div>
    </div>

    <div class="col-md-8 _article-container">
      <header class="entry-header">

        <?php the_title( sprintf( '<h2 class="entry-title _story-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

      </header>

      <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

      <div class="entry-content _article-content">

        <?php
          the_excerpt();
        ?>

      </div>
    </div>
  </div>

</article>

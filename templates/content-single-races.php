<?php
while ( have_posts() ) :
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	the_post();
?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php // get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
        <?php
		if ( is_plugin_active( 'cxseries/index.php' ) ) {
		?>
            <div class="cxseries_race_details">
            <?php CXSeries\CXSeriesPlugin\display_race_details( false ); ?>
          </div>
        <?php
		} else {
		?>
          <p>The CX Series plugin is not activated!</p>
        <?php
		}
		?>

        <?php the_content(); ?>
    </div>
    <footer>
        <?php wp_link_pages( [ 'before' => '<nav class="page-nav"><p>' . __( 'Pages:', 'sage' ), 'after' => '</p></nav>' ] ); ?>
    </footer>
    <?php comments_template( '/templates/comments.php' ); ?>
  </article>
<?php endwhile; ?>

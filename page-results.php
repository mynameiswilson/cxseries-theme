<?php
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

while ( have_posts() ) :
	the_post(); ?>
    <?php get_template_part( 'templates/page', 'header' ); ?>
    <?php get_template_part( 'templates/content', 'page' ); ?>

    <?php
	if ( is_plugin_active( 'cxseries/index.php' ) ) {
		CXSeries\CXSeriesPlugin\list_results();
	} else {
	?>
      <p>The CX Series plugin is not activated!</p>
    <?php
	}
	?>

<?php endwhile;

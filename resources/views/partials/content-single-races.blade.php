<?php 	include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>

<article @php(post_class())>
  <header>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    <!--@include('partials/entry-meta')-->
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
    @php(the_content())
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php(comments_template('/partials/comments.blade.php'))
</article>

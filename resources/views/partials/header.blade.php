<header class="banner">
  <div class="container">

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <?php if (get_theme_mod('cxseries_logo')) : ?>
      <div class='site-logo'>
          <a "navbar-brand" href="{{ home_url('/') }}" title="{{ get_bloginfo('name', 'display') }}" rel='home'>
            <img style="max-height: <?php echo get_theme_mod('cxseries_logo_height') ?>px" src='<?php echo esc_url(get_theme_mod('cxseries_logo')); ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'>
          </a>
      </div>
      <h1 class='site-title'><a href='<?php echo esc_url(home_url('/')); ?>' title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' rel='home'><?php bloginfo('name'); ?></a></h1>

    <?php else : ?>
      <hgroup>
          <h1 class='site-title'><a href='<?php echo esc_url(home_url('/')); ?>' title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' rel='home'><?php bloginfo('name'); ?></a></h1>
          <h2 class='site-description'><?php bloginfo('description'); ?></h2>
      </hgroup>
    <?php endif; ?>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav mr-auto']) !!}
    @endif
  </div>
</nav>

</div>
</header>

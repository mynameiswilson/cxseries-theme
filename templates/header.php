<header class="banner">
  <div class="container">
<?php /*    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> */ ?>

    <?php if (get_theme_mod('cxseries_logo')) : ?>
        <div class='site-logo'>
            <a href='<?php echo esc_url(home_url('/')); ?>' title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' rel='home'><img style="max-height: <?php echo get_theme_mod('cxseries_logo_height') ?>px" src='<?php echo esc_url(get_theme_mod('cxseries_logo')); ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'></a>
        </div>
        <h1 class='site-title'><a href='<?php echo esc_url(home_url('/')); ?>' title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' rel='home'><?php bloginfo('name'); ?></a></h1>
            
    <?php else : ?>
        <hgroup>
            <h1 class='site-title'><a href='<?php echo esc_url(home_url('/')); ?>' title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' rel='home'><?php bloginfo('name'); ?></a></h1>
            <h2 class='site-description'><?php bloginfo('description'); ?></h2>
        </hgroup>
    <?php endif; ?>

    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-tabs']);
      endif;
      ?>
    </nav>
  </div>
</header>

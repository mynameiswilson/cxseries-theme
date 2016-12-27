<?php use Roots\Sage\Titles; ?>

<?php if (!is_front_page()) : ?>
<div class="page-header">
  <h1><?php echo Titles\title(); ?></h1>
</div>
<?php endif; ?>

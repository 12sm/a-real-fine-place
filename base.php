<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
<div class="shell container-fluid">

  <!--[if lt IE 7]><div class="alert">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</div><![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="wrap container-fluid" role="document">
    <div class="content row-fluid">
      <div class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </div><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
      <aside class="sidebar <?php echo roots_sidebar_class(); ?>" id="sidebar" role="complementary">
        <?php include roots_sidebar_path(); ?>
      </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

<div class="slider-holder">
				<div class="slider">

 <?php echo render_view(array('id' => 58)); ?>
 
 </div>
<a href="#" class="slider-arr prev">Previous</a>
<a href="#" class="slider-arr next">Next</a>
</div>

  <?php get_template_part('templates/footer'); ?>

</div>
</body>
</html>

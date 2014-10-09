<div role="banner" id="header">
      <a class="brand" href="<?php echo home_url(); ?>/">
        <img src="<?php echo get_bloginfo ( 'url' ); ?>/assets/img/logo.png" alt="" />
      </a>
      <div role="navigation" id="navigation">
      	<a href="#" class="menu-btn"></a>
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => ''));
          endif;
        ?>
      </div>
</div>

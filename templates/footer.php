<footer class="content-info" role="contentinfo" id="footer">
  
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <div class="footer-nav">
  <? if (of_get_option('show_links')){ ;?>
  	<ul>
  		<?php if (of_get_option('facebook_url')){ ;?><li><a href="<?php echo of_get_option('facebook_url', 'no entry'); ?>" target="_blank" class="facebook">Facebook</a></li><?php } ?>
  		<?php if (of_get_option('twitter_url')){ ;?><li><a href="<?php echo of_get_option('twitter_url', 'no entry'); ?>" target="_blank" class="twitter">Twitter</a></li><?php } ?>  			<?php if (of_get_option('youtube_url')){ ;?><li><a href="<?php echo of_get_option('youtube_url', 'no entry'); ?>" target="_blank" class="youtube">Youtube</a></li><?php } ?>
  		<?php if (of_get_option('other_url')){ ;?><li><a href="<?php echo of_get_option('other_url', 'no entry'); ?>" target="_blank" class="other"><?php echo of_get_option('other_network_name', 'no entry'); ?></a></li><?php } ?>
  	</ul>
  <?php } ?>
  <?php
     if (has_nav_menu('social_navigation')) :
       wp_nav_menu(array('theme_location' => 'social_navigation', 'menu_class' => 'nav'));
     endif;
  ?>
  </div>
    <div id="credits">
  	<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>  |  <a href="http://12southmusic.com/" target="_blank">built by 12SM</a></p>
  </div>
  </div>
</footer>

<?php wp_footer(); ?>

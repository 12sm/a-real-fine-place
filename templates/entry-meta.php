<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style" addthis:url="<?php echo bloginfo('url'); ?><?php the_permalink(); ?>" addthis:title="<?php printf( esc_attr__( '%s', THEMENAME ), the_title_attribute( 'echo=0' ) ); ?>">
<a class="addthis_button_facebook_like" fb:like:layout="button_count" fb:like:href="<?php echo bloginfo('url'); ?><?php the_permalink(); ?>"></a>
<a class="addthis_button_tweet" tw:url="<?php echo bloginfo('url'); ?><?php the_permalink(); ?>"></a>
<a class="addthis_button_pinterest_pinit"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-522809fc5a657fd3"></script>
<!-- AddThis Button END -->
<p class="byline author vcard posted-by">Posted <?php echo __('by', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author_meta( 'first_name' ); ?></a> on <time class="updated" datetime="<?php echo get_the_time('c'); ?>" pubdate><?php echo get_the_date(); ?></time></p>

<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
<header>
  	<div class="tag">
<?php
foreach((get_the_category()) as $category) {
	echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a> ';
}
?>
  	</div>
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php get_template_part('templates/entry-meta'); ?>
    
    <a href="<?php the_permalink(); ?>">
	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail('blog-thumb');
	}  ?>   
    </a>
  </header>
  <div class="entry">
    <?php the_content(); ?>
  </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
  <div class="post-comments">
	 <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'arealfineplace'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    				
  </div>
  </article>
<?php endwhile; ?>

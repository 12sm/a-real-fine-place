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
  <div class="post-comments">
	<span><em><a href="<?php the_permalink(); ?>">LEAVE A COMMENT - </a><a href="<?php the_permalink(); ?>#disqus_thread" class="disqus"></a></em></span>				
  </div>
</article>

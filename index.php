<?php get_header(); ?>

<section class="container-fluid">
    <div class="row">
        <main class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<?php $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; ?> 
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<div class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</div>

		</article>

	<?php 
		endwhile; 
		custom_pagination("","",$paged);  wp_reset_postdata(); 
	?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
		</main>

<?php get_sidebar(); ?>
	</div>
</section>

<?php get_footer(); ?>

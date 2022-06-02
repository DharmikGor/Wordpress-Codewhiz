archive.php
<?php get_header();?>

<?php the_archive_title('<h3 class="page-title">', '</h3>'); ?>
<?php the_archive_description('<div class="taxonomy-description">', '</div>'); ?>





<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<a href="<?php the_permalink(); ?>"><?php the_title('<h4>', '</h4>' ); ?></a>

<?php endwhile; else : ?>
	<p><?php esc_html_e('Sorry, no posts matched your criteria.') ?></p>
<?php endif; ?>























































<!-- <h1><?php echo single_cat_title();?></h1>

<?php if( have_posts() ): while( have_posts() ): the_post();?>


	<div class="card mb-3">
		
		<div class="card-body d-flex justify-content-center align-items-center">


			<?php if(has_post_thumbnail()):?>

				<img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail mr-4">

			<?php endif;?>

			
			<div class="blog-content">

				<h3><?php the_title();?></h3>
				<?php the_excerpt();?>

				<a href="<?php the_permalink();?>" class="btn btn-success">Read more</a>

			</div>


		</div>

	</div>


<?php endwhile; else: endif;?> -->



<?php get_footer();?>
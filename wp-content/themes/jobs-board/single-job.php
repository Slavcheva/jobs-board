<?php get_header(); ?>

    <ul class="jobs-listing">
		<?php if ( have_posts() ): ?>

			<?php while ( have_posts() ) : the_post(); ?>
                This is job
				<?php get_template_part( 'template-part/single-post', 'item' ) ?>

			<?php endwhile; ?>
			<?php var_dump( get_the_ID() ); ?>
			<?php board_update_job_views_count( get_the_ID() ); ?>
		<?php endif; ?>
    </ul>
<?php get_footer(); ?>
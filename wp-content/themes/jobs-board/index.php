<?php get_header(); ?>

    <ul class="jobs-listing">
		<?php if ( have_posts() ): ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-part/job', 'item' ) ?>

			<?php endwhile; ?>

<!--            <div style="text-align:center;">-->
<!--				--><?php //posts_nav_link( ' · ', 'previous page', 'next page' ); ?>
<!--            </div>-->
			<?php posts_nav_link(); ?>

		<?php endif; ?>
    </ul>
<?php get_footer(); ?>
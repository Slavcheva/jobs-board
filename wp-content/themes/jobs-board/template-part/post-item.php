<li class="job-card">
    <div class="job-primary">
        <h2 class="job-title"><a href="<?php get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="job-meta">
            <a class="meta-company" href="#"><?php echo the_category()?></a>
            <span class="meta-date">Posted on <?php the_date(); ?></span>
        </div>
    </div>
    <div class="job-logo">

        <div class="job-logo-box">
			<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} else {
				echo '<img src="https://i.imgur.com/ZbILm3F.png" alt="">';
			}
			?>
        </div>
    </div>
</li>
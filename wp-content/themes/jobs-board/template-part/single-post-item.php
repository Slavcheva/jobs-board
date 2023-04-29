<li class="job-card">
    <div class="job-primary">
        <h1 class="job-title-single"><a href="<?php get_the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="job-meta">
            <a class="meta-company" href="#"><?php echo the_category()?></a>
            <span class="meta-date">Posted on <?php the_date(); ?></span>
        </div>
        <div class="job-body">
            <p>Our band of superheroes are looking for a self-driven, highly organised individual who will join the team in creating our most important products.</p>
            <p>Location is unimportant, as long as you are available, enthusiastic, committed, passionate, and know your stuff.</p>
            <p>For this role, we need a superhero who will take on the challenges of working in one of the leading WordPress companies, enhancing our website, products, and services, backed by a quality team of pros.</p>

            <h3>Responsibilities</h3>
            <p>You’ll be part of a development team working on our flagship products. It’s going to be epic!</p>
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
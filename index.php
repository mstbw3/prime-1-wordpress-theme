<?php get_header(); ?>

<div class="primary-content">
	<main>
		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post() ?>
				<article class="page-content">
					<header>
						<h1 class="title"><?php the_title() ?></h1>
					</header>
					<div class="entry">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>
	</main>
</div>

<?php get_footer(); ?>
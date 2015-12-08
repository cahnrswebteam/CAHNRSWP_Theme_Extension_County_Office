<?php get_header(); ?>

	<main class="spine-blank-template">

		<?php get_template_part( 'parts/headers' ); ?>
		<?php get_template_part( 'parts/featured-images' ); ?>

		<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

      <?php if ( class_exists( 'CWP_Pagebuilder' ) && has_shortcode( get_the_content(), 'row' ) ) : ?>

			<div id="page-<?php the_ID(); ?>" <?php post_class( 'builder-layout' ); ?>>

				<?php get_template_part( 'articles/page-content' ); ?>

			</div>

			<?php else : ?>

			<section class="row single gutter pad-ends">

				<div class="column one">

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php get_template_part( 'articles/page-content' ); ?>

					</article>

				</div><!--/column-->

			</section>

			<?php endif; ?>

		<?php endwhile; endif; ?>

		<?php get_template_part( 'parts/footers' ); ?>

	</main>

<?php get_footer(); ?>
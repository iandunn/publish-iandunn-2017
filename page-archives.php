<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Publish
 * @since Publish 1.0
 */

$archive_tags = get_terms();

get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header><!-- .entry-header -->

						<div id="site-archives" class="entry-content">
							<p>
								Jump to:
								<a href="#by-month">Months</a> |
								<a href="#by-category">Categories</a> |
								<a href="#by-tag">Tags</a>
							</p>

							<a name="by-month"></a>
							<div id="site-archives-months" class="site-archive-type">
								<h3>
									Months:
									<a href="#content">&uparrow;</a>
								</h3>

								<ul>
									<?php wp_get_archives( 'type=monthly' ); ?>
								</ul>
							</div>

							<a name="by-category"></a>
							<div id="site-archives-categories" class="site-archive-type">
								<h3>
									Categories:
									<a href="#content">&uparrow;</a>
								</h3>

								<ul>
									<?php wp_list_categories( array( 'title_li' => '' ) ); ?>
								</ul>
							</div>

							<a name="by-tag"></a>
							<div id="site-archives-tags" class="site-archive-type">
								<h3>
									Tags:
									<a href="#content">&uparrow;</a>
								</h3>

								<ul>
									<?php foreach ( $archive_tags as $tag ) : ?>
										<li>
											<a href="<?php echo esc_url( get_term_link( $tag ) ); ?>">
												<?php echo esc_html( $tag->name ); ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>

							<p>
								<a href="#content">Jump to top &uparrow;</a>
							</p>

						</div><!-- .entry-content -->

						<?php edit_post_link( __( 'Edit', 'publish' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
					</article><!-- #post-<?php the_ID(); ?> -->

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
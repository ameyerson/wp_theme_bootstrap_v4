				<article class="page no-results not-found">
					<div class="container">
						<header class="entry">
							<h1><?php _e( 'Nothing Found', 'laces-theme' ) ?></h1>
						</header>

						<?php if ( is_search() ) { ?>

							<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'laces-theme' ); ?></p>
							

						<?php } else { ?>

							<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'laces-theme' ); ?></p>

						<?php } ?>

						<?php get_search_form(); ?>

					</div>
				</article>
				<div id="projects-sidebar" class="sidebar fivecol last clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'projects' ) ) : ?>

						<?php dynamic_sidebar( 'projects' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->

						<div class="alert alert-help">
							<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
						</div>

					<?php endif; ?>

				</div>
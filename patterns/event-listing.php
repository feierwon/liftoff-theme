<?php
/**
 * Title: Event Listing
 * Slug: trajectory/event-listing
 * Categories: trajectory
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|md"}}}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md)">
	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading">Upcoming Events</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"backgroundColor":"secondary","style":{"spacing":{"padding":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm","left":"var:preset|spacing|sm","right":"var:preset|spacing|sm"},"margin":{"bottom":"1rem"}}}} -->
	<div class="wp-block-group has-secondary-background-color has-background" style="margin-bottom:1rem;padding-top:var(--wp--preset--spacing--sm);padding-bottom:var(--wp--preset--spacing--sm);padding-left:var(--wp--preset--spacing--sm);padding-right:var(--wp--preset--spacing--sm)">
		<!-- wp:columns {"isStackedOnMobile":true} -->
		<div class="wp-block-columns is-stacked-on-mobile">
			<!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%">
				<!-- wp:paragraph {"fontSize":"2xl","style":{"typography":{"fontWeight":"700"}}} -->
				<p class="has-2-xl-font-size" style="font-weight:700">MAR 25</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"80%"} -->
			<div class="wp-block-column" style="flex-basis:80%">
				<!-- wp:heading {"level":3,"fontSize":"lg"} -->
				<h3 class="wp-block-heading has-lg-font-size">Event Title</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"sm"} -->
				<p class="has-sm-font-size">6:00 PM · Location · Brief description of what this event is about.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

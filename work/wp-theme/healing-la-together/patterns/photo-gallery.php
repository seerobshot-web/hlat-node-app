<?php
/**
 * Title: Programs in Action (Photo Gallery)
 * Slug: hlat/photo-gallery
 * Categories: hlat-sections, featured
 * Description: A dark navy 4-photo band of real outreach photos — Eat Manna, Healing Bridges, and Mercy Seat in action.
 */

$hlat_photos = array(
	array(
		'src' => esc_url( get_theme_file_uri( '/assets/media/photos/eat-manna-pantry-1.jpg' ) ),
		'alt' => 'Eat Manna Food Pantry distribution day',
	),
	array(
		'src' => esc_url( get_theme_file_uri( '/assets/media/photos/healing-bridges-1.jpg' ) ),
		'alt' => 'Healing Bridges outreach and Narcan training',
	),
	array(
		'src' => esc_url( get_theme_file_uri( '/assets/media/photos/mercy-seat-know-your-rights.jpg' ) ),
		'alt' => 'Mercy Seat Know Your Rights community event',
	),
	array(
		'src' => esc_url( get_theme_file_uri( '/assets/media/photos/humanity-heroes-1.jpg' ) ),
		'alt' => 'Humanity Heroes partnership at a resource fair',
	),
);
?>
<!-- wp:group {"align":"full","backgroundColor":"navy-deep","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-navy-deep-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"80rem"}} -->
<div class="wp-block-group">

<!-- wp:paragraph {"align":"center","textColor":"gold","style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.22em"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
<p class="has-text-align-center has-gold-color has-text-color" style="margin-bottom:1.5rem">Programs in action</p>
<!-- /wp:paragraph -->

<!-- wp:gallery {"columns":4,"imageCrop":true,"linkTo":"none","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<figure class="wp-block-gallery has-nested-images columns-4 is-cropped">
<?php foreach ( $hlat_photos as $photo ) : ?>
<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $photo['src'] ); ?>" alt="<?php echo esc_attr( $photo['alt'] ); ?>"/></figure>
<!-- /wp:image -->
<?php endforeach; ?>
</figure>
<!-- /wp:gallery -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

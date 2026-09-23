<?php
/**
 * Title: Media + Text Split
 * Slug: hlat/media-text-split
 * Categories: hlat-sections, featured
 * Description: A 50/50 layout pairing an image (swap for a video if you prefer) with a headline, copy, and a button. Good for services or program detail pages.
 * Keywords: media, text, split, image, video
 * Block Types: core/media-text
 */

$hlat_placeholder = esc_url( get_theme_file_uri( '/assets/media/photos/eat-manna-4.jpg' ) );
?>
<!-- wp:media-text {"mediaId":0,"mediaLink":"","mediaType":"image","mediaWidth":50,"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"background"} -->
<div class="wp-block-media-text alignwide has-media-on-the-left is-stacked-on-mobile has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30);grid-template-columns:50% auto">
<figure class="wp-block-media-text__media"><img src="<?php echo $hlat_placeholder; ?>" alt="Volunteers at Eat Manna Food Pantry preparing groceries for distribution" style="object-fit:cover;height:100%;width:100%"/></figure>
<div class="wp-block-media-text__content">

<!-- wp:paragraph {"textColor":"gold-muted","style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.22em"}}} -->
<p class="has-gold-muted-color has-text-color">Get involved</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontFamily":"heading","style":{"typography":{"fontSize":"2.25rem","fontWeight":"600"}}} -->
<h2 class="wp-block-heading has-heading-font-family">Eat Manna Food Pantry</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"navy-muted","style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.7"}}} -->
<p class="has-navy-muted-color has-text-color">778,178 lbs of food distributed across 76 distribution days in 2025 — bringing love and light to the table so families can prepare healthy meals inside their own homes. Swap this photo for a new one any time from the block toolbar.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"navy","textColor":"white"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-navy-background-color has-text-color has-background wp-element-button" href="#">Learn More</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
</div>
<!-- /wp:media-text -->

<?php
/**
 * Title: Feature Grid
 * Slug: hlat/feature-grid
 * Categories: hlat-sections, featured
 * Description: A three-column feature grid with rounded images, headings, and supporting text. Swap the placeholder images for your own photos.
 * Keywords: features, grid, columns
 * Block Types: core/columns
 */

$hlat_img_food     = esc_url( get_theme_file_uri( '/assets/media/photos/eat-manna-pantry-1.jpg' ) );
$hlat_img_recovery = esc_url( get_theme_file_uri( '/assets/media/photos/healing-bridges-1.jpg' ) );
$hlat_img_advocacy = esc_url( get_theme_file_uri( '/assets/media/photos/mercy-seat-1.jpg' ) );
?>
<!-- wp:group {"align":"full","backgroundColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"80rem"}} -->
<div class="wp-block-group">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"36rem"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
<!-- wp:paragraph {"align":"center","textColor":"gold-muted","style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.22em"}}} -->
<p class="has-text-align-center has-gold-muted-color has-text-color">What we do</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"fontFamily":"heading","style":{"typography":{"fontSize":"2.25rem","fontWeight":"600"}}} -->
<h2 class="wp-block-heading has-text-align-center has-heading-font-family">Three Ways We Show Up</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns">

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"width":"96px","height":"96px","scale":"cover","style":{"border":{"radius":"9999px"}},"align":"center"} -->
<figure class="wp-block-image aligncenter is-resized"><img src="<?php echo $hlat_img_food; ?>" alt="Eat Manna Food Pantry volunteers distributing groceries" style="border-radius:9999px;object-fit:cover;width:96px;height:96px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"fontFamily":"heading","style":{"typography":{"fontSize":"1.5rem","fontWeight":"600"}}} -->
<h3 class="wp-block-heading has-text-align-center has-heading-font-family">Food Justice</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"navy-muted","style":{"typography":{"fontSize":"0.875rem"}}} -->
<p class="has-text-align-center has-navy-muted-color has-text-color">Weekly pantry access, TAP card enrollment, and resources so families can put a healthy meal on the table.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"width":"96px","height":"96px","scale":"cover","style":{"border":{"radius":"9999px"}},"align":"center"} -->
<figure class="wp-block-image aligncenter is-resized"><img src="<?php echo $hlat_img_recovery; ?>" alt="Healing Bridges recovery outreach" style="border-radius:9999px;object-fit:cover;width:96px;height:96px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"fontFamily":"heading","style":{"typography":{"fontSize":"1.5rem","fontWeight":"600"}}} -->
<h3 class="wp-block-heading has-text-align-center has-heading-font-family">Recovery Support</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"navy-muted","style":{"typography":{"fontSize":"0.875rem"}}} -->
<p class="has-text-align-center has-navy-muted-color has-text-color">Bridging gaps in substance-recovery care with life-first values and a path to a new story.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"width":"96px","height":"96px","scale":"cover","style":{"border":{"radius":"9999px"}},"align":"center"} -->
<figure class="wp-block-image aligncenter is-resized"><img src="<?php echo $hlat_img_advocacy; ?>" alt="Mercy Seat Immigration and Advocacy community event" style="border-radius:9999px;object-fit:cover;width:96px;height:96px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"fontFamily":"heading","style":{"typography":{"fontSize":"1.5rem","fontWeight":"600"}}} -->
<h3 class="wp-block-heading has-text-align-center has-heading-font-family">Advocacy &amp; Support</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"navy-muted","style":{"typography":{"fontSize":"0.875rem"}}} -->
<p class="has-text-align-center has-navy-muted-color has-text-color">Training and community support helping new arrivals find their footing and their place in Los Angeles.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

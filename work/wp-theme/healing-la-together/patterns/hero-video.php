<?php
/**
 * Title: Hero (Video Background)
 * Slug: hlat/hero-video
 * Categories: hlat-sections, featured
 * Description: Full-width hero with the Eat Manna outreach video as a background, headline, sub-headline, and two call-to-action buttons. Swap the video from the cover block's toolbar any time.
 * Keywords: hero, video, banner
 * Block Types: core/cover
 */

$hlat_hero_video = esc_url( get_theme_file_uri( '/assets/media/eat-manna-1.mp4' ) );
$hlat_donate_url  = 'https://givebutter.com/helpingLAtogether';
?>
<!-- wp:cover {"url":"<?php echo $hlat_hero_video; ?>","id":0,"backgroundType":"video","hasParallax":true,"dimRatio":60,"overlayColor":"navy-darkest","minHeight":560,"minHeightUnit":"px","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30);min-height:560px">
<span aria-hidden="true" class="wp-block-cover__background has-navy-darkest-background-color has-background-dim-60 has-background-dim"></span>
<video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo $hlat_hero_video; ?>" data-object-fit="cover"></video>
<div class="wp-block-cover__inner-container">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"48rem"}} -->
<div class="wp-block-group">

<!-- wp:paragraph {"textColor":"gold","align":"center","style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.22em"}}} -->
<p class="has-text-align-center has-gold-color has-text-color">Healing Los Angeles Together</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"textColor":"white","fontFamily":"heading","style":{"typography":{"fontSize":"3.75rem","fontWeight":"600","lineHeight":"1.05"}}} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-heading-font-family">Bringing Love &amp; Light to Every Corner of L.A.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"white","style":{"typography":{"fontSize":"1rem","lineHeight":"1.7"},"color":{"text":"#ffffffcc"}},"fontFamily":"body"} -->
<p class="has-text-align-center has-white-color has-text-color has-body-font-family" style="color:#ffffffcc">Food justice, recovery support, and advocacy for the families and neighbors who need it most — powered by community, faith, and people who refuse to look away.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"gold","textColor":"navy-text","style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.16em"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-navy-text-color has-gold-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( $hlat_donate_url ); ?>" target="_blank" rel="noopener">Donate Now</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"white","className":"is-style-outline","style":{"border":{"color":"#ffffff80","width":"1px"},"typography":{"fontSize":"0.625rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.16em"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="#programs" style="border-color:#ffffff80;border-width:1px">See Our Programs</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

</div>
</div>
<!-- /wp:cover -->

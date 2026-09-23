<?php
/**
 * Title: Donate CTA
 * Slug: hlat/donate-cta
 * Categories: hlat-sections, call-to-action
 * Description: "Your Investment Brings Healing" donation call-to-action — forwards to Givebutter (https://givebutter.com/helpingLAtogether).
 */

$hlat_donate_url = 'https://givebutter.com/helpingLAtogether';
?>
<!-- wp:group {"align":"full","backgroundColor":"navy-deep","textColor":"white","anchor":"donate","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-navy-deep-background-color has-text-color has-background" id="donate" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"42rem"}} -->
<div class="wp-block-group">

<!-- wp:paragraph {"align":"center","textColor":"gold","style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.22em"}}} -->
<p class="has-text-align-center has-gold-color has-text-color">Make an impact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"fontFamily":"heading","style":{"typography":{"fontSize":"2.5rem","fontWeight":"600"}}} -->
<h2 class="wp-block-heading has-text-align-center has-heading-font-family">Your Investment Brings Healing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.7"},"color":{"text":"#ffffffbf"}}} -->
<p class="has-text-align-center" style="color:#ffffffbf">By partnering with HLAT, your gift helps fill the gaps where systems fail. Be a piece of the puzzle that brings healing, love, and light to those who are lost in Los Angeles.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"gold","textColor":"navy-text","width":50} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link has-navy-text-color has-gold-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( $hlat_donate_url ); ?>" target="_blank" rel="noopener">Donate on Givebutter</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.75rem"},"color":{"text":"#ffffff80"}}} -->
<p class="has-text-align-center" style="color:#ffffff80">Secure giving hosted by Givebutter — givebutter.com/helpingLAtogether</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

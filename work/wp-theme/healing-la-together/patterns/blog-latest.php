<?php
/**
 * Title: Latest Stories (Blog Query)
 * Slug: hlat/blog-latest
 * Categories: hlat-sections, query
 * Description: "Latest Stories" — a live Query Loop of the 3 most recent posts, styled to match the site cards.
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"80rem"}} -->
<div class="wp-block-group">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"36rem"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
<!-- wp:paragraph {"align":"center","textColor":"gold-muted","style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.22em"}}} -->
<p class="has-text-align-center has-gold-muted-color has-text-color">From our blog</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center","level":2,"fontFamily":"heading","style":{"typography":{"fontSize":"3rem","fontWeight":"600"}}} -->
<h2 class="wp-block-heading has-text-align-center has-heading-font-family">Latest Stories</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false}} -->
<div class="wp-block-query">
<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->

<!-- wp:group {"backgroundColor":"white","style":{"border":{"top":{"color":"var:preset|color|navy-text","width":"4px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"shadow":"0 12px 30px rgba(18,48,74,0.08)"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-top-color:var(--wp--preset--color--navy-text);border-top-width:4px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"top":"calc(-1 * var(--wp--preset--spacing--40))","left":"calc(-1 * var(--wp--preset--spacing--40))","right":"calc(-1 * var(--wp--preset--spacing--40))","bottom":"var:preset|spacing|30"}}},"height":"12rem"} /-->
<!-- wp:post-terms {"term":"category","textColor":"gold-muted","style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.18em"}}} /-->
<!-- wp:post-title {"level":3,"isLink":true,"fontFamily":"heading","style":{"typography":{"fontSize":"1.5rem","fontWeight":"600"}}} /-->
<!-- wp:post-excerpt {"excerptLength":25,"textColor":"navy-muted","style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.7"}}} /-->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"navy","textColor":"white"} --><div class="wp-block-button"><a class="wp-block-button__link has-white-color has-navy-background-color has-text-color has-background wp-element-button">Read More</a></div><!-- /wp:button --></div><!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","textColor":"navy-muted"} -->
<p class="has-text-align-center has-navy-muted-color has-text-color">No posts found. Check back soon for stories from the community.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

</div>
<!-- /wp:query -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"navy","textColor":"white"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-navy-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>">View All Posts</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

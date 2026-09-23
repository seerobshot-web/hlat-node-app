<?php
/**
 * Healing Los Angeles Together — FSE Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'HLAT_VERSION', '3.0.0' );
define( 'HLAT_DONATE_URL', 'https://givebutter.com/helpingLAtogether' );
define( 'HLAT_INSTAGRAM_URL', 'https://www.instagram.com/healinglosangelestogether' );
define( 'HLAT_FACEBOOK_URL', 'https://www.facebook.com/people/Healing-Los-Angeles-Together/61551437022876/' );

/**
 * Theme Setup
 */
function hlat_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 40,
		'width'       => 40,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );

	add_image_size( 'hlat-card', 600, 400, true );

	add_editor_style( 'assets/css/custom.css' );

	register_nav_menus( array(
		'primary' => __( 'Primary Navigation (Home / About / Programs ▾ / Blog / Donate)', 'hlat' ),
		'footer'  => __( 'Footer Quick Links', 'hlat' ),
		'legal'   => __( 'Footer Legal (Privacy Policy / Terms of Use)', 'hlat' ),
	) );
}
add_action( 'after_setup_theme', 'hlat_theme_setup' );

/**
 * On theme activation, create the three Programs sub-pages (if they don't
 * already exist) so the Primary Navigation's "Programs" item has real,
 * linkable children out of the box — Eat Manna Food Pantry, Healing
 * Bridges, Mercy Seat Immigration & Advocacy — plus Privacy Policy and
 * Terms of Use for the footer.
 */
function hlat_create_default_pages() {
	$pages = array(
		'eat-manna-food-pantry'          => 'Eat Manna Food Pantry',
		'healing-bridges'                => 'Healing Bridges',
		'mercy-seat-immigration-advocacy' => 'Mercy Seat Immigration & Advocacy',
		'privacy-policy'                 => 'Privacy Policy',
		'terms-of-use'                   => 'Terms of Use',
	);
	foreach ( $pages as $slug => $title ) {
		if ( null === get_page_by_path( $slug ) ) {
			wp_insert_post( array(
				'post_title'   => $title,
				'post_name'    => $slug,
				'post_type'    => 'page',
				'post_status'  => 'draft',
				'post_content' => '<!-- wp:paragraph --><p>Add content for ' . esc_html( $title ) . '.</p><!-- /wp:paragraph -->',
			) );
		}
	}
}
add_action( 'after_switch_theme', 'hlat_create_default_pages' );

/**
 * Enqueue Styles and Scripts
 */
function hlat_enqueue_assets() {
	wp_enqueue_style(
		'hlat-google-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'hlat-custom',
		get_theme_file_uri( '/assets/css/custom.css' ),
		array(),
		HLAT_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'hlat_enqueue_assets' );

/**
 * Register block pattern categories
 */
function hlat_register_pattern_categories() {
	register_block_pattern_category( 'hlat-sections', array(
		'label' => __( 'HLAT Sections', 'hlat' ),
	) );
}
add_action( 'init', 'hlat_register_pattern_categories' );

/**
 * Replace lightweight tokens ([hlat_year], [hlat_site_name]) inside rendered
 * block content — used by the footer template part's copyright line.
 */
function hlat_replace_tokens( $block_content, $block ) {
	if ( strpos( $block_content, '[hlat_year]' ) !== false ) {
		$block_content = str_replace( '[hlat_year]', esc_html( gmdate( 'Y' ) ), $block_content );
	}
	if ( strpos( $block_content, '[hlat_site_name]' ) !== false ) {
		$block_content = str_replace( '[hlat_site_name]', esc_html( get_bloginfo( 'name' ) ), $block_content );
	}
	return $block_content;
}
add_filter( 'render_block', 'hlat_replace_tokens', 10, 2 );

/**
 * Custom Comment Callback (kept for parity with the previous theme)
 */
function hlat_comment_callback( $comment, $args, $depth ) {
	$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
	?>
	<<?php echo esc_attr( $tag ); ?> id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
		<div style="display:flex;gap:1rem;">
			<div><?php echo get_avatar( $comment, 48, '', '', array( 'class' => 'rounded-full' ) ); ?></div>
			<div>
				<div style="display:flex;align-items:center;gap:0.75rem;">
					<span style="font-weight:600;"><?php comment_author(); ?></span>
					<time datetime="<?php echo esc_attr( get_comment_date( 'c' ) ); ?>">
						<?php echo esc_html( get_comment_date() ); ?> at <?php echo esc_html( get_comment_time() ); ?>
					</time>
				</div>
				<?php if ( '0' === $comment->comment_approved ) : ?>
					<p><em>Your comment is awaiting moderation.</em></p>
				<?php endif; ?>
				<div><?php comment_text(); ?></div>
				<div>
					<?php
					comment_reply_link( array_merge( $args, array(
						'depth'     => $depth,
						'max_depth' => $args['max_depth'],
					) ) );
					?>
				</div>
			</div>
		</div>
	<?php
}

/**
 * Excerpt length + more string
 */
function hlat_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'hlat_excerpt_length' );

function hlat_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'hlat_excerpt_more' );

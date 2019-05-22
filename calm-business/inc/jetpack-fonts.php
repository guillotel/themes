<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => 'monospace, monospace' ),
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'b,
		strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'bolder' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd,
		samp',
		array(
			array( 'property' => 'font-family', 'value' => 'monospace, monospace' ),
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '80%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'sub,
		sup',
		array(
			array( 'property' => 'font-size', 'value' => '75%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input,
		optgroup,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => '100%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'::-webkit-file-upload-button',
		array(
			array( 'property' => 'font', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.button,
		button,
		.entry .entry-content .wp-block-file,
		.entry .entry-content .wp-block-file .wp-block-file__button,
		input,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		optgroup,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'table',
		array(
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'th',
		array(
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#cancel-comment-reply-link,
		.comment-metadata,
		.comment-reply-link,
		.discussion-meta-info,
		.entry-footer,
		.entry-meta',
		array(
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.author-description .author-link,
		.comment-author .fn,
		.comments-title,
		.error-404 .page-title,
		.main-navigation,
		.no-comments,
		.not-found .page-title,
		.page-description,
		.page-links,
		.pagination .nav-links,
		.post-navigation .post-title,
		.site-info,
		.site-title,
		.sticky-post,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		img:after',
		array(
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.author-description .author-link,
		.comment-author .fn,
		.comments-title,
		.error-404 .page-title,
		.main-navigation,
		.no-comments,
		.not-found .page-title,
		.page-description,
		.pagination .nav-links,
		.post-navigation .post-title,
		.site-title,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '1.6875em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '2.25em' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title,
		.error-404 .page-title,
		.has-larger-font-size,
		.not-found .page-title,
		h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.125em' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comments-title,
		.has-large-font-size,
		.has-regular-font-size,
		h3',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-author .fn,
		.main-navigation,
		.nav-links,
		.no-comments,
		.page-description,
		.page-title,
		.site-description,
		.site-title,
		h2.author-title,
		h4,
		p.author-bio',
		array(
			array( 'property' => 'font-size', 'value' => '0.88889em' ),
		),
		array(
			'only screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '0.71111em' ),
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '0.71111em' ),
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text,
		blockquote cite,
		.entry .entry-content .wp-block-audio figcaption,
		.entry .entry-content .wp-block-video figcaption,
		.entry .entry-content .wp-block-image figcaption,
		.entry .entry-content .wp-block-gallery .blocks-gallery-image figcaption,
		.entry .entry-content .wp-block-gallery .blocks-gallery-item figcaption,
		.entry .entry-content .wp-block-verse,
		.entry .entry-content .wp-block-pullquote cite,
		.entry .entry-content .wp-block-quote cite',
		array(
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_links li,
		.widget_jp_blogs_i_follow li,
		.widget_rss_links li.widget_archive ul li,
		.widget_archive ul li,
		.widget_categories ul li,
		.widget_meta ul li,
		.widget_nav_menu ul li,
		.widget_pages ul li,
		.widget_recent_comments ul li,
		.widget_recent_entries ul li,
		.widget_rss ul li,
		.entry .entry-content .wp-block-archives li,
		.entry .entry-content .wp-block-categories li,
		.entry .entry-content .wp-block-latest-posts li',
		array(
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-main #infinite-handle span button',
		array(
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry div.sharedaddy h3.sd-title,
		.entry h3.sd-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry #jp-relatedposts h3.jp-relatedposts-headline',
		array(
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry #jp-relatedposts h3.jp-relatedposts-headline em',
		array(
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry #jp-relatedposts .jp-relatedposts-items .jp-relatedposts-post,
		.entry #jp-relatedposts .jp-relatedposts-items-visual h4.jp-relatedposts-post-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry #jp-relatedposts .jp-relatedposts-items .jp-relatedposts-post .jp-relatedposts-post-context,
		.entry #jp-relatedposts .jp-relatedposts-items .jp-relatedposts-post .jp-relatedposts-post-date',
		array(
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_authors > ul > li > a',
		array(
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_eu_cookie_law_widget #eu-cookie-law',
		array(
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_rss_links li',
		array(
			array( 'property' => 'font-family', 'value' => '"Poppins", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-block-jetpack-mailchimp #wp-block-jetpack-mailchimp_consent-text',
		array(
			array( 'property' => 'font-size', 'value' => '0.71111em' ),
		)
	);

	return $category_rules;
} );
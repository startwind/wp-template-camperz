<?php

function custom_story_query() {
	$args = array(
		'post_type' => 'post',
		'category_name' => 'story',
		'posts_per_page' => 10,
		'order' => 'DESC',
		'orderby' => 'date'
	);

	$query = new WP_Query($args);

	if ($query->have_posts()) {
		$output = '<div class="story-posts">';
		while ($query->have_posts()) {
			$query->the_post();
			$output .= '<div class="story-post">';
			$output .= '<h2>' . get_the_title() . '</h2>';
			$output .= '<div class="excerpt">' . get_the_excerpt() . '</div>';
			$output .= '<div class="date">' . get_the_date() . '</div>';
			$output .= '</div>';
		}
		$output .= '</div>';
		wp_reset_postdata();
	} else {
		$output = '<p>No posts found in the "story" category.</p>';
	}

	return $output;
}
add_shortcode('story_posts', 'custom_story_query');

<?php

/**
 * @author Papa Amadou abdoulaye Ba
 * this function will return the list of a given taxonomy wrapped around  a tags
 * @param $postID the id of the post type (films)
 * @param $term the name of the taxonomy
 *
 * @return string
 */
function films_get_terms( $postID, $term ){
	$terms_list = wp_get_post_terms($postID, $term);
	$output = '';
	$i      = 0;

	foreach( $terms_list as $term ){
		$i++;
		if( $i > 1 ){ $output .= ' '; }
		$output .= '<a class="tag" href="' . get_term_link( $term ) . '">'. $term->name .'</a>';
	}
	return $output;
}
/*
 * @author Papa Amadou Abdoulaye Ba
 * the following funciton created a shortcode that can be used on the widget to display 5 last article
 */
function last_films() {
	$html = "";

	$my_query = new WP_Query( [ 'post_type' => 'films', 'posts_per_page' => 5] );

	if( $my_query->have_posts() ) {
		while( $my_query->have_posts() ) {
			$my_query->the_post();
			$html   .= '<div class="shortcode-list-films">';
			$html   .= "<a href=\"" . get_permalink() . "\" class=\"button\">".get_the_post_thumbnail()." <strong>" . get_the_title() . " </strong></a>";
			$html   .= '</div>';
		}
	}

	wp_reset_postdata();
	return $html;
}
add_shortcode( 'last-films', 'last_films' );
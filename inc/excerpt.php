<?php


function header_excerpt(){
	$excerpt = get_the_content();
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$the_str = TagliaStringa($excerpt, 550);
	return $the_str;


}
function last_news_excerpt(){
	$excerpt = get_the_content();
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$the_str = TagliaStringa($excerpt,  70);
	return $the_str;
}

function box_excerpt(){
	$excerpt = get_the_content();
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$the_str = TagliaStringa($excerpt,  120);
	return $the_str;
}

function box_little_excerpt(){
	$excerpt = get_the_content();
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$the_str = TagliaStringa($excerpt, 60);
	return $the_str;
}








<?php
//Post category shortcode
function category_post_shortcode($atts){
	extract( shortcode_atts( array(
		'title' => '',
		'link' => '',
		'category' => '',
	), $atts, 'category_post' ) );

    $q = new WP_Query(
        array( 'category' => $category, 'posts_per_page' => '3', 'post_type' => 'post')
        );
$list = '<div class="latest_from_category"><h2 class="latest_frm_cat_title">'.$title.'</h2> <a href="'.$link.'" class="latest_more_link">more</a>';

while($q->have_posts()) : $q->the_post();
    //get the ID of your post in the loop
    // $id = get_the_ID();

    // $post_excerpt = get_post_meta($id, 'post_excerpt', true);
    $cmb2_meta = get_post_meta(get_the_ID(), 'category-text', true);
	$post_thumbnail= get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
    $list .= '
		<div class="single_cate_post floatleft">
			'.$post_thumbnail.'
			<h3>'.get_the_title().'</h3>
			<p>'.$cmb2_meta.'</p>
			<a href="'.get_permalink().'" class="readmore">Read More</a>
		</div>
	';
endwhile;
$list.= '</div>';
wp_reset_query();
return $list;
}
add_shortcode('category_post', 'category_post_shortcode');
//Custom post with texonomy
function texonomy_post_shortcode($atts){
	extract( shortcode_atts( array(
		'title' => '',
		'link' => '',
		'category' => '',
	), $atts, 'texonomy_post' ) );

    $q = new WP_Query(
        array( 'category' => $category, 'posts_per_page' => '6', 'post_type' => 'gallery')
        );
$list = '<div class="gallery_left">
     <h2 class="gallery_title">'.$title.'</h2>
     <a href="'.$link.'" class="gallery_more_link">more</a>';

while($q->have_posts()) : $q->the_post();

	$post_thumbnail= get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
    $list .= '

    '.$post_thumbnail.'


	';
endwhile;
$list.= '</div>';
wp_reset_query();
return $list;
}
add_shortcode('texonomy_post', 'texonomy_post_shortcode');


//Widget shortcode register   
function widget_shortcode($atts){
	extract( shortcode_atts( array(
		'title' => '',
		'category' => '',
	), $atts, 'widget_desk' ) );

    $q = new WP_Query(
        array( 'category' => $category, 'posts_per_page' => '3', 'post_type' => 'post')
        );
$list = '<div class="from_the_desk">
     <h2 class="from_the_desk_title">'.$title.'</h2>';

while($q->have_posts()) : $q->the_post();

    $cmb2_excerpt = get_post_meta(get_the_ID(), 'category-text', true);
    $list .= '


    <div class="single_from_the_desk">
         <h3><a href="'.get_permalink().'">'.get_the_title().'</a></h3>
         <p>'.$cmb2_excerpt.'</p>
         <p class="post_meta"><a href="">Read More</a>'.get_the_date().'</p>
    </div>

	';
endwhile;
$list.= '</div>';
wp_reset_query();
return $list;
}
add_shortcode('widget_desk', 'widget_shortcode');
add_filter('widget_text', 'do_shortcode');




?>

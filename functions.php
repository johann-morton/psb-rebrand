<?php

add_theme_support('post-thumbnails');

function register_my_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu')
        )
    );
}

add_action('init', 'register_my_menus');

function the_categories($count = null, $asLinks = false)
{
	$categories = array();
	
	foreach((get_the_category()) as $category)
	{
		if ($category->cat_name != 'All Posts')
		{
			$c = '';
			
			if ($asLinks)
			{
				$c .= '<a href="'.get_category_link($category).'">';
			}
			
    		$c .= $category->cat_name;
			
			if ($asLinks)
			{
				$c .= '</a>';
			}
			
			$categories[] = $c;
		}
	}
	
	if ($count !== null)
	{
		$categories = array_slice($categories, 0, $count);
	}
	
	echo implode(', ', $categories);
}

function trim_text($text, $max_length, $suffix = '...')
{
    if (strlen($text) > $max_length)
    {
        $offset = ($max_length - strlen($suffix)) - strlen($text);
        $text = substr($text, 0, strrpos($text, ' ', $offset)).$suffix;
    }
    
    return $text;
}

function ps_the_posts_pagination($args)
{
	$pagination = get_the_posts_pagination($args); 
	$pagination = str_replace('<a class="next', '<a rel="next" class="next', $pagination);
	$pagination = str_replace('<a class="prev', '<a rel="prev" class="prev', $pagination);
	
	echo $pagination;
}

function ps_get_title()
{
	global $post;
	global $cat;
	
	$title = '';
	
	if (is_category())
	{
		$title = single_cat_title('', false).' | ';
	}
	else if (is_single())
	{
		$title = get_the_title($post).' | ';
	}
	
	$title .= 'Paymentsense Blog';
	
	if (get_query_var('paged'))
	{
		$title .= ' Page '.get_query_var('paged');
	}
	
	return $title;
}

function ps_add_custom_admin_style()
{
	echo '<style>
    	body.wp-admin > b
    	{
      		display: none;
    	}
	</style>';
}

add_action('admin_head', 'ps_add_custom_admin_style');

function filter_cancel_comment_reply_link( $formatted_link, $link, $text )
{
	if(strpos($link, "/blog") !== 0)
	{
		$formatted_link = str_replace($link, '/blog'.$link, $formatted_link);
	}
	
    return $formatted_link; 
}; 

add_filter( 'cancel_comment_reply_link', 'filter_cancel_comment_reply_link', 10, 3 );

/*

function fb_opengraph() {
    global $post;
 
    if(is_single()) {
        if(has_post_thumbnail($post->ID)) {
            $img_src = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'medium');
        } else {
            $img_src = get_stylesheet_directory_uri() . '/img/paymentsense-logo.svg';
        }
        if($excerpt = $post->post_excerpt) {
            $excerpt = strip_tags($post->post_excerpt);
            $excerpt = str_replace("", "'", $excerpt);
        } else {
            $excerpt = get_bloginfo('description');
        }
        ?>
 
    <meta property="og:title" content="<?php echo the_title(); ?>"/>
    <meta property="og:description" content="<?php echo $excerpt; ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
     <meta property="og:image" content="<?php echo $img_src; ?>"/> 
 
<?php
    } else {
        return;
    }
}

add_action('wp_head', 'fb_opengraph', 5);

*/

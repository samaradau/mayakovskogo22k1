<?php
get_header();
?>

<?php
$recent_posts_array = get_posts(array(
    'numberposts' => 5,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  => '',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
));

foreach ($recent_posts_array as $recent_post_single) {
    setup_postdata($recent_post_single);  
    echo "<a href='" . get_permalink() . "'>" . get_the_title() . "</a><br>";
}

wp_reset_postdata();

get_footer(); 
?>
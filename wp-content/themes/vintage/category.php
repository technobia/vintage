<?php
/**
 * Created by PhpStorm.
 * User: kanguyen
 * Date: 11/23/16
 * Time: 4:36 PM
 */

get_header();?>

<div style="background-color: white">
<?php

$categories = get_the_category_by_ID($cat);
$agrCategory = array('category' => $cat);
$postsCategory = get_posts($agrCategory);

var_dump($categories);?>
</div>

<?php get_footer(); ?>
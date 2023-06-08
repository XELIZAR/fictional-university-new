<?php

get_header();

while(have_posts()) {
    the_post(); ?>
    <h2><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
<?php }
?>

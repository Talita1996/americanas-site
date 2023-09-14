<?php

$args_query = array(
    'post_type' => 'faq',
    'category_name' => $args['categoria'],
    'posts_per_page ' => -1
);

$query = new WP_Query($args_query);

?>

<?php if ($query->have_posts()): ?>
    <?php while ($query->have_posts()) : $query->the_post(); 
        the_title(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php /* echo $args['icon']; 
echo $args['title']; 
echo $args['subtitle']; 
echo $args['categoria']; */?>
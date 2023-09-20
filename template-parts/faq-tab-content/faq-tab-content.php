<?php

$args_query = array(
    'post_type' => 'faq',
    'category_name' => $args['categoria'],
    'posts_per_page ' => -1
);

$query = new WP_Query($args_query);

?>

<?php if ($query->have_posts()): ?>
    <div class="accordion accordion-flush" id="accordion">
        <?php $first = 0; ?>

        <?php while ($query->have_posts()):
            $query->the_post(); ?>
            <div class="accordion-item my-1">
                <h2 class="accordion-header" id="heading-<?php echo $first; ?>">
                    <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $first; ?>"
                        aria-expanded="true" aria-controls="collapse-<?php echo $first; ?>">
                        <?php the_title(); ?>
                    </button>
                </h2>
                <div id="collapse-<?php echo $first; ?>" class="accordion-collapse collapse" aria-labelledby="heading-<?php echo $first; ?>"
                    data-bs-parent="#accordion">
                    <div class="accordion-body">
                    <?php the_content(); ?>
                    </div>
                </div>

            </div>
            <?php $first++; ?>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php /* echo $args['icon']; 
echo $args['title']; 
echo $args['subtitle']; 
echo $args['categoria']; */?>
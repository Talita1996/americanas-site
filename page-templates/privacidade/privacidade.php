<div class="wrap">

    <?php $img = get_stylesheet_directory_uri() . "/assets/img/privacidade-hero.jpg"; ?>

    <?php get_template_part('/template-parts/hero/hero', null, array('titulo' => 'política de privacidade', 'subtitulo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquet sodales.', 'img' => $img)); ?>

    <div class="container my-6">
        <?php the_title('<h1 class="d-none">', '</h1>'); ?>
        <?php the_content(); ?>
    </div>
</div>
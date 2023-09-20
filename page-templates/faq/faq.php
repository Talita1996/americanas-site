<?php $img = get_stylesheet_directory_uri() . "/assets/img/faq-hero.jpg"; ?>

<section class="wrap">
    <?php get_template_part('/template-parts/hero/hero', null, array('titulo' => 'ficou com alguma dúvida?', 'img' => $img, 'subtitulo' => 'Aqui, nós respondemos as principais perguntas que você pode ter.')); ?>
</section>

<section id="tab-options" class="container py-4 py-xxl-6 px-0">
    <nav>
        <div class="nav nav-tabs mb-4 mb-xl-0" id="nav-tab" role="tablist">
            <?php $first = 0; ?>
            <?php foreach ($args['tabs_titles'] as $tab) { ?>
                <?php $tab['first'] = $first ?>
                <?php get_template_part('template-parts/faq-tab-title/faq-tab-title', null, $tab); ?>
                <?php $first++; ?>
            <?php } ?>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <?php $first = 0; ?>
        <?php foreach ($args['tabs_titles'] as $tab) { ?>
            <?php $tab['first'] = $first ?>
            <div class="tab-pane fade<?php echo $first == 0 ? ' show active' : '' ?>" id="<?php echo $tab['id']; ?>"
                role="tabpanel" aria-labelledby="<?php echo $tab['id']; ?>-tab" tabindex="0">
                <?php get_template_part('template-parts/faq-tab-content/faq-tab-content', null, $tab); ?>
            </div>
            <?php $first++; ?>
        <?php } ?>
    </div>
</section>
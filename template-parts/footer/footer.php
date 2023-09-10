<footer class="bg-dark bg-text-dark text-bg-dark">
    <div class="container pt-4 px-2 px-md-0">
        <div class="cols-wrap d-flex flex-column flex-md-row pb-2">
            <div class="footer-1">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo-rodape.svg' ?>" />

                <div class="py-2 d-flex gap-2 align-items-start">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/acom-white.svg' ?>"
                        style="width: 17px;" />
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/acom-empresa-white.svg' ?>"
                        style="width: 40px;" />
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/suba-white.svg' ?>"
                        style="width: 44px;" />
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/shop-white.svg' ?>"
                        style="width: 24px;" />
                </div>
            </div>

            <div class="footer-2">
                <a class="text-white d-block d-md-none text-decoration-none fw-bold collapse-icon position-relative"
                    data-bs-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                    Quem somos
                </a>
                <p class="text-white d-none d-md-block fw-bold">Quem somos</p>
                <div class="collapse" id="collapse-2">
                    <?php dynamic_sidebar('footer-col-1'); ?>
                </div>
            </div>
            <div class="footer-3">
                <a class="text-white d-block d-md-none text-decoration-none fw-bold collapse-icon position-relative"
                    data-bs-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                    Soluções
                </a>
                <p class="text-white d-none d-md-block fw-bold">Soluções</p>
                <div class="collapse" id="collapse-3">
                    <?php dynamic_sidebar('footer-col-2'); ?>
                </div>
            </div>
            <div class="footer-4">
                <a class="text-white d-block d-md-none text-decoration-none fw-bold collapse-icon position-relative"
                    data-bs-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                    Como vender
                </a>
                <p class="text-white d-none d-md-block fw-bold">Como vender</p>
                <div class="collapse" id="collapse-4">
                    <?php dynamic_sidebar('footer-col-3'); ?>
                </div>
            </div>

            <div class="d-none d-md-block">
                <p class="text-white fw-bold">Redes Sociais</p>
                <div class="social-media d-flex gap-2">
                    <figure>
                        <img decoding="async"
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/instagram.svg" alt="">
                    </figure>

                    <figure>
                        <img decoding="async" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/youtube.svg"
                            alt="">
                    </figure>

                    <figure>
                        <img decoding="async" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/facebook.svg"
                            alt="">
                    </figure>

                    <figure>
                        <img decoding="async" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/linkedin.svg"
                            alt="">
                    </figure>

                    <figure>
                        <img decoding="async" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/telegram.svg"
                            alt="">
                    </figure>
                </div>

                <div class="is-layout-flex wp-container-14 wp-block-columns is-not-stacked-on-mobile">
                    <div class="is-layout-flow wp-block-column">
                        <figure class="wp-block-image size-large">
                            <img decoding="async"
                                src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo-google-play.svg"
                                alt="">
                        </figure>
                    </div>

                    <div class="is-layout-flow wp-block-column">
                        <figure class="wp-block-image size-large">
                            <img decoding="async"
                                src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo-app-store.svg" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="mt-3 d-block d-md-none">
                <p class="text-white fw-bold">Redes Sociais</p>
                <div class="social-media d-flex gap-2">
                    <figure>
                        <img decoding="async"
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/instagram.svg" alt="">
                    </figure>

                    <figure>
                        <img decoding="async" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/youtube.svg"
                            alt="">
                    </figure>

                    <figure>
                        <img decoding="async" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/facebook.svg"
                            alt="">
                    </figure>

                    <figure>
                        <img decoding="async" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/linkedin.svg"
                            alt="">
                    </figure>

                    <figure>
                        <img decoding="async" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/telegram.svg"
                            alt="">
                    </figure>
                </div>

                <div class="is-layout-flex wp-container-14 wp-block-columns is-not-stacked-on-mobile">
                    <div class="is-layout-flow wp-block-column">
                        <figure class="wp-block-image size-large">
                            <img decoding="async"
                                src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo-google-play.svg"
                                alt="">
                        </figure>
                    </div>

                    <div class="is-layout-flow wp-block-column">
                        <figure class="wp-block-image size-large">
                            <img decoding="async"
                                src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo-app-store.svg" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-footer py-2">
            <p class="text-white"><b>Americanas S.A.</b> © 2023 Todos os direitos reservados.</p>
            <p class="text-white m-0">CNPJ: 00.776.574/0006-60 / Inscrição Estadual: 492.513.778.117 / Endereço: Rua
                Sacadura Cabral, 102 - Rio de Janeiro, RJ - 20081-902</p>
        </div>
    </div>
</footer>
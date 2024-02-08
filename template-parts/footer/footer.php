<footer class="py-5">
    <div class="container">
        <div class="row pb-2 flex-column flex-md-row">
            <div class="col me-4">
                <img width="100%" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo.svg' ?>" />

                <div class="py-3 d-flex justify-content-between">
                    <a href="#" target="_blank"><img
                            src="<?php echo get_stylesheet_directory_uri() . '/assets/img/acom-white.svg' ?>"
                            width="14" /></a>
                    <a href="#" target="_blank"><img
                            src="<?php echo get_stylesheet_directory_uri() . '/assets/img/suba-white.svg' ?>"
                            width="36" /></a>
                    <a href="#" target="_blank"><img
                            src="<?php echo get_stylesheet_directory_uri() . '/assets/img/shop-white.svg' ?>"
                            width="25" /></a>
                </div>
            </div>

            <div class="col d-flex justify-content-md-center">
                <div>
                    <p class="text-white">quem somos</p>
                    <?php dynamic_sidebar('footer-col-1'); ?>
                </div>
            </div>

            <div class="col d-flex justify-content-md-center">
                <div>
                    <p class="text-white">como vender</p>
                    <?php dynamic_sidebar('footer-col-2'); ?>
                </div>
            </div>
            <div class="col d-flex justify-content-md-center">
                <div>
                    <p class="text-white">aprenda</p>
                    <?php dynamic_sidebar('footer-col-3'); ?>
                </div>
            </div>

            <div class="col">
                <p class="text-white m-0">redes sociais</p>
                <div class="social-media d-flex gap-2 py-2">
                    <figure>
                        <a href="https://www.instagram.com/americanasmarketplace/" target="_blank">
                            <img decoding="async"
                                src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/instagram.svg" alt="">
                        </a>
                    </figure>

                    <figure>
                        <a href="https://www.youtube.com/americanasmarketplace" target="_blank">
                            <img decoding="async"
                                src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/youtube.svg" alt="">
                        </a>
                    </figure>

                    <figure>
                        <a href="https://www.facebook.com/AmericanasMarketplace/" target="_blank">
                            <img decoding="async"
                                src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/facebook.svg" alt="">
                        </a>
                    </figure>

                    <figure>
                        <a href="https://www.linkedin.com/company/americanasmarketplace/?originalSubdomain=br"
                            target="_blank">
                            <img decoding="async"
                                src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/linkedin.svg" alt="">
                        </a>
                    </figure>

                    <figure>
                        <a href="https://t.me/americanasmarketplace" target="_blank">
                            <img decoding="async"
                                src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/telegram.svg" alt="">
                        </a>
                    </figure>
                </div>

                <div class="is-layout-flex wp-container-14 wp-block-columns is-not-stacked-on-mobile">
                    <div class="is-layout-flow wp-block-column">
                        <figure class="wp-block-image size-large">
                            <a href="https://play.google.com/store/apps/details?id=com.b2wdigital.bonmarketplace&hl=pt_BR&gl=US"
                                target="_blank">
                                <img decoding="async"
                                    src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo-google-play.svg"
                                    alt="">
                            </a>
                        </figure>
                    </div>

                    <div class="is-layout-flow wp-block-column">
                        <figure class="wp-block-image size-large">
                            <a href="https://apps.apple.com/br/app/b2w-marketplace/id1189319909#?platform=iphone"
                                target="_blank">
                                <img decoding="async"
                                    src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo-app-store.svg"
                                    alt="">
                            </a>
                        </figure>
                    </div>
                </div>
            </div>

        </div>
        <div class="copy-footer pt-2">
            <p class="text-white"><b>Americanas S.A.</b> ©
                <?php echo date("Y"); ?> Todos os direitos reservados.
            </p>
            <p class="text-white m-0">CNPJ: 00.776.574/0006-60 / Inscrição Estadual: 492.513.778.117 / Endereço: Rua
                Sacadura Cabral, 102 - Rio de Janeiro, RJ - 20081-902</p>
        </div>
    </div>
</footer>
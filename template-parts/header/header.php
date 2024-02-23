<header class="bg-secondary d-md-flex align-items-md-center fixed-top">
    <nav class="navbar navbar-expand-lg sticky-top container">
        <div class="container-fluid">

            <?php echo the_custom_logo(); ?>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_nav_menu(
                    array(
                        'container' => '',
                        'theme_location' => 'header-menu',
                        'menu_class' => 'navbar-nav justify-content-end align-items-md-center flex-grow-1 pe-md-3'
                    )
                );
                ?>

                <a class="btn btn-primary cta fw-bold mt-1 mt-xl-0" id="dropdownMenuButton1"
                    href="https://portal.americanasmarketplace.com.br/v3/registre-se?epar=bo_br_st_go_ib_site_cta_quero_vender_link">quero
                    vender</a>
            </div>

            <button class="btn btn-link d-block d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
                aria-controls="staticBackdrop">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hamb.svg" />
            </button>

            <div class="offcanvas offcanvas-top d-block d-md-none" data-bs-backdrop="true" tabindex="-1" id="staticBackdrop"
                aria-labelledby="staticBackdropLabel">
                <div class="offcanvas-header py-3">
                    <div class="offcanvas-title" id="staticBackdropLabel"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-red.svg" /></div>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0 text-center">
                    <div>
                        <?php wp_nav_menu(
                            array(
                                'container' => '',
                                'theme_location' => 'header-menu',
                                'menu_class' => 'navbar-nav justify-content-end align-items-md-center flex-grow-1 pe-md-3'
                            )
                        );
                        ?>

                        <a class="btn btn-primary" id="dropdownMenuButton1"
                            href="https://portal.americanasmarketplace.com.br/v3/registre-se?epar=bo_br_st_go_ib_site_cta_quero_vender_link">quero
                            vender</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<header class="fixed-top" id="main-header">
    <nav class="navbar navbar-expand-lg p-0">
        <div class="container">

            <div class="logo-wrapper d-flex">
                <a href="<?php echo home_url(); ?>" class="custom-logo-link d-none d-md-block" rel="home">
                    <img class="logo-white" width="2951" height="313"
                        src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo_menu_fixo.png" alt=""
                        decoding="async" />
                </a>

                <a href="<?php echo home_url(); ?>" class="custom-logo-link d-md-none" rel="home">
                    <img class="logo-white" width="2951" height="313"
                        src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo_menu_fixo_mobile.png" alt=""
                        decoding="async" />
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#headerNavbar"
                aria-controls="headerNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse py-3 py-md-0" id="headerNavbar">
                <?php wp_nav_menu(
                    array(
                        'container' => '',
                        'theme_location' => 'header-menu',
                        'menu_class' => 'navbar-nav justify-content-end align-items-md-center flex-grow-1 pe-xl-3'
                    )
                );
                ?>

                <a class="btn btn-primary cta fw-bold mt-1 mt-xl-0" id="dropdownMenuButton1"
                    href="https://portal.americanasmarketplace.com.br/v3/registre-se?epar=rs_blg_cte_bm_menu_blog">quero
                    vender</a>

            </div>
        </div>
    </nav>
</header>
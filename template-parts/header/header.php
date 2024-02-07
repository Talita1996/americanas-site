<header class="bg-secondary d-md-flex align-items-md-center fixed-top border-0">
    <nav class="navbar navbar-expand-lg sticky-top container">
        <div class="container-fluid">

            <?php echo the_custom_logo(); ?>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
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
                    href="https://portal.americanasmarketplace.com.br/v3/registre-se?epar=rs_blg_cte_bm_menu_blog">quero
                    vender</a>
            </div>
        </div>
    </nav>
</header>
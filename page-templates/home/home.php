<div id="home-carousel-hero" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators d-none d-md-block text-center">
        <button type="button" data-bs-target="#home-carousel-hero" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#home-carousel-hero" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#home-carousel-hero" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <?php get_template_part('/template-parts/hero/hero', null, array('titulo' => 'venda seus produtos na americanas', 'img' => get_stylesheet_directory_uri() . '/assets/img/hero1.jpg', 'subtitulo' => 'Anuncie roupas, acessórios, brinquedos, peças automotivas e mais!')); ?>
        </div>
        <div class="carousel-item">
            <?php get_template_part('/template-parts/hero/hero', null, array('titulo' => 'amplie seu alcance e aumente suas vendas', 'img' => get_stylesheet_directory_uri() . '/assets/img/hero2.jpg', 'subtitulo' => 'Conte com a Americanas pra potencializar sua operação e chegar mais longe!')); ?>
        </div>
        <div class="carousel-item">
            <?php get_template_part('/template-parts/hero/hero', null, array('titulo' => 'venda itens de mercado na americanas', 'img' => get_stylesheet_directory_uri() . '/assets/img/hero3.jpg', 'subtitulo' => 'Anuncie alimentos, bebidas, itens de higiene e multiplique seus resultados!')); ?>
        </div>
    </div>
</div>

<section id="introduction" class="container py-6">
    <h2 class="section-title text-primary text-center">vender na americanas é fácil</h2>
    <p class="p-section text-center">Com um cadastro único e rápido, a Americanas Marketplace possibilita que você venda
        seus produtos na Americanas,
        no Submarino e no Shoptime.</p>

    <div class="cards-wrapper d-flex flex-md-row flex-column">
        <div class="card">
            <div class="img-wrapper d-flex align-items-center">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/dinheiro.svg" class="card-img-top"
                    alt="ícones de dinheiro">
            </div>
            <div class="card-body">
                <h3 class="card-title">zero investimento</h3>
                <p class="card-text">Só é cobrada uma comissão por item vendido, de acordo com o seu departamento.</p>
                <a href="#">Confira aqui.</a>
            </div>
        </div>
        <div class="card">
            <div class="img-wrapper d-flex align-items-center">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/caminhao.svg" class="card-img-top"
                    alt="icone de caminhao">
            </div>
            <div class="card-body">
                <h3 class="card-title">entrega descomplicada</h3>
                <p class="card-text">A gente cuida da entrega dos seus pedidos pra você focar em vender.</p>
            </div>
        </div>
        <div class="card">
            <div class="img-wrapper d-flex align-items-center">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/pagamento.svg" class="card-img-top"
                    alt="ícone de caixa registradora">
            </div>
            <div class="card-body">
                <h3 class="card-title">pagamento integral</h3>
                <p class="card-text">O cliente pode parcelar a compra, mas você recebe o valor total de uma vez.</p>
            </div>
        </div>
    </div>
    <a href="/" class="btn btn-primary text-white">quero vender</a>
</section>

<section id="video" class="container-fluid py-6 bg-primary">
    <div class="d-flex flex-column flex-md-row justify-content-center">
        <div class="img-col">
            <div data-bs-toggle="modal" data-bs-target="#video-modal" class="position-relative">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/video.jpg" class="img-fluid" />
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/play.svg" class="position-absolute" />
            </div>

            <div class="modal fade" id="video-modal" tabindex="-1" aria-labelledby="video-modalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Modal body text goes here.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-col d-flex flex-column justify-content-center">
            <p class="title">+1bi</p>
            <p class="content">de visitas nos nossos sites</p>
            <hr>
            <p class="title">+40%</p>
            <p class="content">das vendas são feitas por parceiros</p>
        </div>
    </div>
</section>

<section id="beneficios" class="container">
    <h2 class="section-title text-primary">descubra os benefícios de contar com a marca por trás das grandes marcas</h2>

    <ul class="nav nav-tabs d-flex justify-content-between" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                <span class="d-block d-md-none">1</span>
                <span class="d-none d-md-block">público diverso</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                <span class="d-block d-md-none">2</span>
                <span class="d-none d-md-block">soluções completas</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                <span class="d-block d-md-none">3</span>
                <span class="d-none d-md-block">pagamentos quinzenais</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane"
                type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">
                <span class="d-block d-md-none">4</span>
                <span class="d-none d-md-block">suporte pra vendas</span>
            </button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">Alcance mais clientes, visibilidade, vendas e oportunidades anunciando na Americanas, no
            Submarino e no Shoptime.</div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            Alcance mais clientes, visibilidade, vendas e oportunidades anunciando na Americanas, no Submarino e no
            Shoptime.
        </div>
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...
        </div>
        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
            teste</div>
    </div>


</section>

<section id="depoimento" class="container-fluid py-6 overflow-hidden">
    <div class="container">
        <img class="position-absolute" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/e-americanas.png" />
        <div class="content">
            <p class="depoimento">"é enriquecedor, não só pelo aumento das vendas, mas pela credibilidade de mercado que você ganha, pelo
                fortalecimento da sua marca. é uma porta pra um mundo de possibilidades."</p>
            <div class="d-flex align-items-md-center flex-column flex-md-row">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/foto_bloco6.jpg" />
                <p><b>Natália Moraes,</b> dona da Loja Vitrine dos Importados e parceira da Americanas Marketplace desde
                    2015.
                </p>
            </div>
        </div>
    </div>
</section>
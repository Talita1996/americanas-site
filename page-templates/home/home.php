<div id="home-carousel-hero" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators d-block text-center">
        <button type="button" data-bs-target="#home-carousel-hero" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#home-carousel-hero" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#home-carousel-hero" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <?php get_template_part('/template-parts/hero-home/hero', null, array('titulo' => 'venda seus produtos na americanas', 'img' => get_stylesheet_directory_uri() . '/assets/img/hero1.jpg', 'subtitulo' => 'Anuncie móveis, utilidades domésticas, climatizadores e muito mais!')); ?>
        </div>
        <div class="carousel-item">
            <?php get_template_part('/template-parts/hero-home/hero', null, array('titulo' => 'venda mais e amplie o seu alcance', 'img' => get_stylesheet_directory_uri() . '/assets/img/hero2.jpg', 'subtitulo' => 'Conte com a Americanas pra potencializar sua operação e chegar mais longe!')); ?>
        </div>
        <div class="carousel-item">
            <?php get_template_part('/template-parts/hero-home/hero', null, array('titulo' => 'venha vender com a gente', 'img' => get_stylesheet_directory_uri() . '/assets/img/hero3.jpg', 'subtitulo' => 'Com um cadastro rápido, você começa a anunciar seus produtos pra todo o Brasil!')); ?>
        </div>
    </div>
</div>

<section id="introduction" class="container py-6">
    <h2 class="section-title text-primary text-center h3">a parceria certa pra potencializar seu negócio</h2>

    <div class="cards-wrapper d-flex flex-md-row flex-column">
        <div class="card">
            <div class="img-wrapper d-flex align-items-center">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/porcentagem.svg" class="card-img-top"
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
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/cartao.svg" class="card-img-top"
                    alt="ícone de caixa registradora">
            </div>
            <div class="card-body">
                <h3 class="card-title">pagamento integral</h3>
                <p class="card-text">O cliente pode parcelar a compra, mas você recebe o valor total de uma vez.</p>
            </div>
        </div>
    </div>

    <a href="https://portal.americanasmarketplace.com.br/v3/registre-se?epar=bo_br_st_go_ib_site_cta_quero_vender_link" class="btn btn-primary d-block d-md-none mt-5">quero vender</a>
</section>

<section id="video" class="container-fluid py-5 bg-primary">
    <h2 class="text-white text-center h3 mb-4">vender na americanas é...</h2>
    <div class="d-flex flex-column flex-md-row justify-content-center">
        <div class="img-col">
            <div data-bs-toggle="modal" data-bs-target="#video-modal" class="position-relative">
                <img src="https://i.ytimg.com/vi_webp/FzvVKjUb46I/maxresdefault.webp" class="img-fluid" />
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/play.svg" class="position-absolute" />
            </div>

            <div class="modal fade" id="video-modal" tabindex="-1" aria-labelledby="video-modalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <iframe height="315" src="https://www.youtube.com/embed/FzvVKjUb46I?si=vqZXvVwy4ZdU3RE_"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="beneficios" class="py-6">
    <div class="container">
        <h2 class="text-center text-secondary h3 d-none d-md-block">descubra os benefícios da nossa parceria</h2>
        <h2 class="text-secondary h3 d-block d-md-none">descubra os benefícios de contar com a marca por trás das
            grandes marcas</h2>
        <div class="row g-3">
            <div class="col-12 col-md-6">
                <div class="card p-4 h-100">
                    <div class="d-flex flex-column flex-md-row">
                        <img alt="icone de megafone"
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/megafone.svg" />
                        <h5 class="h5 text-secondary ms-md-3">público diverso</h5>
                    </div>
                    <p class="text-secondary m-0 pt-md-2">Alcance mais clientes, visibilidade, vendas e oportunidades.</p>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card p-4 h-100">
                    <div class="d-flex flex-column flex-md-row">
                        <img alt="icone de megafone"
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/check.svg" />
                        <h5 class="h5 text-secondary ms-md-3">soluções completas</h5>
                    </div>
                    <p class="text-secondary m-0 pt-md-2">Logística, publicidade, educação e tecnologia pra você chegar
                        mais longe.</p>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card p-4 h-100">
                    <div class="d-flex flex-column flex-md-row">
                        <img alt="icone de megafone"
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/dolar.svg" />
                        <h5 class="h5 text-secondary ms-md-3">pagamentos semanais</h5>
                    </div>
                    <p class="text-secondary m-0 pt-md-2">Receba por suas vendas toda semana e otimize seu fluxo de caixa.
                        Saiba mais.</p>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card p-4 h-100">
                    <div class="d-flex flex-column flex-md-row">
                        <img alt="icone de megafone"
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/pessoa.svg" />
                        <h5 class="h5 text-secondary ms-md-3">equipe especializada</h5>
                    </div>
                    <p class="text-secondary m-0 pt-md-2">Conte com a gente ao longo da sua jornada de venda, do cadastro à
                        operação.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="quero-ser-parceiro" class="py-5 d-flex d-md-none flex-column align-items-center">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/check-mobile.png" width="92" height="92" />
    <h2 class="h3 text-white text-center my-3">quero ser<br>parceiro</h2>
    <a href="https://portal.americanasmarketplace.com.br/v3/registre-se?epar=bo_br_st_go_ib_site_cta_quero_vender_link" class="btn btn-primary">começar</a>
</section>

<section id="depoimento" class="container-fluid py-6 px-0 overflow-hidden bg-secondary">
    <div class="container">
        <div id="carousel-depoimento" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel-depoimento" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel-depoimento" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel-depoimento" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <p class="depoimento text-white">"é enriquecedor, não só pelo aumento das vendas, mas pela
                        credibilidade de mercado que você ganha, pelo fortalecimento da sua marca. é uma porta pra um
                        mundo de possibilidades."</p>
                    <div class="d-flex align-items-md-center">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/foto_bloco6.png" />
                        <div>
                            <p class="text-white h6">Natália Moraes</p>
                            <p class="subtitle">dona da Loja Vitrine dos Importados e parceira da Americanas Marketplace
                                desde 2015.
                        </div>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="depoimento text-white">"é enriquecedor, não só pelo aumento das vendas, mas pela
                        credibilidade de mercado que você ganha, pelo fortalecimento da sua marca. é uma porta pra um
                        mundo de possibilidades."</p>
                    <div class="d-flex align-items-md-center">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/foto_bloco6.jpg" />
                        <div>
                            <p class="text-white h6">Natália Moraes</p>
                            <p class="subtitle">dona da Loja Vitrine dos Importados e parceira da Americanas Marketplace
                                desde 2015.
                        </div>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="depoimento text-white">"é enriquecedor, não só pelo aumento das vendas, mas pela
                        credibilidade de mercado que você ganha, pelo fortalecimento da sua marca. é uma porta pra um
                        mundo de possibilidades."</p>
                    <div class="d-flex align-items-md-center">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/foto_bloco6.jpg" />
                        <div>
                            <p class="text-white h6">Natália Moraes</p>
                            <p class="subtitle">dona da Loja Vitrine dos Importados e parceira da Americanas Marketplace
                                desde 2015.
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="vender-na-americanas-deskop" class="py-6 d-md-block d-none"
    style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg-vender.jpg')">
    <div class="container">

        <div class="w-50">
            <h2 class="h3 text-white mb-4"><span>quem pode vender</span><br>na americanas?</h2>

            <ul class="nav nav-tabs mb-4 d-flex" id="vender-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#requisitos-tab-pane" type="button" role="tab"
                        aria-controls="requisitos-tab-pane" aria-selected="true">requisitos</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#doc-tab-pane"
                        type="button" role="tab" aria-controls="doc-tab-pane"
                        aria-selected="false">documentação</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#steps-tab-pane"
                        type="button" role="tab" aria-controls="steps-tab-pane" aria-selected="false">passo a
                        passo</button>
                </li>
            </ul>
            <div class="tab-content" id="vender-tab-content">
                <div class="tab-pane fade show active text-white" id="requisitos-tab-pane" role="tabpanel"
                    aria-labelledby="home-tab" tabindex="0">
                    <p>Cadastrar a sua loja pra vender em uma das maiores vitrines online do Brasil é fácil. Aqui, você
                        pode entregar seus produtos pra clientes de todo o Brasil e conquistar a visibilidade que você
                        precisa pra ter sucesso no seu negócio. </p>
                    <p>Pra garantir a segurança de todos os nossos parceiros e clientes da plataforma, estabelecemos
                        alguns requisitos básicos pra cadastro, como CNPJ e emissão de nota fiscal.</p>
                    <p>Confira todos os detalhes a seguir!</p>
                </div>
                <div class="tab-pane fade text-white" id="doc-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0">
                    <p>Pra vender na Americanas, é preciso ter as seguintes documentações: </p>
                    <ul>
                        <li>CNPJ (MEI ou superior) ativo e sem restrições</li>
                        <li>CNAE de varejista</li>
                        <li>Inscrição no Sintegra (exceto para MEI)</li>
                        <li>ME ou superior: emitir nota fiscal eletrônica</li>
                        <li>MEI: emitir nota fiscal eletrônica ou avulsa</li>
                        <li>Conta corrente vinculada ao CNPJ</li>
                        <li>Capital social igual ou superior a R$ 1000</li>
                    </ul>
                </div>
                <div class="tab-pane fade text-white" id="steps-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                    tabindex="0">
                    <p>Com todos os documentos necessários, você pode cadastrar a sua loja pra vender em nosso
                        marketplace. Basta seguir esses passos: </p>
                    <ol>
                        <li>Preencha o <a
                                href="https://portal.americanasmarketplace.com.br/v3/registre-se?lp=vendendo_em_marketplaces&variant=c&button=2_quero_comecar"
                                target="_blank">formulário de cadastro</a> com os dados essenciais do seu negócio.</li>
                        <li>Com o cadastro aprovado, você já pode acessar a nossa plataforma de vendas e configurar a
                            sua loja.</li>
                        <li>É hora de vender! Acompanhe os seus pedidos e receba pelas suas vendas.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="vender-na-americanas" class="container py-5 d-block d-md-none">
    <h2 class="h3 text-primary mb-4"><span>quem pode</span><br>vender na americanas?</h2>

    <div id="carousel-vender" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel-vender" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel-vender" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel-vender" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner d-flex">
            <div class="carousel-item active">
                <div class="card">
                    <h5 class="text-primary h5 pb-2">requisitos</h5>
                    <p>Cadastrar a sua loja pra vender em uma das maiores vitrines online do Brasil é fácil. Aqui, você
                        pode entregar seus produtos pra clientes de todo o Brasil e conquistar a visibilidade que você
                        precisa pra ter sucesso no seu negócio.</p>
                    <p>Pra garantir a segurança de todos os nossos parceiros e clientes da plataforma, estabelecemos
                        alguns requisitos básicos pra cadastro, como CNPJ e emissão de nota fiscal.</p>
                    <p>Confira todos detalhes a seguir!</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <h5 class="text-primary h5 pb-2">requisitos</h5>
                    <p>Cadastrar a sua loja pra vender em uma das maiores vitrines online do Brasil é fácil. Aqui, você
                        pode entregar seus produtos pra clientes de todo o Brasil e conquistar a visibilidade que você
                        precisa pra ter sucesso no seu negócio.</p>
                    <p>Pra garantir a segurança de todos os nossos parceiros e clientes da plataforma, estabelecemos
                        alguns requisitos básicos pra cadastro, como CNPJ e emissão de nota fiscal.</p>
                    <p>Confira todos detalhes a seguir!</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <h5 class="text-primary h5 pb-2">requisitos</h5>
                    <p>Cadastrar a sua loja pra vender em uma das maiores vitrines online do Brasil é fácil. Aqui, você
                        pode entregar seus produtos pra clientes de todo o Brasil e conquistar a visibilidade que você
                        precisa pra ter sucesso no seu negócio.</p>
                    <p>Pra garantir a segurança de todos os nossos parceiros e clientes da plataforma, estabelecemos
                        alguns requisitos básicos pra cadastro, como CNPJ e emissão de nota fiscal.</p>
                    <p>Confira todos detalhes a seguir!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cadastro" class="bg-primary py-5 text-center">
    <h3 class="h3 text-white mb-2">vamos nessa?</h3>
    <p class="text-white">cadastre-se e faça parte do nosso<br class="d-block d-md-none"> time de parceiros</p>
    <a href="https://portal.americanasmarketplace.com.br/v3/registre-se?epar=bo_br_st_go_ib_site_cta_quero_vender_link" class="btn btn-secondary mt-4 btn-lg">quero começar</a>
</section>
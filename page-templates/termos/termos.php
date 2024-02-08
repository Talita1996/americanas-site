<div class="wrap">

  <?php $img = get_stylesheet_directory_uri() . "/assets/img/termos-banner.jpg"; ?>
  <?php get_template_part(
    '/template-parts/hero/hero',
    null,
    array(
      'titulo' => 'termos e<br class="d-none d-md-block"> condições gerais',
      'subtitulo' => 'Conheça as regras pra vender na Americanas',
      'img' => $img
    )
  ); ?>

  <section id="sec-1" class="container">
    <h2 class="h4 text-primary mt-5">clique em cada termo pra baixar e ler seu conteúdo</h2>

    <table class="table table-responsive-md m-auto w-100 ">
      <tbody class="d-block">
        <tr class="w-100 d-flex justify-content-between align-items-center">
          <td>termos e condições gerais - americanas marketplace</td>
          <td><a href="#" class="bg-primary d-flex justify-content-center align-items-center"><img
                src="<?php echo get_stylesheet_directory_uri() . '/assets/img/arrow-down.svg' ?>" /></a></td>
        </tr>
        <tr class="w-100 d-flex justify-content-between align-items-center">
          <td>termos de serviço - americanas marketplace</td>
          <td><a href="#" class="bg-primary d-flex justify-content-center align-items-center"><img
                src="<?php echo get_stylesheet_directory_uri() . '/assets/img/arrow-down.svg' ?>" /></a></td>
        </tr>
        <tr class="w-100 d-flex justify-content-between align-items-center">
          <td>anexo - remuneração</td>
          <td><a href="#" class="bg-primary d-flex justify-content-center align-items-center"><img
                src="<?php echo get_stylesheet_directory_uri() . '/assets/img/arrow-down.svg' ?>" /></a></td>
        </tr>
        <tr class="w-100 d-flex justify-content-between align-items-center">
          <td>anexo - americanas entrega</td>
          <td><a href="#" class="bg-primary d-flex justify-content-center align-items-center"><img
                src="<?php echo get_stylesheet_directory_uri() . '/assets/img/arrow-down.svg' ?>" /></a></td>
        </tr>
        <tr class="w-100 d-flex justify-content-between align-items-center">
          <td>anexo - acordo de nível de serviço (ANS)</td>
          <td><a href="#" class="bg-primary d-flex justify-content-center align-items-center"><img
                src="<?php echo get_stylesheet_directory_uri() . '/assets/img/arrow-down.svg' ?>" /></a></td>
        </tr>
        <tr class="w-100 d-flex justify-content-between align-items-center">
          <td>código de ética e conduta</td>
          <td><a href="#" class="bg-primary d-flex justify-content-center align-items-center"><img
                src="<?php echo get_stylesheet_directory_uri() . '/assets/img/arrow-down.svg' ?>" /></a></td>
        </tr>
        <tr class="w-100 d-flex justify-content-between align-items-center">
          <td>assinatura digital do contrato</td>
          <td><a href="#" class="bg-primary d-flex justify-content-center align-items-center"><img
                src="<?php echo get_stylesheet_directory_uri() . '/assets/img/arrow-down.svg' ?>" /></a></td>
        </tr>
        <tr class="w-100 d-flex justify-content-between align-items-center">
          <td>anexo - acordo de tratamento de dados pessoais</td>
          <td><a href="#" class="bg-primary d-flex justify-content-center align-items-center"><img
                src="<?php echo get_stylesheet_directory_uri() . '/assets/img/arrow-down.svg' ?>" /></a></td>
        </tr>
      </tbody>
    </table>
  </section>
</div>
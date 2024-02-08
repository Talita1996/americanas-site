<section id="hero" class="position-relative overflow-hidden d-flex align-items-center">
  <div class="container">
    <div class="row align-items-center position-relative">
      <div class="content-col col-9 col-md-6">
        <h1 class="align-center text-white h3 mb-2">
          <?php echo $args['titulo']; ?><br>
        </h1>
        <p class="text-white">
          <?php echo $args['subtitulo']; ?>
        </p>
      </div>
    </div>

    <div class="bg-image position-absolute top-0 w-100 h-100">
      <img class="img-fluid" src="<?php echo $args['img']; ?>" />
      <div class="content-col col-9 col-md-6 px-2 ps-xl-7">

      </div>
    </div>
  </div>
</section>
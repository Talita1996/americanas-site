<button class="nav-link <?php echo $args['first'] == 0 ? 'active' : '' ?>" id="<?php echo $args['id']; ?>-tab"
    data-bs-toggle="tab" data-bs-target="#<?php echo $args['id']; ?>" type="button" role="tab"
    aria-controls="<?php echo $args['id']; ?>" aria-selected="<?php echo $args['first'] == 0 ? true : '' ?>">
    <div class="d-flex flex-column align-items-start text-start">
        <div><?php echo $args['icon']; ?></div>
        <div class="tab-title h5 m-0"><?php echo $args['title']; ?></div>
        <div class="tab-subtitle"><?php echo $args['subtitle']; ?></div>
    </div>
</button>
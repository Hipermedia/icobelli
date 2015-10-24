<?php 
/** Botones para compartir en redes sociales. Estilo ANLI
------------------------------------------------------------------- */ 
?>

<section class="PrimalSlider u-contenedorCompleto">
    <div id="slider-full" class="flexslider PrimalSlider-contenido">
      <ul class="slides">
        <?php while(have_rows('sliderPrincipal', 'option')) : the_row(); ?>
          <li class="PrimalSlider-slide">
            <img class="PrimalSlider-slideImagen" src="<?php the_sub_field('imagen', 'option'); ?>" alt="" />
            <div class="PrimalSlider-slideCaption">
              <h2 class="PrimalSlider-slideTitulo"><?php the_sub_field('titulo', 'option'); ?></h2>
              <?php the_sub_field('descripcion', 'option'); ?>
              <a class="PrimalSlider-slideBoton" href="<?php the_sub_field('url', 'option'); ?>">Conoce más</a>
            </div>
          </li>
          <?php endwhile; ?>
      </ul>
    </div>
</section>

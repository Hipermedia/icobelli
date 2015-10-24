<?php 
/** Sección de texto. Estilo Starchi
------------------------------------------------------------------- */ 
?>

<!-- StarchiBloques -->
<section class="TextSlider u-contenedor">
	<!-- Contenedor -->
	<div class="TextSlider-texto">
		<?php the_field('textoTextoSlider', 'option'); ?>
	</div>

	<!-- Place somewhere in the <body> of your page -->
	<div class="TextSlider-slider flexslider">
	  <ul class="slides">
	  	<?php while(have_rows('sliderTextoSlider', 'option')) : the_row(); ?>
	    <li>
	    	<a href="<?php the_sub_field('enlace', 'option'); ?>">
	      		<img src="<?php the_sub_field('imagen', 'option'); ?>" />
	    	</a>
	    </li>
		<?php endwhile; ?>
	  </ul>
	</div>
</section>
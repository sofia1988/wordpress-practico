<?php get_header(); ?> <!-- Incluye el encabezado del tema de WordPress -->

<main class='container'>
    <?php if(have_posts()){ // Comprueba si hay publicaciones
            while(have_posts()){ // Mientras haya publicaciones
                the_post(); // Configura la publicación actual
            ?>
                <h1 class='my-3'><?php the_title(); ?></h1> <!-- Muestra el título de la publicación con margen superior -->
                <?php the_content(); ?> <!-- Muestra el contenido de la publicación -->
            <?php } // Fin del bucle while
            
    }?> <!-- Fin de la comprobación de publicaciones -->
  <?php the_post_thumbnail('large'); ?>
</main>

<?php get_footer(); ?> <!-- Incluye el pie de página del tema de WordPress -->

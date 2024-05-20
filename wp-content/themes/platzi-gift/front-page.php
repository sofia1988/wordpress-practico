<?php get_header(); ?> <!-- Incluye el encabezado del tema de WordPress -->

<main class='container'>
    <?php if(have_posts()){ // Comprueba si hay publicaciones
        while(have_posts()){ // Mientras haya publicaciones
            the_post(); ?> <!-- Itera sobre cada publicación -->
            <h1 class='my-4'><?php the_title(); ?>!!</h1> <!-- Muestra el título de la publicación -->
            <?php the_content(); ?> <!-- Muestra el contenido de la publicación -->

        <?php    }
    }?>
    
    <!-- Aquí empieza la sección de productos -->
    <div class="lista-productos my-5">
        <h2 class='text-center'>PRODUCTOS</h2> <!-- Título de la sección de productos -->
        <div class="row row-cols-1 row-cols-md-3 g-4"> <!-- Utiliza clases de Bootstrap para diseño responsive -->
        <?php
        $args = array(
            'post_type' => 'producto', // Tipo de publicación a recuperar (productos)
            'posts_per_page' => -1, // Número de publicaciones por página (-1 para obtener todas)
            'order'         => 'ASC', // Orden ascendente
            'orderby'       => 'title' // Ordenar por título
        );

        $productos = new WP_Query($args); // Crea una nueva instancia de consulta de WordPress para obtener productos/  WP_Query tiene muchos argumentos mas

        if($productos->have_posts()){ // Comprueba si la consulta tiene publicaciones
            while($productos->have_posts()){ // Inicia un loop para cada publicación en la consulta de productos
                $productos->the_post(); // Establece la publicación actual en la consulta de productos
                ?>

                <!-- Muestra cada producto -->
                <div class="col">
                    <figure class="text-center">
                        <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?> <!-- Muestra la imagen destacada de la publicación -->
                    </figure>
                    <h4 class='my-3 text-center'>
                        <a href="<?php the_permalink(); ?>" class="text-decoration-none"> <!-- Enlace a la publicación individual del producto -->
                            <?php the_title();?> <!-- Título del producto -->
                        </a>
                    </h4>
                </div>

           <?php }
        }

        ?>
        </div> <!-- Fin del div.row -->
    </div> <!-- Fin de la lista de productos -->
</main>

<?php get_footer(); ?> <!-- Incluye el pie de página del tema de WordPress -->


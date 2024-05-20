<!DOCTYPE html>
<html lang="en">
<head>
    <meta <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Incluir Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Incluir jQuery y Bootstrap 5 JS (Bundle) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php wp_head() ?>
</head>
<body>

<header>
    <div class="container">
        <div class="row  py-4">
            <div class="col-md-2 col-6"> <!-- Logotipo -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
            </div>

            <div class="col-md col-6 text-right d-md-none  navbar-light"> <!-- Botón de hamburguesa y menú responsive -->
                <nav class="navbar-light ">
                    <button class="navbar-toggler shadow-none " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="dashicons dashicons-menu-alt3"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                    
                        <?php wp_nav_menu(
                            array(
                                'menu' => 'menu-responsive',
                                'menu_class' => 'nav-link navbar-nav',
                            )
                        ); ?>
                         
                    </div>
                </nav>
            </div>

            <div class="col-md col-8 text-right d-none d-md-block  align-items-center justify-content-end  d-md-flex"> <!-- Menú visible en escritorio -->
                <nav>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'top_menu',
                            'menu_class'     => 'menu-principal',
                            'container_class' => 'container-menu',
                        )
                    ); ?>
                </nav>
            </div>
        </div>
    </div>
</header>


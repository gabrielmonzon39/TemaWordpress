<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Viral GM</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/Assets/css/bootsrap.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/Assets/css/viral.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
<body>
    <header class = "row header">
        <section class ="col-6 header__main">
            <section class ="col-12 header__logo">
                <figure class ="e-center logo">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/Assets/img/viral.png" alt="logo Viral">
                </figure>
            </section>
            <section class ="col-12 header_nav d-flex justify-content-center">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link text-dark" href="#">Tecnologia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Youtube</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Musica</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Cine</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Series</a>
                        </li>
                    </ul>
            </section>
        </section>
        <section class ="col-6 header__sec row  a-center d-flex">
            <section class ="col-6 header__social">
                <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="fab fa-facebook icono"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="fab fa-twitter icono"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="fab fa-youtube icono"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="fab fa-instagram icono"></i>
                            </a>
                        </li>
                    </ul>
            </section>
            <section class ="col-6 header __busqueda">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Busqueda">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
                </div>
            </div>
            </section>
        </section>
    </header>

    <footer>
        <figure class = "e-center logo">
            <img src="<?php echo get_stylesheet_directory_uri()?>/Assets/img/viral2.png" alt="logo Footer">
        </figure>
    </footer>

</body>
</html>

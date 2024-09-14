<?php
$producto1 = [
    'img' => 'resources/img/card01.jpg',
    'titulo' => 'Card title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'button' => 'Last updated 3 mins ago'
];
$producto2 = [
    'img' => 'resources/img/card02.jpg',
    'titulo' => 'Card title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'button' => 'Last updated 3 mins ago'
];
$producto3 = [
    'img' => 'resources/img/card03.jpg',
    'titulo' => 'Card title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'button' => 'Last updated 3 mins ago'
];
$producto4 = [
    'img' => 'resources/img/card04.jpg',
    'titulo' => 'Card title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'button' => 'Last updated 3 mins ago'
];
$producto5 = [
    'img' => 'resources/img/card05.jpg',
    'titulo' => 'Card title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'button' => 'Last updated 3 mins ago'
];
$producto6 = [
    'img' => 'resources/img/card06.jpg',
    'titulo' => 'Card title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'button' => 'Last updated 3 mins ago'
];
$productos = [$producto1, $producto2, $producto3, $producto4, $producto5, $producto6];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <?php require_once 'layouts/partials/css.php'; ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="<?php echo $logo ?>" width="30" height="30" class="d-inline-block align-top" alt="">
            Tienda MAS</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fab fa-facebook-f"></i> Facebook </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fab fa-whatsapp"></i> Whatsapp </a>
                </li>
            </ul>
        </div>
    </nav>


    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php foreach ($img_sliders as $key => $img_slider) { ?>
                <div class="carousel-item <?php if ($key == 0) {
                                                echo 'active';
                                            } ?>">
                    <img src="<?php echo $img_slider ?>" class="d-block w-100 img-carousel" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>


    <div class="container mt-4">
        <h2 class="text-center">Nuestros Productos</h2>
        <div class="row">
            <?php foreach ($productos as $producto) { ?>
                <div class="col-md-6 mb-3">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?php echo $producto['img']; ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $producto['titulo']; ?></h5>
                                    <p class="card-text"><?php echo $producto['descripcion']; ?></p>
                                    <p class="card-text"><?php echo $producto['button']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="left-content">
                    <p class="footer-text"><i class="fas fa-map-marker-alt footer-icon"></i>Jr. Amazonas 120</p>
                    <p class="footer-text"><i class="fas fa-phone-alt footer-icon"></i>Teléfono: 123456789</p>
                </div>
            </div>
        </div>
    </footer>

    <?php require_once 'layouts/partials/scripts.php'; ?>
</body>

</html>
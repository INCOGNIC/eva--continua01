<?php
// controllers/home.php

// Aquí puedes agregar la lógica del controlador 'home'
$data = "Bienvenido a la página principal";
$productos = [
    [
        'title' => 'Producto 1',
        'description' => 'loremp ipsum dolor sit amet consectetur adipisicing elit. Quos, quae.',
        'image' => 'resources/img/card01.jpg',
    ],
    [
        'title' => 'Producto 2',
        'description' => 'loremp ipsum dolor sit amet consectetur adipisicing elit. Quos, quae.',
        'image' => 'resources/img/card02.jpg',
    ],
    [
        'title' => 'Producto 3',
        'description' => 'loremp ipsum dolor sit amet consectetur adipisicing elit. Quos, quae.',
        'image' => 'resources/img/card03.jpg',
    ]
];
$img_sliders = [
    'resources/img/slide01.jpg',
    'resources/img/slide02.jpg',
    'resources/img/slide03.jpg'
];
$logo = 'resources/img/logo.png';
// Incluir la vista correspondiente
require 'views/home.php';
?>
<?php
require_once '../vendor/autoload.php';

$products = ['Helmet', 'Socks', 'Jacket', 'Shoes', 'Pants'];

$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', ['products' => $products]);
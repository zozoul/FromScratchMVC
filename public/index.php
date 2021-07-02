<?php
/*error_reporting(E_ALL);
ini_set('display_errors',1);*/
require '../vendor/autoload.php';
$router = new AltoRouter();
$router->setBasePath('/FromScratchMVC/public');
$router->map('GET', '/', 'home');
$router->map('GET', '/contact', 'contact', 'contact');
$router->map('GET', '/blog/[*:slug]-[i:id]', 'blog/article', 'article');

$match = $router->match();

require '../templates/header.php';

if (is_array($match)) {
    $params = $match['params'];
    //var_dump($match['target']);
    //require "../templates/{$match['target']}.php";
    require "../templates/ok.php";
} else {
    require "../templates/404.php";
}

require '../templates/footer.php';
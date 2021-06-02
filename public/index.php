<?php
/* var_dump('aaaa');
exit; */
require '../vendor/autoload.php';
// Constante pour le routeur
define(VIEW_PATH, __DIR__ . '../../src/view');
// Instance objer router
$router      = new AltoRouter();
$projectPath = '/fromScratchMVC/public';
$router->setBasePath($projectPath);
echo '<pre>';
// map homepage
$router->map('GET', '/', function () {
    require VIEW_PATH . '/post/index.php';
});
$router->map('GET', '/admin', function () {
    echo 'admin page';
    //require VIEW_PATH . '/admin/index.php';
});
$match = $router->match();
var_dump('match value');
var_dump($match);
if ($match) {
    echo 'ato anefa';
    call_user_func_array($match['target'], $match['params']);
} else {
    echo 'error';
}

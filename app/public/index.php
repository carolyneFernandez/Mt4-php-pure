<?php

require '../data/SplClassLoader.php';
// Tout ce qui se trouve dans src/Service/
$controllerLoader = new SplClassLoader('src\Service', __DIR__.'/../');
$controllerLoader->register();


// Tout ce qui se trouve dans src/Controller/
$vendorLoader = new SplClassLoader('src\Controller',  __DIR__.'/../');
$vendorLoader->register();

$request = $_SERVER['REQUEST_URI'];
$new_request=substr($request, 7);

switch ($new_request) {
    case '/' :
        require  __DIR__ .'/../src/view/index.php';
        break;
    case '' :
        require  __DIR__ .'/../src/view/index.php';
        break;
    case '/articles' :
        require  __DIR__ .'/../src/view/articles.php';
        break;
    case '/commentaires' :
        require  __DIR__ .'/../src/view/commentaires.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/../src/view/404.php';
        break;
}

?>

<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
var_dump ($_SESSION);


if( !session_id() ) @session_start();

require '../vendor/autoload.php';

use DI\ContainerBuilder;

$containerBuider = new ContainerBuilder;
$container = $containerBuider->build();

use League\Plates\Engine;
$engine = new Engine('../app/views');

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/',                        ['App\controllers\PostsController', 'index']);
    $r->addRoute('GET', '',                         ['App\controllers\PostsController', 'index']);
    $r->addRoute('GET', '/posts',                   ['App\controllers\PostsController', 'index']);            //все посты
    $r->addRoute(['GET', 'POST'], '/user/login',               ['App\controllers\UserController','login']);
    $r->addRoute('GET', '/user/logout',             ['App\controllers\UserController','logout']);
    $r->addRoute('GET', '/posts/{category:\w+}',    ['App\controllers\PostsController','getPostsByCategory']);
    $r->addRoute('GET', '/post/{id:\d+}',           ['App\controllers\PostsController', 'getPostById']);   //один пост
    $r->addRoute(['GET', 'POST'], '/comment/creat',            ['App\controllers\CommentController','creat']);

    $r->addRoute(['GET', 'POST'], '/comments',                 ['App\controllers\CommentController','index']);
    $r->addRoute(['GET', 'POST'], '/comment/creat/{id:\d+}',   ['App\controllers\CommentController','creatComment']);
    $r->addRoute(['GET', 'POST'], '/newComment/',              ['App\controllers\CommentController','creatComment']);

    $r->addRoute(['GET', 'POST'], '/comments/',                ['App\controllers\CommentController','indexx']);   //Для проверки


                //Admin
    $r->addRoute('GET', '/admintools',              ['App\controllers\AdminController', 'admintools']);
    $r->addRoute('GET', '/admin/posts',              ['App\controllers\PostsController', 'ind']);
    $r->addRoute('GET', '/admin/users',              ['App\controllers\UserController', 'index']);
    //$r->addRoute('GET', '/admin/posts',              ['App\controllers\PostsController', 'index']);


    // Слепые ссылки
    $r->addRoute(['GET', 'POST'], '/creatpost', ['App\controllers\PostsController', 'creatpost']);

    $r->addRoute('GET', '/deletepost/{id:\d+}', ['App\controllers\PostsController', 'deletepost']);






    $r->addRoute('GET', '/postsp/', ['App\controllers\PostsController', 'indexPagination']);  //погинация     http://blogo/postsp/?page=2

    //$r->addRoute('GET', '/registrform', ['App\controllers\UserController', 'registrform']);
    $r->addRoute('GET', '/autores', ['App\controllers\UserController', 'autoresform']);
    $r->addRoute('POST', '/autoresation', ['App\controllers\UserController', 'autoresation']);
    $r->addRoute('GET', '/users', ['App\controllers\UserController', 'index']);
    $r->addRoute('GET', '/user/{id:\d+}', ['App\controllers\UserController', 'getOneUser']);
    $r->addRoute('GET', '/imag', ['App\controllers\ImagController', 'index']);
    $r->addRoute('GET', '/imag/{id:\d+}', ['App\controllers\ImagController', 'index']);
    $r->addRoute('GET', '/about', ['App\controllers\HomeController', 'about']);
    $r->addRoute('GET', '/home', 'gupdate_handler');

    $r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
});


$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];


if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
var_dump($routeInfo);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '404 Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        echo '405 Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:

        $handler = $routeInfo[1];
        $vars[] = $routeInfo[2];
        $path = $handler[0];
        $controller = new $path;
        $method = $handler[1];
        call_user_func_array([$controller, $method], $vars);


}























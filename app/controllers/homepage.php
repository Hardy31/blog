<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';


use App\QueryBuilder;

$bd = new QueryBuilder('blog');

//Bpvtybnm поле
$bd->update('posts',
    [
    'id_user' => 91,
    'picture_post' => 'picturess',
    'title_post' => 'назваие статьи xx',
    'description_post' => 'Описание стxx',
    'content_post' => 'Содержание стxxxxxx',
    'teg_post' => 'Жанр x',
    ],
    18);

/*
//Удаление по id

$bd->delete (26, 'posts');
*/

/*
//Добавить поле
$bd->insert([
    
    'id_user' => 1,
    'picture_post' => 'picture',
    'title_post' => 'назваие статьи xx',
    'description_post' => 'Описание статьиxx',
    'content_post' => 'Содержание статьи xx',
    'teg_post' => 'Жанр 3',

], 'posts');
*/


/*
//вывести все посты
$allPosts = $bd->getAll();
echo 'index d public';
var_dump($allPosts);
//d($allPosts);
*/



/*
include '../Classes/Foo/Order.php';
include '../Classes/Bar/Order.php';
//$g = new Classes/Bar/Order;
//$f = new Classes/Foo/Order;
use Classes\Foo\Order as FO;
use Classes\Bar\Order as BO;
$myFooOrder = new FO();
echo'<br>';
$myBarOrder = new BO();

*/
<?php



namespace App\controllers;


use App\models\Comment;
use App\models\QueryBuilder;
use League\Plates\Engine;
use PDO;
use App\models\Post;
use App\models\User;
use App\models\Category;

use App\models\Template;
use Delight\Auth\Auth;

ini_set('display_errors', 1);
error_reporting(E_ALL);




class AdminController
{
    private $auth;
    private $templates;
    private $post;
    private $category;

    private $user;

    public function __construct()
    {

        $dbOptions = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $db = new PDO("mysql:host=localhost;dbname=blog; charset=utf8", 'root', '9959095', $dbOptions);
        $qb = new QueryBuilder('blog');
        $this->post= new Post($qb);
        $this->auth = new Auth($db);
        $this->category= new Category($qb);
        $this->user=new User();
        $this->templates = new Engine('../app/views');


    }

    public function admintools()
    {
        
        echo $this->templates->render('admintoolspage', ['postsInView'=>'jhgvhvjhgjhvhjv']);

    }








}



























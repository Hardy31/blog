<?php
namespace App\controllers;


use App\models\QueryBuilder;
use League\Plates\Engine;
use App\models\User;
use App\models\Template;
use \Delight\Auth\Auth;
use App\models\Comment;
use PDO;



class CommentController
{
    private $templates;
    private $qb;
    private $user;
    private $comments;


    public function __construct()
    {
        $db = new QueryBuilder('blog');
        $this->templates = new Engine('../app/views');

    }

    public function index()
    {

        $comments = $db->getAll('comments');
        s($comments);
        echo $this->templates->render('commentspage', ['comments' => $comments]);  //запуск view
    }


    public function creatComment($vars){
        $dbOptions = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $db = new PDO("mysql:host=localhost;dbname=blog; charset=utf8", 'root', '9959095', $dbOptions);
        //$this->qb = new QueryBuilder('blog');
        //$this->qb = $qb;
        //$this->auth = new \Delight\Auth\Auth($db);
        //s($_POST);
        if($_POST){
            echo ($vars['id']);
            //s($_POST);
            //var_dump($db);
            $qb = new QueryBuilder($db);
            $this->comment = new Comment($qb);
            $this->comment->create('comments',$_POST);
            header('Location: ../../posts');
        }

        echo ($vars['id']);
        echo $this->templates->render('commentCreat', ['id_post'=>$vars['id']]);
        }

    }

<?php



namespace App\controllers;


use App\QueryBuilder;
use League\Plates\Engine;

class HomeController{
    private $templates;

    public function __construct(Engine $engine)
    {
        //$this->templates = new Engine('../app/views');
        $this->templates = $engine;
    }

    public function index()
    {
        $db= new QueryBuilder('blog');
        $posts =  $db->getAll('posts');


        echo $this->templates->render('homepage', ['postsInView' => $posts]);


    }


    public function about()
    {
        echo $this->templates->render('aboutpage', ['name' => 'Это класс HomeController, метод about ']);
    }

}




























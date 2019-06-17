<?php



namespace App\controllers;


use App\QueryBuilder;
use League\Plates\Engine;

class ImagController{
    private $templates;

    public function __construct()
    {
        $this->templates = new Engine('../app/views');
    }

    public function index($vars)
    {
        $db= new QueryBuilder('blog');
        $posts =  $db->getAll('photos');

        d($posts);
        echo $this->templates->render('imagpage', ['postsInView' => $posts]);
    }


    public function about($vars)
    {
        echo $this->templates->render('aboutpage', ['name' => 'Это класс ImagController, метод about ']);
    }

}




























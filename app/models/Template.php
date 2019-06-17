<?php


/*
namespace App\models;

use App\models\QueryBuilder;
use App\models\Post;
use League\Plates\Engine;
use Delight\Auth\Auth;

class Template
{
    private $auth;
    private $templates;
    private $qb;
    private $post;

    public function __construct(Engine $engine, QueryBuilder $qb, Auth $auth, Post $post)
    {
        $this->templates = $engine;
        $this->qb = $qb;
        $this->auth = $auth;
        $this->post = $post;
        $this->categories = $this->qb->getAll('categories', ['category']);
    }

    public function getPage(string $layout, array $entities = array())
    {
        $admin = $this->qb->getOne('users', ['id, username, userinfo, avatar, email'], [], null, ['id' => 1]);
        $popular = $this->post->getPopular(3);
        $this->templates->addData(['adminname' => $admin['username'], 'admininfo' => $admin['userinfo'], 'adminavatar' => md5($admin['email']) . '/' . $admin['avatar'], 'popular' => $popular]);

        if ($this->auth->hasRole(\Delight\Auth\Role::ADMIN)) {
            $admin = true;
            echo $this->templates->render('public/header', ['categories' => $this->categories, 'admin' => $admin]);
        } else {
            echo $this->templates->render('public/header', ['categories' => $this->categories]);
        }
        echo $this->templates->render($layout, $entities);
        echo $this->templates->render('public/instafeed');
        echo $this->templates->render('public/footer');

    }

    public function getAdminPage(string $layout, array $entities = array())
    {
        if ($this->auth->hasRole(\Delight\Auth\Role::ADMIN)) {
            $admin = true;
            echo $this->templates->render($layout, $entities);
        } else {
            header('Location: /');
        }
    }
}
*/
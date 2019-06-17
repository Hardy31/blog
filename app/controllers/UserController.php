<?php
namespace App\controllers;


use App\models\QueryBuilder;
use League\Plates\Engine;
use App\models\User;
use App\models\Template;
use \Delight\Auth\Auth;
use PDO;


class UserController
{
    private $templates;
    private $qb;
    private $user;


    public function __construct()
    {
        $this->templates = new Engine('../app/views');
        
    }

    public function index()
    {





        $db = new QueryBuilder('blog');
        $users = $db->getAll('users');
        s($users);

        echo $this->templates->render('adminuserspage', ['usersInView' => $users]);  //запуск view

    }




    public function login()
    {

        $dbOptions = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $db = new PDO("mysql:host=localhost;dbname=blog; charset=utf8", 'root', '9959095', $dbOptions);
        //$this->qb = new QueryBuilder('blog');

        //$this->qb = $qb;
        $this->auth = new \Delight\Auth\Auth($db);




        //s($_POST);

        if($_POST){
            //$this->user->login();
            $this->user = new User();
            var_dump($db);
            //s($this->user);
            $this->auth->login($_POST['email'], $_POST['password']);
            header('Location: ../posts');
        }
        //echo $this->templates->getPage('public/userlogin');
        echo $this->templates->render('userlogin');
    }
    public function autoresform()
    {




        echo 'класс UserPostsController метод autoresform ';
        echo $this->templates->render('autoresformpage');
    }


    public function autoresation()
    {
        s($_POST);
        s($_FILES);

        //Кодируем полученную картинку и переносим ее в папку ../public/img/ с расширение .jpg
        $newName = md5($_FILES['image']['name']) . '.jpg';
        move_uploaded_file($_FILES['image']['tmp_name'], '../public/img/' . $newName);

        $db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", 'root', '9959095');
        $auth = new Auth($db);


        try { $userId = $auth->register($_POST['email'], $_POST['password'], $_POST['username'], $newName);

            echo 'We have signed up a new user with the ID ' . $userId;
        }
        catch (\Delight\Auth\InvalidEmailException $e) {
            die('Invalid email address');
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Invalid password');
        }
        catch (\Delight\Auth\UserAlreadyExistsException $e) {
            die('User already exists');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        }
    }
    public function logout()
    {

        $dbOptions = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $db = new PDO("mysql:host=localhost;dbname=blog; charset=utf8", 'root', '9959095', $dbOptions);
        $this->auth = new \Delight\Auth\Auth($db);
        var_dump($this->auth);
       // var_dump ($auth);
        //$auth->destroySession();

        $this->auth->logOut();
        //$this->user->logout();
        header('Location: /');
    }


};


























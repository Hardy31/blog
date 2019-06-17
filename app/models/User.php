<?php

namespace App\models;

use Delight\Auth\Auth;
use App\models\QueryBuilder;
use PDO;



class User
{
    private $auth;
    private $qb;


    public function __construct( )
    {
        $dbOptions = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $db = new PDO("mysql:host=localhost;dbname=blog; charset=utf8", 'root', '9959095', $dbOptions);

        $this->auth = new \Delight\Auth\Auth($db);

    }

    public function login()
    {
        try {
            $this->auth->login($_POST['email'], $_POST['password']);
            s($this->user);
        } catch (\Delight\Auth\InvalidEmailException $e) {
            die('Wrong email address');
        } catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Wrong password');
        } catch (\Delight\Auth\EmailNotVerifiedException $e) {
            die('Email not verified');
        } catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        }
    }
/*
    public function logout()
    {
        try {
            $this->auth->logOut();
        }
        catch (\Delight\Auth\NotLoggedInException $e) {
            die('Not logged in');
        }
    }
*/
}




   

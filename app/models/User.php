<?php

namespace App\models;

use Delight\Auth\Auth;
use App\models\QueryBuilder;
use PDO;

//use App\models\Image;

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
        //$this->qb = new QueryBuilder('blog');

        //$this->qb = $qb;
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



/*


    public function getAll()
    {
        $all_users = $this->qb->getAll('users', ['id, email, username, userinfo, avatar, status, roles_mask']);
        foreach ($all_users as $user) {
            if ($user['roles_mask'] === 1) {
                $user['role'] = 'Администратор';
            } else {
                $user['role'] = 'Обычный пользователь';
            }
            $users[] = $user;
        }
        return $users;
    }

    public function getOne($id)
    {
        $user = $this->qb->getOne('users', ['id, email, username, userinfo, avatar, status, roles_mask'], [], null, ['id' => $id]);
        if ($user['roles_mask'] === 1) {
            $user['role'] = 'Администратор';
        } else {
            $user['role'] = 'Обычный пользователь';
        }
        return $user;
    }

    public function create()
    {
        try {
            $userId = $this->auth->admin()->createUser($_POST['email'], $_POST['password'], $_POST['username']);
            if (!empty($_FILES['image']['name'])) {
                $image = $this->image->createAvatar($_POST['email']);
                $this->qb->update('users', ['avatar' => $image], ['email' => $_POST['email']]);
            }
        } catch (\Delight\Auth\InvalidEmailException $e) {
            die('Invalid email address');
        } catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Invalid password');
        } catch (\Delight\Auth\UserAlreadyExistsException $e) {
            die('User already exists');
        }
    }

    public function delete($id)
    {
        try {
            $this->auth->admin()->deleteUserById($id);
        } catch (\Delight\Auth\UnknownIdException $e) {
            die('Unknown ID');
        }
    }

    public function edit($id)
    {
        $status = 0;
        $user = $this->getOne($id);
        $avatar = $user['avatar'];
        if ($_POST['banned']) {
            $status = 2;
        }
        if (!empty($_FILES['image']['name'])) {
            $this->image->deleteAvatar($user['email'], $user['avatar']);
            $avatar = $this->image->createAvatar($_POST['email']);
            if ($_SESSION['auth_email'] === $user['email']) {
                $_SESSION['auth_avatar'] = $avatar;
            }
        }
        $this->qb->update('users', ['username' => $_POST['username'], 'email' => $_POST['email'], 'avatar' => $avatar, 'status' => $status], ['id' => $id]);
        try {
            $this->auth->admin()->changePasswordForUserById($id, $_POST['password']);
        } catch (\Delight\Auth\UnknownIdException $e) {
            die('Unknown ID');
        } catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Invalid password');
        }

    }

    public function login()
    {
        try {
            $this->auth->login($_POST['email'], $_POST['password']);
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

    public function logout()
    {
        try {
            $this->auth->logOut();
        } catch (\Delight\Auth\NotLoggedInException $e) {
            die('Not logged in');
        }
    }

    public function register()
    {
        try {
            $userId = $this->auth->register($_POST['email'], $_POST['password'], $_POST['username']);
            if (!empty($_FILES['image']['name'])) {
                $image = $this->image->createAvatar($_POST['email']);
                $this->qb->update('users', ['avatar' => $image], ['email' => $_POST['email']]);
            }
            return $userId;
        } catch (\Delight\Auth\InvalidEmailException $e) {
            die('Invalid email address');
        } catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Invalid password');
        } catch (\Delight\Auth\UserAlreadyExistsException $e) {
            die('User already exists');
        } catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        }
    }
}
*/
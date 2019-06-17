<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);



echo ' app view autoresation form';


$this->layout('layout', ['title' => 'Creat User Form ']);
//d($name);
?>

<h1>Creat User FormProfile</h1>




<form class="form-signin" action="http://blogo/autoresation" method="post" enctype="multipart/form-data">


    <h1 class="h3 mb-3 font-weight-normal">Регистрация Нового пользователя</h1>

    <label for="inputEmail" class="sr-only">email</label>
    <input type="text" id="inputEmail" class="form-control" placeholder="будет проводиться верификация email" name="email">

    <label for="inputEmail" class="sr-only">password</label>
    <input type="text" id="inputEmail" class="form-control" placeholder="Будет проводиться верификация пароля" name="password">

    <label for="inputEmail" class="sr-only">username</label>
    <input type="text" id="inputEmail" class="form-control" placeholder="Будет проводиться верификация username" name="username">





    <input type="file" name="image"> <br>




    <button class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
</form>














































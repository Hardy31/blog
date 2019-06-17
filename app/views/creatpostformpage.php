<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);



echo ' app view creatpostform';


$this->layout('layout', ['title' => 'Creat Post Form Profile']);
//d($name);
?>

<h1>Creat Post FormProfile</h1>




<form class="form-signin" action="" method="post" enctype="multipart/form-data">


    <h1 class="h3 mb-3 font-weight-normal">Добавить запись</h1>

    <label for="inputEmail" class="sr-only">Название</label>
    <input type="text" id="inputEmail" class="form-control" placeholder="Название статьи" name="title_post">

    <label for="inputEmail" class="sr-only">Описание</label>
    <input type="text" id="inputEmail" class="form-control" placeholder="Краткое описание" name="description_post">

    <label for="inputEmail" class="sr-only">Содержание</label>
    <textarea  class="form-control" cols="30" rows="10" placeholder="Текст статьи" name="content_post"></textarea>

    <select class="custom-select" name="categories_post">
        <option selected>Open this select menu</option>
        <option selected value="жанр 1"> ganr1</option>
        <option value="жанр 2">ganr2</option>
        <option value="жанр 3">ganr3</option>
    </select>



    <input type="file" name="image"> <br>




    <button class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
</form>














































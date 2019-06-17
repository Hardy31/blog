<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);



echo ' app view aboutpage';


$this->layout('layout', ['title' => 'User Profile']);
//d($name);
?>

<h1>User Profile</h1>
<p>Hello, <?=$this->e($name)?></p>



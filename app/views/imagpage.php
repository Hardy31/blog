<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);




echo ' app view postspage';


$this->layout('layout', ['title' => 'Home Profile']);
//d($name);
?>

<h1>Imag Profile</h1>

d($postsInView);
<?php var_dump ($postsInView );?>
<?php foreach ($postsInView as $post) :?>
    <?php echo $post['id_photo'];?>
    <?php echo '<br>';?>
    <?php echo $post['photo_name'];?>
    <?php echo '<br>';?>
    <img class="card-img-top" src="../public/img/<?php echo $post['photo_name'];?>">
    <?php echo '<br>';?>
<?php endforeach;?>














































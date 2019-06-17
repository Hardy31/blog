<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);



echo ' app view imagpage';


$this->layout('layout', ['title' => 'Imag Profile']);
//d($name);
?>

<h1>Imag Profile</h1>



    <?php echo $postsInView[0]['title_post'];?>
    <?php echo '<br>';?>
    <?php echo $postsInView[0]['content_post'];?>
    <?php echo '<br>';?>
    <img class="card-img-top" src="../public/img/<?php echo $postsInView[0]['picture_post'];?>">
    <?php echo '<br>';?>















































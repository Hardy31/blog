<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);



echo ' app view homepage';


$this->layout('layout', ['title' => 'Home Profile']);
//d($name);
?>

<h1>Home Profile</h1>



<?php foreach ($postsInView as $post) :?>
    <?php echo $post['title_post'];?>
    <?php echo '<br>';?>
    <?php echo $post['content_post'];?>
    <?php echo '<br>';?>
    <?php echo '<br>';?>
<?php endforeach;?>














































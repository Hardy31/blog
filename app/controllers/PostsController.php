<?php



namespace App\controllers;


use App\models\Comment;
use App\models\QueryBuilder;
use League\Plates\Engine;
use PDO;



class PostsController
{
    private $templates;
    private $qb;


    public function __construct()
    {

        $this->templates = new Engine('../app/views');
        //S($this->templates);
    }

    public function index()
    {
        $db = new QueryBuilder('blog');
        $posts = $db->getAll('posts');
        $categories = $db->getAll('categories');
        //s($categories);
        echo $categories[0]['category'];
        echo $categories[1]['category'];


        echo $this->templates->render('postspage', ['postsInView' => $posts, 'categoriesInView' => $categories]);  //запуск view
    }
    public function ind()
    {
        $db = new QueryBuilder('blog');
        $posts = $db->getAll('posts');
        $categories = $db->getAll('categories');
        //s($categories);
        echo $categories[0]['category'];
        echo $categories[1]['category'];


        echo $this->templates->render('adminpostspage', ['postsInView' => $posts, 'categoriesInView' => $categories]);  //запуск view
    }


    public function indexx()
    {
        //echo ('1111111111111');


        if (headers_sent()) {
            var_dump(headers_list());
        }


        header('Location:/users');
        exit;
    }

    public function indexPagination()
    {
        $db = new QueryBuilder('blog');

        $posts = $db->getAll('posts');


        $items = $db->getFoPagination('posts');


        $totalItems = count($posts);
        $itemsPerPage = 3;
        $currentPage = $_GET['page'];
        $urlPattern = '?page=(:num)';




        echo $this->templates->render('postsppage', ['postsInView' => $items]);  //запуск view

    }

    public function creatpost()
    {

        $dbOptions = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $db = new PDO("mysql:host=localhost;dbname=blog; charset=utf8", 'root', '9959095', $dbOptions);

        if($_POST){
            //s($_POST);
            //s($_FILES);

            //Кодируем полученную картинку и переносим ее в папку ../public/img/ с расширение .jpg
            $newName = md5($_FILES['image']['name']) . '.jpg';
            move_uploaded_file($_FILES['image']['tmp_name'], '../public/img/' . $newName);


            //Создаем массив для передачи в QueryBuilder
            $data = [
                'id_user' => 1,
                'picture_post' => $newName,
                'title_post' => $_POST['title_post'],
                'description_post' => $_POST['description_post'],
                'content_post' => $_POST['content_post'],
                'categories_post' => $_POST['categories_post'],
            ];
            //s($data);

            //Создаю соединение с базой данных
            $db = new QueryBuilder('blog');
            $db->insert('posts', $data);
            header('Location: ../posts');
        }
        //echo $this->templates->getPage('public/userlogin');
        echo $this->templates->render('creatpostformpage');
    }

    public function deletepost($id=null)
    {

       // s ($id);
        echo ($id['id']);
        $db = new QueryBuilder('blog');
        $db->delete($id['id'], 'posts');

        //$this->post->delete($id[0]);
        header("Location: ../posts");
    }









/*


    public function creatpost()
    {
        s($_POST);
        s($_FILES);

        //Кодируем полученную картинку и переносим ее в папку ../public/img/ с расширение .jpg
        $newName = md5($_FILES['image']['name']) . '.jpg';
        move_uploaded_file($_FILES['image']['tmp_name'], '../public/img/' . $newName);


        //Создаем массив для передачи в QueryBuilder
        $data = [
            'id_user' => 1,
            'picture_post' => $newName,
            'title_post' => $_POST['title_post'],
            'description_post' => $_POST['description_post'],
            'content_post' => $_POST['content_post'],
            'categories_post' => $_POST['categories_post'],
        ];
        s($data);

        //Создаю соединение с базой данных
        $db = new QueryBuilder('blog');
        $db->insert('posts', $data);

        //header('Location:');

    }
*/
    public function getPostById($vars)
    {
        $db = new QueryBuilder('blog');
        //s($vars['id']);
        $post = $db->getOnePost('posts', $vars['id']);
        $comments = $db->getOnePost('comments', $vars['id']);
        s($comments);

        //$commentsFoBost = new Comment();
        //s($commentsFoBost);



        $treecomments = self::form_tree($comments,0);
        s($treecomments);

        $tree = self::build_tree($treecomments, 0);



        echo $this->templates->render('postpage', ['postsInView' => $post, 'tree' => $tree]);



        $treecomments = self::form_tree($comments,0);
        s($treecomments);

        $tree = self::build_tree($treecomments, 0);
        echo $this->templates->render('treecommentspage', ['tree' => $tree]);







    }

    public function getPostsByCategory($categories_post=null, $page=null)
    {

        $db = new QueryBuilder('blog');
        //$categories = $db->getAll('categories');

        $posts = $db->getPostsOnCategory('posts', $categories_post);

        //$data=$this->post->getPostsOnCategory($page, $category);
        //echo $this->tpl->getPage('public/posts', $data);


        $db = new QueryBuilder('blog');
        //$posts = $db->getAll('posts');
        $categories = $db->getAll('categories');
        echo $this->templates->render('postspage', ['postsInView' => $posts, 'categoriesInView' => $categories]);  //запуск view

    }
    static function form_tree($mess)
    {
        if (!is_array($mess)) {
            return false;
        }
        $tree = array();
        foreach ($mess as $value) {
            $tree[$value['id_comment_parent']][] = $value;
        }

        return $tree;
    }
    static function build_tree($cats, $parent_id)
    {

        if (is_array($cats) && isset($cats[$parent_id])) {
            $tree = '<ul>';
            foreach ($cats[$parent_id] as $cat) {
                $tree .= '<li>' . "User".' - '.$cat['id_user'].' : '.$cat['content_comment'];
               // $tree .= '<li>' . "User".' - '.$auth->getUsername($cat['id_user']).' : '.$cat['content_comment'];
                $tree .= self::build_tree($cats, $cat['id_comment']);
                $tree .= '</li>';
            }
            $tree .= '</ul>';
        } else {
            return false;
        }

        return $tree;
    }


}



























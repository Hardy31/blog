<?php
namespace App\models;

use App\models\QueryBuilder;

class Comment
{
    private $qb;

    public function __construct(QueryBuilder $qb)
    {
        $this->qb=$qb;

    }



    public function getAll()
    {
        $categories=$this->qb->getAll('comments');
        return $categories;
    }

    public function create()
    {
        //s($_POST);
        $this->qb->insert('comments', ['id_user'=>$_POST['id_user'], 'id_post'=>$_POST['id_post'], 'content_comment'=>$_POST['content_comment'], 'tag_show'=>$_POST['tag_show'], 'id_comment_parent'=>$_POST['id_comment_parent'] ] );
    }













    public function getOne($id)
    {
        $category=$this->qb->getOne('comments',['*'], [], null, ['id'=>$id]);
        return $category;
    }










    public function delete($id)
    {
        $this->qb->delete('comments',['id'=>$id]);
    }

    public function edit($id)
    {
        $this->qb->update('comments', $_POST, ['id'=>$id]);
    }
}
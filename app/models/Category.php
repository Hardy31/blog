<?php
namespace App\models;

use App\models\QueryBuilder;

class Category
{
    private $qb;




    public function __construct(QueryBuilder $qb)
    {
        $this->qb=$qb;
    }




    public function getAll()
    {
        $categories=$this->qb->getAll('categories');
        return $categories;
    }




    public function getOne($id)
    {
        $category=$this->qb->getOne('categories',['*'], [], null, ['id'=>$id]);
        return $category;
    }




    public function create()
    {
        $category_id=$this->qb->insert('categories', $_POST);
        return $category_id;
    }




    public function delete($id)
    {
        $this->qb->delete('categories',['id'=>$id]);
    }




    public function edit($id)
    {
        $this->qb->update('categories', $_POST, ['id'=>$id]);
    }
}
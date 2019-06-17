<?php

namespace App\models;
//require '../vendor/autoload.php';
use Aura\SqlQuery\QueryFactory;
use PDO;

class QueryBuilder
{

    private $pdo;
    private $queryFactory;

    public function __construct($db)
    {
        
        $dbOptions = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $this->pdo = new PDO("mysql:host=localhost;dbname=blog; charset=utf8", 'root', '9959095', $dbOptions);
        $this->queryFactory = new QueryFactory('mysql');

    }

    public function getAll($table){
        
        $select = $this->queryFactory->newSelect();
        $select
            ->cols(['*'])
            ->from($table) ;

        $sth = $this->pdo->prepare($select->getStatement());

        $sth->execute($select->getBindValues());
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);


        return $result;

    }
    public function getOnePost($table, $id_post){

        $select = $this->queryFactory->newSelect();
        $select
            ->cols(['*'])
            ->from($table)
            ->where('id_post = :id_post')
            ->bindValues(['id_post' => $id_post ]);;

        $sth = $this->pdo->prepare($select->getStatement());

        $sth->execute($select->getBindValues());
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);


        return $result;

    }
    public function getOneUser($table, $id){

        $select = $this->queryFactory->newSelect();
        $select
            ->cols(['*'])
            ->from($table)
            ->where('id = :id')
            ->bindValues(['id' => $id ]);;
        $sth = $this->pdo->prepare($select->getStatement());
        $sth->execute($select->getBindValues());
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }


    public function getFoPagination($table){
       
        $select = $this->queryFactory->newSelect();
        $select
            ->cols(['*'])
            ->from($table)
            ->setPaging(3)
            //->page($vars['id'] );
            ->page($_GET['page'] ?? 1);

        $sth = $this->pdo->prepare($select->getStatement());
        //S($sth);
        $sth->execute($select->getBindValues());
       
        $items = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $items;

    }


    public function insert( $tabl, $data){

        $insert= $this->queryFactory->newInsert();
        $insert
            ->into($tabl)
            ->cols($data);

        
        $sth = $this->pdo->prepare($insert->getStatement());

        $sth->execute($insert->getBindValues());

    }

    public function delete($id, $tabl){

        $delete = $this->queryFactory->newDelete();
        $delete
            ->from("$tabl")                   
            ->where('id_post = :id_post')
            ->bindValues(['id_post' => $id ]);         

        $sth = $this->pdo->prepare($delete->getStatement());

        $sth->execute($delete->getBindValues());
        var_dump ($sth->execute($delete->getBindValues()));

    }

    public function update( $tabl, $data, $id){

        $update = $this->queryFactory->newUpdate();
        $update
            ->table($tabl)                  
            ->cols($data)
            ->where('id_post = :id_post')
            ->bindValues(['id_post' => $id ]);         

        $sth = $this->pdo->prepare($update->getStatement());

        echo $id;

        $sth->execute($update->getBindValues());

    }

    public function getPostsOnCategory($table, $categories_post)
    {
        echo $categories_post['category'];
        $select = $this->queryFactory->newSelect();
        $select
            ->cols(['*'])
            ->from($table)
            ->where('categories_post = :categories_post')
            ->bindValues(['categories_post' => $categories_post['category']]);;

        $sth = $this->pdo->prepare($select->getStatement());
       s($sth);
      // echo $categories_post;
        $sth->execute($select->getBindValues());
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);


        return $result;

    }






}



?>

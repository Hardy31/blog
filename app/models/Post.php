<?php



namespace App\models;



Use App\models\QueryBuilder;

use Aura\SqlQuery\QueryFactory;
use PDO;



class Post
{
    private $qb;

    public function __construct (QueryBuilder $qb)
    {
       
        $this->qb=$qb;
    }



}

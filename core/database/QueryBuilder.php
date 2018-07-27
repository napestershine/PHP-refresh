<?php

/**
 * Class QueryBuilder
 */
class QueryBuilder
{

    /**
     * @var PDO
     */
    protected $pdo;

    /**
     * QueryBuilder constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @param $table
     * @param $intoClass
     * @return array
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {

        $sql = sprintf('insert into %s (%s) values (%s)',
         $table,
         implode(', ', array_keys($parameters)),
         ':' . implode(', :', array_keys($parameters))
         );

      try {
           $statement = $this->pdo->prepare($sql);

           $statement->execute($parameters);
      } catch (Exception $e) {
          die('Whoops, something went wrong');
      }

    }
}
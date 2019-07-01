<?php
class QueryBuilder
{
	protected $pdo;

    /*
    * Expects only an object of the PDO class
    * Assign that PDO object to a property
    */
    public function __construct(PDO $pdo)
    {
    	$this->pdo = $pdo;    
    }

    /**
    * Select all the data from a specific table
    *
    * @param $table string database table name
    * @return data as an object
    */
    public function selectAll($table)
    {
		$stmt = $this->pdo->prepare("SELECT * FROM {$table}");
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    /**
    * Insert data to a specific table into the database
    *
    * @param $table string database table name
    * @param $parameters array (form fields name and database columns name)
    * @return null 
    */
    public function insert($table, $parameters)
    {
        $sql = sprintf(
            "INSERT INTO {$table}(%s)VALUES(%s)",
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);
        } catch (Exception $e) {
            die('Woops! something went wrong');
        }        
    }
}
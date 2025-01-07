<?php
class Database {
    public $pdo;
    

    // Konstruktors - izpilds vienu reizi, kad objekts ir uzstaisīts.
    public function __construct($config) {
        // Dats Source Name = DSN
        $dsn = "mysql:" . http_build_query($config, "", ";");
        
        // PDO - PHP Data Object
        $this->pdo = new PDO($dsn);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    public function query($sql, $params) {
        // Sagatavo vaicājumu (statement) 
        $statement = $this->pdo->prepare($sql); // prepare ir metode (līdzīk funkcijai)
        // Izpildīt statements
        $statement->execute($params);
        // Atgriež datus
        return $statement;
    }
}

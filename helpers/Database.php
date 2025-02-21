<?php
    class Database {
        public static $pdo;
        

        // Konstruktors - izpilds vienu reizi, kad objekts ir uzstaisīts.
        public function __construct($config) {
            // Dats Source Name = DSN
            $dsn = "mysql:" . http_build_query($config, "", ";");
            
            // PDO - PHP Data Object
            self::$pdo = new PDO($dsn);
            self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        public static function query($sql, $params) {
            // Sagatavo vaicājumu (statement) 
            $statement = self::$pdo->prepare($sql); // prepare ir metode (līdzīk funkcijai)
            // Izpildīt statements
            $statement->execute($params);
            // Atgriež datus
            return $statement;
        }
    }
?>

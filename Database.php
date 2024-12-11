<?php

class Database {
    public function query($sql) {
            // Dats Source Name = DSN
        $dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_ipb23;charset=utf8mb4";
        
            // PDO - PHP Data Object
        $pdo = new PDO($dsn);

            // Sagatavo vaicājumu (statement) 
        $statement = $pdo->prepare($sql); // prepare ir metode (līdzīk funkcijai)
            // Izpildīt statement
        $statement->execute();

        // Dabūt rezultātu
        $data = $statement->fetchAll(PDO::FETCH_ASSOC); // var arī ievietot 2 iekavās
        return $data;
    }
}
?>
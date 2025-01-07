<?php 
    require "Database.php";

    $conf = require("config.php");
    $db = new DATABASE($conf["database"]);

    $select = "SELECT * FROM categories";
    $user_scorch  = [];

    if (isset($_GET["scorch"]) && $_GET["scorch"] != "") {
        $scorch = '%' . $_GET["scorch"] . '%';
        $select .= " WHERE category_name  LIKE :scorch";
        $user_scorch = ["scorch" => $scorch];
    }
    $pos = $db->query($select , $user_scorch)->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategorijas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>Kategorijas</header>

    <form> 
        <input name="scorch" type="text">
        <button>Meklēt</button>
    </form>
    <div class="conteiner">
        <?php
            if(count($pos) == 0) {
                echo "<div name='box'> Dundāli te nekā tāda nav! </div>";
            }
            foreach ($pos as $rezulrt) {
                echo "<div name='box'> $rezulrt[category_name] </div>";
            }
        ?>
    </div>
</body>
</html>
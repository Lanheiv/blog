<?php
    $select = "SELECT post.*, categories.category_name FROM post LEFT JOIN categories ON post.category_id = categories.id;";
    $params = [];

    if (!empty($_GET["q"])) {
        $search = "%" . $_GET["q"] . "%";
        $select .= " WHERE content LIKE '%ok%'";
        $params = ["content" => $search];
    } else {
        $params = [];
    }

    $posts = $db->query($select , $params)->fetchAll();

    $pagatitle = "Saraksts";
    require("views/posts/list/list.view.php");

    /* if dažādi veidi
    $y = isset($x) ? $x: "Nav vērtības"; //Ternery Operator - Trīskāršais operātors.
    $y = $x ?? "Nav vērtības"; // Null collection operator 
    */
?>
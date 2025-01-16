<?php
    require("views/components/header.php"); 
    require("views/components/navbar.php");
?>

<h1><?= htmlspecialchars($post["content"]) ?></h1>

<?php require("views/components/footer.php"); ?>
<?php

if (!Validator::number($_GET["id"])) {
    redirectIfNotFound();
}

$sql = "SELECT * FROM categories WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if (!$post) {
    redirectIfNotFound();
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["value"])) {
        $sql = "DELETE FROM categories WHERE id = :id";
        
        $db->query($sql , $params);
        header("Location: /"); exit();
    }
    header("Location: /show?id=" . $_GET["id"]); exit();
}
?>

<?php require("views/components/header.php"); ?>
<?php require("views/components/navbar.php"); ?>

<h1 class="center">Dzēst ierakstu</h1>

<form method="POST">
    <button name="value">Apstiprināt</button>
    <button>Atcelt</button>
</form>

<?php require("views/components/footer.php"); ?>
<?php

if (!Validator::number($_GET["id"])) {
    redirectIfNotFound();
} 

$sql = "SELECT * FROM categories";
$params = [];
$categories = $db->query($sql , $params)->fetchAll();


$sql = "SELECT * FROM categories WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if (!$post) {
    redirectIfNotFound();
} 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    $params = ["id" => $_GET["id"], "category_name" => $_POST["content"]];
    $sql = "UPDATE post SET content = :content, category_id = :category_id WHERE id = :id";

    if(!Validator::string($_POST["content"], max: 50)) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    } else {
        $db->query($sql , $params);
        header("Location: /show?id=" . $_GET["id"]); exit();
    }
}
?>

<?php require("views/components/header.php"); ?>
<?php require("views/components/navbar.php"); ?>

<h1 class="center">Rediģēt bloga ierakstu</h1>

<form method="POST">
  
    <select name="categories">
        <?php foreach ($categories as $categ) { ?>
            <option value="<?=$categ['id']?>" <?php if($post["category_id"] == $categ['id']){ echo "selected"; } ?> ><?=$categ["category_name"]?></option>
        <?php } ?>
    </select>   

    <button>Pievienot</button>
</form>

<?php if(isset($errors["content"])) { ?>
    <p><?= $errors["content"] ?></p>
<?php } ?>

<?php require("views/components/footer.php"); ?>

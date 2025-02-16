<?php

if (isset($_POST["content"])){
    $errors = [];

    $params = ["content" => $_POST["content"]];
    $sql = "INSERT INTO categories (category_name) VALUES (:content);";

    //dd($params);

    if(!Validator::string($_POST["content"], max: 50)) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm.";
    } else {
        $db->query($sql , $params);
        header("Location: /categories.list"); exit();
    }   
}
?>


<?php require("views/components/header.php"); ?>
<?php require("views/components/navbar.php"); ?>

<h1 class="center">Izveidot kategoriju</h1>

<form method="POST">
    <input name="content" type="text" value="<?= $_POST['content'] ?? '' ?>">
    
    <button>Pievienot</button>
</form>

<?php if(isset($errors["content"])) { ?>
    <p><?= $errors["content"] ?></p>
<?php } ?>

<?php require("views/components/footer.php"); ?>
<?php require("views/components/header.php"); ?>
<?php require("views/components/navbar.php"); ?>

<h1 class="center">Rediģēt kategoriju</h1>

<form method="POST">
    <input name="content" type="text" value="<?= $_POST["content"] ?? $post["category_name"] ?>">
    <button>Pievienot</button>
</form>

<?php if(isset($errors["content"])) { ?>
    <p><?= $errors["content"] ?></p>
<?php } ?>

<?php require("views/components/footer.php"); ?>
<?php require("views/components/header.php"); ?>
<?php require("views/components/navbar.php"); ?>

<h1>Rediģēt bloga ierakstu</h1>

<form method="POST">
    <input type="hidden" name="id" value="<?= $post["id"] ?? '' ?>">
    <input name="content" type="text" value="<?= $post['content'] ?? "" ?>">
    <button>Pievienot</button>
</form>

<?php if(isset($errors["content"])) { ?>
    <p><?= $errors["content"] ?></p>
<?php } ?>

<?php require("views/components/footer.php"); ?>
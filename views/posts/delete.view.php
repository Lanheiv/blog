<?php require("views/components/header.php"); ?>
<?php require("views/components/navbar.php"); ?>

<h1>Dzēst ierakstu</h1>

<form method="POST">
    <input type="hidden" name="id" value="<?= $post["id"] ?? '' ?>">
    <button name="value" value="ja">Apstiprināt</button>
    <button name="value" value="ne">Atcelt</button>
</form>

<?php require("views/components/footer.php"); ?>
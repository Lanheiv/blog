<?php require("views/components/header.php"); ?>
<?php require("views/components/navbar.php"); ?>

<div class="box">
    <h1 class="center">Izveidot kategoriju</h1>

    <form method="POST" class="create-form">
        <input name="content" type="text" placeholder="Šeit ievadiet kategoriju" value="<?= $_POST['content'] ?? '' ?>">
        
        <button>Pievienot</button>
    </form>

    <?php if(isset($errors["content"])) { ?>
        <p><?= $errors["content"] ?></p>
    <?php } ?>
</div>

<?php require("views/components/footer.php"); ?>
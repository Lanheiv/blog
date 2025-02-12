<?php require("views/components/header.php"); ?>
<?php require("views/components/navbar.php"); ?>

<h1 class="center">Izveidot bloga ierakstu</h1>

<form method="POST">
    <input name="content" type="text" value="<?= $_POST['content'] ?? '' ?>">
    
    <select name="categories">
        <!-- <option value="0">--Izvēlaties kādu no kategorijām--</option> -->
        <?php foreach ($categories as $categ) { ?>
            <option value="<?=$categ['id']?>"><?=$categ["category_name"]?></option>
        <?php } ?>
    </select>
    
    <button>Pievienot</button>
</form>

<?php if(isset($errors["content"])) { ?>
    <p><?= $errors["content"] ?></p>
<?php } ?>

<?php require("views/components/footer.php"); ?>
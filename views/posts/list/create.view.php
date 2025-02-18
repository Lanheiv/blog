<?php require("views/components/header.php"); ?>
<?php require("views/components/navbar.php"); ?>

<div class="box">

    <h1>Izveidot bloga ierakstu</h1>

    <form method="POST" class="create-form">
        <input name="content" type="text" placeholder="Šeit ievadiet rakstu" value="<?= $_POST['content'] ?? '' ?>">
        
        <select name="categories">
            <option value="0">--Tukšums--</option>
            <?php foreach ($categories as $categ) { ?>
                <option value="<?=$categ['id']?>"><?=$categ["category_name"]?></option>
            <?php } ?>
        </select>
        
        <button>Pievienot</button>
    </form>    

    <?php if(isset($errors["content"])) { ?>
        <p><?= $errors["content"] ?></p>
    <?php } ?>
</div>

<?php require("views/components/footer.php"); ?>
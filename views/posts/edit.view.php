<?php require("views/components/header.php"); ?>
<?php require("views/components/navbar.php"); ?>

<h1 class="center">Rediģēt bloga ierakstu</h1>

<form method="POST">
    <input name="content" type="text" value="<?= $_POST["content"] ?? $post["content"] ?>">
    
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
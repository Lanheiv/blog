<?php require("views/components/header.php"); ?>
<?php require("views/components/navbar.php"); ?>

<main class="block">

    <h1>Rediģēt bloga ierakstu</h1>

    <form method="POST">
        <!-- teksts -->
        <input name="content" type="text" value="<?= $_POST["content"] ?? $post["content"] ?>">
        
        <!-- kategorija -->
        <select name="categories">
            <option value="0">--Tukšums--</option>
            <?php foreach ($categories as $categ) { ?>
                <option value="<?=$categ['id']?>" <?php if($post["category_id"] == $categ['id']){ echo "selected"; } ?> ><?=$categ["category_name"]?></option>
            <?php } ?>
        </select>   

        <button>Pievienot</button>
    </form>

    <?php if(isset($errors["content"])) { ?>
    <p><?= $errors["content"] ?></p>
    <?php } ?>
</main>

<?php require("views/components/footer.php"); ?>
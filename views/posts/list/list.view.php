<?php require("views/components/header.php");?>
<?php require("views/components/navbar.php");?>

<h1 class="center">Saraksts</h1>
<form>
    <input name="q" type="text" value="<?= $_GET["q"] ?? '' ?>">
    <button>Meklēt</button>
</form>
    
<?php if(count($posts) == 0) { ?>
    <p>Tukš</p>
<?php } ?>

<table class="list">
    <tr>
        <th>Nosaukums</th>
        <th>Kategorija</th>
    </tr>
    <?php foreach ($posts as $g) { ?>
        <tr>
            <th><a href="/list/show?id=<?= $g["id"] ?>"> <?= htmlspecialchars($g["content"]);?></a></th>
            <th><?= $g["category_name"] ?></th>
        </tr>
    <?php } ?>
</table>

<?php require("views/components/footer.php"); ?>
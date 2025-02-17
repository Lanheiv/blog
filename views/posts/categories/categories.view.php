<?php require("views/components/header.php");?>
<?php require("views/components/navbar.php");?>

<h1 class="center">Saraksts</h1>
<form>
    <input name="q" type="text" value="<?= $_GET["q"] ?? '' ?>">
    <button>Meklēt</button>
</form>
    
<?php if(count($categories) == 0) { ?>
    <p>Tukš</p>
<?php } ?>

<ul class="list">
<?php foreach ($categories as $g) { ?>
    <li><a href="categories/show?id=<?= $g["id"] ?>"> <?= htmlspecialchars($g["category_name"]); ?> </a></li>
<?php } ?>
</ul>

<?php require("views/components/footer.php"); ?>
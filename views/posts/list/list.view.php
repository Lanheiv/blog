<?php require("views/components/header.php");?>
<?php require("views/components/navbar.php");?>

<div class="table">

    <h1>Saraksts</h1>

    <form class="serch">
        <input name="q" type="text" value="<?= $_GET["q"] ?? '' ?>">
        <button>Meklēt</button>
    </form>

    <ul class="table-box">
        <!-- izvada ja nekā nav -->
        <?php if(count($posts) == 0) { ?>
            <li>
                <h3>Nav nekādu datu tabulā</h3>
            </li>
        <?php } else { ?>

        <!-- izvada ja ir kautkas -->
        <?php foreach($posts as $posts) {?>
            <li class="table-item">
                <a href="/list/show?id=<?= $posts["id"] ?>"> <?= htmlspecialchars($posts["content"]);?></a>
                <?= $posts["category_name"] ?>
            </li>
        <?php } } ?>
    </ul>
</div>

<?php require("views/components/footer.php"); ?>
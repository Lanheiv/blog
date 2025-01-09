    <?php require("components/header.php"); ?>

    <h1>Saraksts</h1>
    <form>
        <input name="q" type="text" value="<?= $_GET["q"] ?? '' ?>">
        <button>Meklēt</button>
    </form>
    
    <?php if(count($posts) == 0) { ?>
        <p>Dundāli te nekā tāda nav!</p>
    <?php } ?>

    <ul>
    <?php foreach ($posts as $g) { ?>
        <li> <?= $g["content"]; ?> </li>
    <?php } ?>
    </ul>
    <?php require("components/footer.php"); ?>
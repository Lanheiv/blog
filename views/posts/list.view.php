    <?php require("views/components/header.php"); 
          require("views/components/navbar.php");
    ?>

    <h1>Saraksts</h1>
    <form>
        <input name="q" type="text" value="<?= $_GET["q"] ?? '' ?>">
        <button>Meklēt</button>
    </form>
    
    <?php if(count($posts) == 0) { ?>
        <p>Tukš</p>
    <?php } ?>

    <ul>
    <?php foreach ($posts as $g) { ?>
        <li><a href="show?id=<?= $g["id"] ?>"> <?= $g["content"]; ?> </a></li>
    <?php } ?>
    </ul>
    <?php require("views/components/footer.php"); ?>
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saraksts</title>
</head>
<body>
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
    <img src="assets/shampoo.PNG">
</body>
</html>
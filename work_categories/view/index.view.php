<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategorijas</title>
    <link rel="stylesheet" href="categories.style">
</head>
<body>
    <header>Kategorijas</header>

    <form> 
        <input name="scorch" type="text" value="<?= $_GET["q"] ?? '' ?>">
        <button>Meklēt</button>
    </form>
    <div class="conteiner">
        <?php
            if(count($pos) == 0) {
                echo "<div name='box'> Dundāli te nekā tāda nav! </div>";
            }
            foreach ($pos as $rezulrt) {
                echo "<div name='box'>" . $rezulrt["category_name"] . "</div>";
            }
        ?>
    </div>
</body>
</html>
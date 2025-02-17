<?php
    return [
        "/" => "controllers/index.php",

        "/list" => "controllers/posts/list/list.php",
        "/list/show" => "controllers/posts/list/list-show.php",
        "/list/creat" => "controllers/posts/list/list-create.php",
        "/list/edit" => "controllers/posts/list/list-edit.php",
        "/list/delete" => "controllers/posts/list/list-delete.php",

        "/categories" => "controllers/posts/categories/categories.php",
        "/categories/show" => "controllers/posts/categories/categories-show.php",
        "/categories/edit" => "controllers/posts/categories/categories-edit.php",
        "/categories/delete" => "controllers/posts/categories/categories-delete.php",
        "/categories/create" => "controllers/posts/categories/categories-create.php"
    ];
?>
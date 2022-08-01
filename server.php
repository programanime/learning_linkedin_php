<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sample</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<?php 
    require "src/variables.php";
    require_once "src/functions.php";
    include_once "src/functions.php";

    require_once "src/namespace_sample.php";

    include "src/templates/header.php";
    include "src/templates/sidebar.php";
    echo "this is the end<br/>";
    echo power(4)."<br/>";
    echo learning\power(4)."<br/>";
    include "src/templates/footer.php";
?>
</body>
</html>

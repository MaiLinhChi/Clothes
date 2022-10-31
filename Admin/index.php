<?php
include "Model/connect.php";
include "Model/product.php";
session_start();
include "Model/uploadimage.php";
include "Model/login.php";
// set_include_path(get_include_path().PATH_SEPARATOR.'Model/');
// spl_autoload_extensions('.php');
// spl_autoload_register();
?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Admin</title>
</head>

<body>
    <?php
        include "./View/header/header.php";
    ?>

    <div class="container">
        <div class="row">
            <?php
                $ctrl = "product";

                if(isset($_GET['action'])) {
                    $ctrl = $_GET['action'];
                }

                include 'Controller/'.$ctrl.'.php';
            ?>
        </div>
    </div>
    
    <?php
        include "./View/footer/footer.php";
    ?>  
</body>

</html>
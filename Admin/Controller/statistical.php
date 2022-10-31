<?php
    $action = "statistical";

    switch($action) {
        case "statistical":
            isset($_SESSION["admin"]) ? include "./View/main/statistical.php" : include "./View/main/login.php";
        break;
    }
?>
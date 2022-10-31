<?php
    include "./Model/connect.php";
    include "./Model/product.php";
    include "./Model/user.php";
    include "./Model/cart.php";
    include "./Model/order.php";
    include "./Model/page.php";
    include "./Model/starts.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Clothes</title>
    <style>
        .nav-item {
            margin-left: 20px;
        }

        .footer {
            color: black;
        }

        .footer__link {
            color: black;
        }
        .thean {
            height: 250px;
            width: 100%;
            position: relative;
            overflow: hidden;
            color: black;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.2);
        }

        .thean:hover .hieuungsp {
            animation: hieuungnen linear.4s forwards;
        }

        @keyframes hieuungnen {
            from {
                left: -230px;
            }

            to {
                left: 0;
            }
        }

        .container {
            width: 1200px;
        }

        .hieuungsp {
            height: 300px;
            width: 100%;
            background: gray;
            position: absolute;
            right: 300px;
            opacity: 0.8;
        }

        .chu {
            margin-top: 70px;
            color: black;
        }
        .active {
            margin-right: 20px;
        }

        body {
            overflow-x: hidden;
        }
        .be-comment-block {
            margin-bottom: 20px !important;
            border: 1px solid #edeff2;
            border-radius: 2px;
            border:1px solid #ffffff;
            width: 600px;
            margin-left: 40px;
        }

        .comments-title {
            font-size: 16px;
            color: #262626;
            margin-bottom: 15px;
            font-family: 'Conv_helveticaneuecyr-bold';
        }

        .be-img-comment {
            width: 60px;
            height: 60px;
            float: left;
            margin-bottom: 15px;
            text-align: center;
        }

        .be-ava-comment {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        .be-comment-content {
            margin-left: 80px;
        }

        .be-comment-content span {
            display: inline-block;
            width: 49%;
            margin-bottom: 15px;
        }

        .be-comment-name {
            font-size: 13px;
            font-family: 'Conv_helveticaneuecyr-bold';
        }

        .be-comment-content a {
            color: #383b43;
        }

        .be-comment-content span {
            display: inline-block;
            width: 49%;
            margin-bottom: 15px;
        }

        .be-comment-time {
            text-align: right;
        }

        .be-comment-time {
            font-size: 11px;
            color: #b4b7c1;
        }

        .be-comment-text {
            font-size: 13px;
            line-height: 18px;
            color: #7a8192;
            display: block;
            background: #f6f6f7;
            border: 1px solid #edeff2;
            padding: 4px 20px 4px 20px;
        }
    </style>
</head>
<body>

    <?php 
        // header
        include "./View/header/header.php";
        
        // body
        $ctl = "home";
        if(isset($_GET["action"])) {
            $ctl = $_GET["action"];
        }

        include "./Controller/" . $ctl . ".php";

        // // footer
        include "./View/footer/footer.php";
    ?>
</body>
</html>

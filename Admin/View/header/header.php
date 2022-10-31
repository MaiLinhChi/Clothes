<header class="row mb-5">
    <section class="col-12" style="height:40px;">
        <div class="col-12">
            <div class="row">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <div class="container">
                        <a class="navbar-brand" href="index.php">Trang chủ</a>

                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?action=product">Sản Phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?action=import">Import Csv</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?action=statistical" class="nav-link">Thống kê</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <?php
                                if(!isset($_SESSION["admin"])) {
                                echo '<li class="nav-item">
                                        <a href="index.php?action=login" class="nav-link">Đăng nhập</a>
                                    </li>';
                                }
                            ?>
                            <?php
                                if(isset($_SESSION["admin"])) {
                                    echo '
                                            <li class="nav-item"><a class="nav-link" style="color: red">' .$_SESSION["admin"]. '</a></li>
                                            <li class="nav-item">
                                                <a href="index.php?action=login&act=logout" class="nav-link">Đăng xuất</a>
                                            </li>
                                        ';
                                }
                            ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </section>
</header>
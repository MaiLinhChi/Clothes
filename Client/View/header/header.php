<header>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="index.php?action=home" class="navbar-brand"><i class="fas fa-home"></i> Trang chủ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <form class="d-flex" action="index.php?action=home&act=search" method="post">
                            <input type="text" name="search" class="form-control me-2" placeholder="Tìm Kiếm"/>
                            <button class="btn btn-btn btn-primary" type="submit">Search</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?action=cart" class="nav-link">
                            <i class="fas fa-shopping-cart"></i> Giỏ hàng
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?action=order" class="nav-link"><i class="fas fa-file-invoice-dollar"></i> Thanh toán</a>
                    </li>
                </ul>
                <ul class="mr-auto navbar-nav">
                    <li class="nav-item">
                        <?php
                            if(isset($_SESSION['makh'])):
                                $name=$_SESSION['tenkh'];
                        ?>
                            <a class="nav-link"><i class="fas fa-hand-peace"></i> <?php echo "Xin chào ".$name;?></a>
                        <?php
                            else:
                                echo '<a href="" class="nav-link"><i class="fas fa-hand-peace"></i> Xin chào</a>';
                        ?>
                        <?php
                            endif;
                        ?>
                    </li>
                    <?php
                        if(!isset($_SESSION["taikhoan"])) {
                            echo '
                                    <li class="nav-item">
                                        <a href="index.php?action=registration" class="nav-link"><i class="far fa-registered"></i> Đăng Ký</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?action=login" class="nav-link"><i class="fas fa-user"></i> Đặng Nhập</a>
                                    </li>
                            ';
                        } else {
                            echo '
                                <li class="nav-item">
                                    <a href="index.php?action=login&act=logout" class="nav-link"><i class="fas fa-sign-out-alt"></i> Đặng Xuất</a>
                                </li>
                            ';
                        }
                    ?>
                </ul>
            </div>  
        </div>
    </nav>
</header>

<section>
    <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="https://images.pexels.com/photos/8386651/pexels-photo-8386651.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" style="object-fit: cover;" width="100%" height="500px">
    </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    </a>

    </div>
</section>
<div class="container mb-5">
    <h1 class="text-center">Đăng nhập</h1>
    <form class="mx-auto" method="post" action="index.php?action=login&act=login_action" style="width: 600px">
        <div class="mb-3">
            <label for="name" class="text-uppercase text-sm">Tài Khoản</label>
            <input type="text" id="name" placeholder="Username" name="adminname" class="form-control mb">
        </div>
        <div class="mb-3">
            <label for="password" class="text-uppercase text-sm">Mật Khẩu</label>
            <input type="password" id="password" placeholder="Password" name="adminpass" class="form-control mb">
        </div>
        <button class="btn btn-primary btn-block" name="login" type="submit">Đăng Nhập</button>
    </form>
</div>

<?php
    include "./View/header/banner.php";
?>

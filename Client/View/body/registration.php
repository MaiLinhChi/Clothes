<div class="container mt-5"> 
  <div class="row"> 
    <div class="col-md-5"> 
      <legend class="text-center mb-5">
          Đăng ký thành viên!
      </legend> 
      <form action="index.php?action=registration&act=registration_action" method="post" class="form" role="form"> 
        <div class="row"> 
          <div class="col-xs-4 col-md-4"> 
            <label for="email">Tên Khách Hàng:</label>
          </div>
          <div class="col-xs-8 col-md-8">
            <input class="form-control" name="name" placeholder="Tên khách hàng" required="" autofocus="" type="text"> 
          </div> 
          <div class="col-xs-4 col-md-4"> 
            <label for="email">Địa chỉ:</label>
          </div>
          <div class="col-xs-8 col-md-8">
            <input class="form-control" name="address" placeholder="Địa chỉ khách hàng" required="" autofocus="" type="text"> 
          </div> 
          <div class="col-xs-4 col-md-4"> 
            <label for="email">Số Điện Thoại:</label>
          </div>
          <div class="col-xs-8 col-md-8">
            <input class="form-control" name="phone" placeholder="Số điện thoại khách hàng" required="" autofocus="" type="text"> 
          </div> 
          <div class="col-xs-4 col-md-4">
            <label for="email">Tên Đăng Nhập:</label>
          </div> 
          <div class="col-xs-8 col-md-8">
            <input class="form-control" name="username" placeholder="Tên đăng nhập" required="" type="text"> 
          </div> 
        </div>
        <label for="email">Email:</label> 
        <input class="form-control" name="email" placeholder="Email" type="email">
        <input class="form-control" name="password" placeholder="Mật khẩu" type="password">
        <input class="form-control" name="repeatpass" placeholder="Nhập lại mật khẩu" type="password">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="registration">Đăng ký</button> 
      </form> 
    </div> 
    <div class="col-md-7 banner-sec">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="https://cdn.stocksnap.io/img-thumbs/960w/woman-shopping_JN0TSD4UG5.jpg" alt="First slide" style="width: 100%; height: 500px">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>This is Heaven</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
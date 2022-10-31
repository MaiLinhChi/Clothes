<section class="login-block my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3 class="text-center"><b>Login Now</b></h3>
        <form  action="index.php?action=login&act=login_action" class="login-form" method="post">
          <div class="form-group my-4">
            <label for="exampleInputEmail1" class="text-uppercase">Username</label>
            <input type="text" class="form-control" name="username" placeholder="">
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
            <input type="password" class="form-control" name="password" placeholder="">
          </div>
          <div class="text-center">
            <button class="btn btn-primary" type="submit" name="login">Đăng Nhập</button> 
          </div>
        </form>
      </div>
      
      <div class="col-md-8 banner-sec">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
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
</section>
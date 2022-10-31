<?php
    if(isset($_GET["act"])) {
      if($_GET["act"] == "insert") {
        $ac = 1;
      } elseif($_GET["act"] == "edit") {
        $ac = 2;
      } else {
        $ac = 0;
      }
    }
?>
<?php
  if($ac == 1) {
    echo "<h1>ADD PRODUCT</h1>";
  } elseif($ac == 2) {
    echo "<h1>Sữa sản phẩm</h1>";
  } else {
    echo "<h1>404 NOT FOUND</h1>";
  }
?>
<div class="row col-md-4 col-md-offset-4" >
  <?php
      if(isset($_GET["id"])) {
        $mahh = $_GET["id"];
        $Product = new Product();
        $result = $Product->getProductById($mahh);

        $tenhh = $result["tenhh"];
        $dongia = $result["dongia"];
        $giamgia = $result["giamgia"];
        $hinhanh = $result["hinhanh"];
        $maloai = $result["maloai"];
        $tenloai = $result["tenloai"];
        $soluotxem = $result["soluotxem"];
        $ngaylap = $result["ngaylap"];
        $mota = $result["mota"];
        $tonkho = $result["tonkho"];
        $mausac = $result["mausac"];
      }
  ?>
  <form action="index.php?action=product&act=update" method="post" enctype="multipart/form-data">
  
    <table class="table" style="border: 0px;">
      <tr>
        <td>Mã hàng</td>
        <td> <input type="text" style="background-color: #E9ECEF; cursor: default; outline:none; border: none" class="form-control" name="mahh" value="<?php if(isset($mahh)) echo $mahh ?>" /></td>
      </tr>
      <tr>
        <td>Tên hàng</td>
        <td><input type="text" class="form-control" name="tenhh"  maxlength="100px" value="<?php if(isset($tenhh)) echo $tenhh ?>"></td>
      </tr>
      <tr>
        <td>Đơn giá</td>
        <td><input type="number" class="form-control" name="dongia" value="<?php if(isset($dongia)) echo $dongia ?>"></td>
      </tr>
      <tr>
        <td>Giảm giá</td>
        <td><input type="number" class="form-control" name="giamgia" value="<?php if(isset($giamgia)) echo $giamgia ?>" ></td>
      </tr>
      <tr>
        <td>Hình</td>
        <td>
          <label><img width="50px" height="50px" src="./Content/img/main/<?php if(isset($hinhanh)) echo $hinhanh ?>"></label>
          Chọn file để upload:
          <input type="file" name="image" id="fileupload" value="<?php if(isset($hinhanh)) echo $hinhanh ?>">
        </td>
      </tr>
      <tr>
        <input type="number" hidden value="<?php if(isset($maloai)) echo $maloai ?>" name="maloai">
      </tr>
      <tr>
        <td>Tên loại</td>
        <td>
          <select name="number" class="form-control" style="width:150px;">
            <?php
              $isSelected = 0;
              if(isset($tenloai)) {
                  $isSelected = $tenloai;
                  echo $isSelected;
              } 
              $products = $Product->getCategoryList();
              while($product = $products->fetch()):
            ?>
            <option value="<?php echo $product["maloai"] ?>" <?php if($isSelected == $product["tenloai"]) echo "selected" ?>>
              <?php echo $product["tenloai"] ?>
            </option>
            <?php
              endwhile;
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Số lượt xem</td>
        <td>
          <input type="number" class="form-control" name="soluotxem" value="<?php if(isset($soluotxem)) echo $soluotxem ?>" >
        </td>
      </tr>
      <tr>
        <td>Ngày lập</td>
        <td><input type="text" class="form-control" name="ngaylap" value="<?php if(isset($ngaylap)) echo $ngaylap ?>">
        </td>
      </tr>
      <tr>
        <td>Mô tả</td>
        <td><textarea type="text" class="form-control" name="mota"><?php if(isset($mota)) echo $mota ?></textarea>
        </td>
      </tr>
      <tr>
        <td>Số lượng tồn</td>
        <td><input type="number" class="form-control" name="tonkho" value="<?php if(isset($tonkho)) echo $tonkho ?>">
        </td>
      </tr>
      <tr>
        <td>Màu sắc</td>
        <td><input type="text" class="form-control" name="mausac" value="<?php if(isset($mausac)) echo $mausac ?>">
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" value="submit" name="submit">
        </td>
      </tr>
    </table>
  </form>
</div>
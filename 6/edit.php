<html>
<head>
<title> Edit Data Barang </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>

  <?php
include "conf/koneksi.php";

if(isset($_GET['id'])){
    $sql=mysqli_query($con, "Select * from tabel_product where id='$_GET[id]'");
    $s=mysqli_fetch_array($sql);
}
  ?>
  <div class="container">
  <h2>Form Data Barang</h2>
  <form action="update.php" method="POST">
  <div class="form-group">
  <label for="kasir"></label>
  <select class="form-control" id="id" name="id">
  <?php
    $tampil=mysqli_query($con, "SELECT * FROM tabel_cashier ORDER BY name");
        if ($s[id]==0){
            echo "<option value=0 selected></option>";
        }

        while($w=mysqli_fetch_array($tampil)){
            if ($s[id]==$w[id]){
            echo "<option value =$w[id] selected>$w[name]</option>";
        }
        else{
            echo "<option value=$w[id]>$w[name]</option>";
        }
        }
        ?>
  </select>
  <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $s['id'];?>">
</div>
    <div class="form-group">
      <label for="name"></label>
      <input type="text" class="form-control" id="name" value="<?php echo $s['name'];?>" name="name">
    </div>
    <div class="form-group">
  <label for="kategori"></label>
  <select class="form-control" id="id_category" name="id_category">
  <?php
    $tampil=mysqli_query($con, "SELECT * FROM tabel_category ORDER BY name");
        if ($s[id]==0){
            echo "<option value=0 selected></option>";
        }

        while($w=mysqli_fetch_array($tampil)){
            if ($s[id]==$w[id]){
            echo "<option value =$w[id] selected>$w[name]</option>";
        }
        else{
            echo "<option value=$w[id]>$w[name]</option>";
        }
        }
        ?>
  </select>
</div>
<div class="form-group">
      <label for="price"></label>
      <input type="text" class="form-control" id="price" value="<?php echo $s['price'];?>" name="price">
    </div>
    <button type="submit" class="btn btn-danger">EDIT</button>
  </form>
</div>

</body>
</html>
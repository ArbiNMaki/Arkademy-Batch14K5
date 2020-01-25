<html>
<head>
<title>Tambah</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
.style1 {font-size: large}
</style>
</head>
<body>
<div class="container">
  <h1 class="style1">ADD</h1>
  <form action="simpan.php" method="POST">
    <div class="form-group">
	<select class="form-control" id="sel1" name="id_cashier">
    <?php
    include ("conf/koneksi.php");
    $sql=mysqli_query($con, "select * from tabel_cashier");
    ?>
    <?php
    while ($s=mysqli_fetch_array($sql)){
        echo"<option value=$s[id]>$s[name]</option>";
       }
       ?>
      </select>
    </div>
    <div class="form-group">
	<label for="name"></label>
  <input type="name" class="form-control" id="name" name="name" placeholder="Produk">
</div>
<div class="form-group">
	<select class="form-control" id="sel1" name="id_category">
    <?php
    include ("conf/koneksi.php");
    $sql=mysqli_query($con, "select * from tabel_category");
    ?>
    <?php
    while ($s2=mysqli_fetch_array($sql)){
        echo"<option value=$s2[id]>$s2[name]</option>";
       }
       ?>
	   </select>
    </div>
	<div class="form-group">
      <label for="price"></label>
      <input type="price" class="form-control" id="price" name="price" placeholder="Harga">
</div>
    <div align="right">
      <button type="submit" class="btn btn-danger btn-lg">ADD</button>
    </div>
  </form>
</div>

</body>
</html>
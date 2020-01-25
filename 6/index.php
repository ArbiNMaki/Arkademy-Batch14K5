<html>
<head>
<title>Tampil</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
}
.style4 {
	font-size: large;
	font-weight: bold;
}
.style5 {color: #FF9999}
.style6 {color: #FFFFFF}
-->
</style>
</head>
<body>
<?php
include "conf/koneksi.php";
$tampil=mysqli_query($con,"select * from tabel_product");
?>

<div class="container"><span class="style6">.</span>
  <table width="1098" border="0">
    <tr>
      <td width="919" height="38"><span class="style4"><span class="style5">ARKADEMY</span> COFFEE SHOP</span></td>
      <td width="169"><div align="right"><a href="add.php"><span class="btn btn-danger btn-md style1 style6">ADD</span></a></div></td>
    </tr>
  </table>
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Cashier</th>
        <th>Product</th>
        <th>Category</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    while($s=mysqli_fetch_array($tampil)){
        echo "<tr><td>$no</td>";
					$datakasir=mysqli_query ($con, "select * from tabel_cashier where id='$s[id_cashier]'");
                    $s2=mysqli_fetch_array ($datakasir);
                    echo"<td>$s2[name]</td>
                    <td>$s[name]</td>";

                    $datakategori=mysqli_query ($con, "select * from tabel_category where id='$s[id_category]'");
                    $s3=mysqli_fetch_array ($datakategori);
        echo"       <td>$s3[name]</td>";
        echo"       <td>Rp.$s[price]</td>";
                    ?>
  <td>
    <a href=<?php echo 'edit.php?id=' . $s["id"] ?>>
                    Edit
    </a>
	|
                    <a href=<?php echo 'delete.php?id=' . $s["id"] ?>>
                    Delete</a>
      </td>
</tr>
    <?php                
                    $no++;
    }
    ?>
    </tbody>
  </table>
</div>
</body>
</html>
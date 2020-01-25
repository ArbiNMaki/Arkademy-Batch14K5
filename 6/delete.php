<?php
include "conf/koneksi.php";

if(isset($_GET['id'])){

$sql=mysqli_query($con, "Delete from tabel_product where id='$_GET[id]'");
                        
    if($sql){
        header('location:index.php');

    }else{
        echo"Data Gagal Dihapus"; 
    }

}

?>
<?php
include "conf/koneksi.php";

if(isset($_POST['name'])){

$sql=mysqli_query($con, "insert into tabel_product (id_cashier, name, id_category, price)
                        values ('$_POST[id_cashier]','$_POST[name]','$_POST[id_category]','$_POST[price]')"); 


    if($sql){
        header('location:index.php');

    }else{
        echo"Data Gagal Disimpan"; 
    }

}

?>
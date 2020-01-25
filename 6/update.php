<?php
include "conf/koneksi.php";

if(isset($_POST['id'])){

$sql=mysqli_query($con, "Update tabel_product set name='$_POST[name]',
                                            price='$_POST[price]',
                                            id_category='$_POST[id_category]'
                                            where id ='$_POST[id]'");
                        
    if($sql){
        header('location:index.php');

    }else{
        echo"Data Gagal Disimpan"; 
    }

}

?>
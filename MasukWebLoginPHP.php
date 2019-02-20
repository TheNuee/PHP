<?php
$name = $_POST['name'] ;
$psw = $_POST['psw'] ;
if($name == "Riski" && $psw == "123"){
    echo "Login Berhasil";
}else{
    echo "Login Gagal";
}
?>
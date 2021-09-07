<?php
include 'koneksi/koneksi.php';

// $pay_id = $_POST['pay_id'];
// $pay_date = $_POST['pay_date'];
// $pay_status = $_POST['pay_status'];
// $cst_id = $_POST['pay_id'];

$pay_id = "<script>res_id</script>";
$pay_date = 123;
$pay_status = 123;
$cst_id = 123;

echo $pay_id;

$addPay = mysqli_query($konek, "INSERT INTO tbl_pay VALUES ($pay_id, $pay_date, $pay_status, $cst_id)");

if($addPay){
    echo '<script>alert("berhasil")</script>';
} else {
    echo 'gagal';
}
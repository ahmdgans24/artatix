<?php
session_start();
// koneksi database
include "../koneksi/koneksi.php";

// menangkap data yang di kirim dari form
$tkt_id				= $_POST["tkt_id"];
$tkt_category	= $_POST["tkt_category"];
$tkt_item			= $_POST["tkt_item"];
$tkt_size			= $_POST["tkt_size"];
$tkt_qty			= $_POST["tkt_qty"];
$tkt_price		= $_POST["tkt_price"];

$event_id			= $_POST["event_id"];


// update data ke database
mysqli_query($konek,"UPDATE tbl_ticket SET
													tkt_category ='$tkt_category',
													tkt_item		 ='$tkt_item',
													tkt_size		 ='$tkt_size',
	 												tkt_qty			 ='$tkt_qty',
													tkt_price		 ='$tkt_price'
	 											
								WHERE tkt_id='$tkt_id'");
 {
header('Location: event_edit.php?id=' . $event_id);
  exit();

}
die("Terdapat kesalahan : " . mysqli_error($konek));

?>

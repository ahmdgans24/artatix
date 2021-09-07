
<?php
include "../koneksi/koneksi.php";
$event_id                 = $_POST["event_id"];
$event_status                 = $_POST["event_status"];
$event_jenis                 = $_POST["event_jenis"];



// update data ke database
if ($edit = mysqli_query($konek, "UPDATE tbl_event SET 
                                       event_status   ='$event_status',
                                       event_jenis   ='$event_jenis'
                                
                                WHERE event_id ='$event_id'")); {



     header('Location: event_edit.php?id=' . $event_id);

    exit();
}
die("Terdapat kesalahan : " . mysqli_error($konek));

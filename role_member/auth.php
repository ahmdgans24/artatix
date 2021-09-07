<?php
    session_start();
    include "../koneksi/koneksi.php";
    if ($_SESSION['user_level'] == "") {
        header("location:../page_login.php");
    }

    // elseif ($_SESSION['user_level'] !== 'user'){
    //     header("location:../page_login.php");
    // }
        
    // if (isset($_SESSION['pay']) == true){
    //     header("Location:../page_event_invoice.php");
    // }

    $session_userlevel = $_SESSION['user_level'];
    $session_useremail = $_SESSION['user_email'];
    $session_userid    = $_SESSION['user_id'];
?>
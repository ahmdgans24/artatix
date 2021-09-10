<?php
    session_start();
    include "../koneksi/koneksi.php";
    if ($_SESSION['user_level'] == ""|| $_SESSION['user_level'] !== 'member') {
        header("location:../page_login.php?pesan=belum_login");
    }elseif(!empty($_SESSION['user_email_google'])){
        // google user login
        $session_useremail = $_SESSION['user_email_google'];
    }else {
        $session_userlevel = $_SESSION['user_level'];
        $session_useremail = $_SESSION['user_email'];
        $session_userid    = $_SESSION['user_id'];
    }
    


?>
<?php
    session_start();

    sessiondestroy();

    function sessiondestroy(){
        if($_SESSION['username']!='')
                session_destroy();

        echo "<script>window.location='index.php';</script>";
    }
?>
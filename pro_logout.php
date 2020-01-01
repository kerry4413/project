<?php
    session_start();
    session_destroy();
    header("location:pro_index.php");
?>
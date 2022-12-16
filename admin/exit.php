<?php
    include '../config/app.php';

    unset($_SESSION['uid']);

    if (session_destroy()) {
        echo "<script>
                window.location.replace('index.php')
             </script>";
    }
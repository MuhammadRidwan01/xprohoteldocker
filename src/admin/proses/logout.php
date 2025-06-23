<?php
    
    try {
        session_start();
    session_destroy();
    header("Location: ../../admin/index.php"); 
    } catch (\Throwable $th) {
        echo 'eror saat logout';
    }
?>
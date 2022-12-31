<?php
    /*******
      Main Author: Nawras MemoryError
    Contact me on telegram : https://t.me/MehdiNawras
    ********************************************************/
    
    require_once 'includes/main.php';
    $red = $_SESSION['last_page'];
    header("Location: ../index.php?redirection=$red");
    exit();
?>
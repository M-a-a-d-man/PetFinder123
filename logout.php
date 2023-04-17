<?php
    include 'php/template.php';
    if(session_status() === PHP_SESSION_ACTIVE){
        unset($_SESSION["username"]);
        session_destroy();
        echo '<script> alert("logout successful. Please login in the give away pet page.");';
        echo 'window.location.href= "index.php";';
        echo '</script>';
}
else{
    echo '<script> alert("You need to login before logging out");';
    echo 'window.location.href= "index.php";';
    echo '</script>';
}
?>
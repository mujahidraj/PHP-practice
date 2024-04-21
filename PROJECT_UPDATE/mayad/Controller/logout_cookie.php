<?php 
    
    setcookie('flag', 'abc', time()-10, '/');
    header('location:../View/signin.php');
?>
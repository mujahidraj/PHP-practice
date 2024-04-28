<?php

    require 'db-conn.php';

    if (isset($_REQUEST['remove-submit']))
    {   
        $id = $_REQUEST['id'];

        $query = "DELETE FROM signed_up_users WHERE id = '$id'";

        mysqli_query($conn, $query);

        echo "<script> alert('User removed!') </script>";

        echo "<script>window.location.href = 'remove-user.php'</script>";
               

    }

?>
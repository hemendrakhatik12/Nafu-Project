<?php

    $conn = mysqli_connect('localhost','root','','marketing');
    if ($conn==false) {
        die();
     echo mysqli_error();   
    }



?>
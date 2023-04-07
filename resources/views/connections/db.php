<?php
    $con = new mysqli("localhost","root","","loginSystem");
    if($con->connect_error){
        echo "failed to connect to mysql database !";
        die;
    }
?>

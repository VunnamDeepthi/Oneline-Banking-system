<?php

include 'connect.php';



$query = "INSERT INTO dbo.Student
        (id,name)
        VALUES(5, 'Vamsi')";
                   
$result = sqlsrv_query($conn,$query);
?>

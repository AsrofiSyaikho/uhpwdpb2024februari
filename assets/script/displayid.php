<?php
require "connect.php";

$query ="SELECT hari FROM jadwalhari";
            $result = $conn->query($query);
            if($result->num_rows> 0){
              $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
            }

?>


<?php

  require "conn.php";
  
if (isset($_GET['del_id'])){
    $id = $_GET['del_id'];

    $delete = $conn->prepare("delete from tasks where id=:id");


    $delete->execute(array( 
        ':id'=>$id
    ));

    header("location: index.php");

}

?>

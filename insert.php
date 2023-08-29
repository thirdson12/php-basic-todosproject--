<?php

  require "conn.php";
  
    if(isset($_POST['mytask'])){

        $task = $_POST['mytask'];

        $insert = $conn->prepare("insert into tasks (name) values(:name)");

        $insert->execute(array(
            ':name'=> $task
        ));

        header("location: index.php");
    }else{

    }   



  


?>
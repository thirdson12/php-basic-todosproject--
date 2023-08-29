<?php

  require "conn.php";
  
  $data = $conn->query("SELECT * FROM tasks");

?>


<!DOCTYPE html>
<html>
	<head>
		<title>todos</title>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		<link rel="stylesheet" href="style.css">

	</head>
	<body>
        <div class="container">
		<form method="POST"  class="form-inline" action="insert.php" id="user_form">
		 
		  <div class="form-group mx-sm-3 mb-2">
		    <label for="inputPassword2" class="sr-only">create</label>
		    <input name="mytask" type="text" class="form-control" id="task" placeholder="enter task">
		  </div>
		   <input type="hidden" name="action" id="action" /> 
		      <input type="submit" name="button_action" id="button_action" class="btn btn-success" value="Insert" />
		</form>

		<table class="table">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Task Name</th>
		      <th>Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	  <?php while($rows = $data->fetch(PDO::FETCH_OBJ)) { ?>
		    <tr> 
		   
		     <td><?php echo $rows->id;?>  </td>
		     <td> <?php echo $rows->name;?> </td>
		     <td><a href="delete.php?del_id=<?php echo $rows->id; ?>" class="btn btn-danger">delete</a></td>
             <td><a href="update.php?upd_id=<?php echo $rows->id; ?>" class="btn btn-warning">update</a></td>
		    </tr>
		
                <?php } ?>

		  </tbody>
		</table>
	</div>



		

	</body>
</html>
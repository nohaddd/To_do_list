
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>To-Do List</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include custom CSS -->
    <style>
       
       
    </style>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="cont">
		<form action="php/create.php" 
		      method="post">
            
		   <h2 class="text-center">To-Do List</h2>

		   <div id="tasks">
            <!-- Tasks will be displayed here -->
        </div>

		  
		   <div class="input-group mb-3">
		     
		     <input type="name" 
		           class="form-control" 
				   id="task-input"
		           name="name" 
		           value="<?php if(isset($_GET['name']))
		                           echo($_GET['name']); ?>" 
		           placeholder="Add a new task" aria-label="Add a new task" aria-describedby="add-button">
		  
			<div class="input-group-append">
			<button type="submit" 
		          class="btn btn-primary"
		          name="create">Add</button>
            </div>
			
			
				</div>

		 

		   
        </div>

		   
	    </form>
		<!-- Add task list here -->
        <ul id="task-list"></ul>
	</div>

	



<?php include "php/read.php"; ?>

<div class="cont">
	<div class="">
		
		<?php if (mysqli_num_rows($result)) { ?>
		<table class="table table-striped">
		  <thead>
			<tr>
			  <th scope="col"></th>
			  <th scope="col"></th>
			  <th scope="col"></th>
			</tr>
		  </thead>
		  <tbody>
			  <?php 
				 $i = 0;
				 while($rows = mysqli_fetch_assoc($result)){
				 $i++;
			   ?>
			<tr>
			 
			  <td><?=$rows['name']?></td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>

			  
			  <td>

					<a href="php/delete.php?id=<?=$rows['id']?>" 
					   class="btn btn-danger">Delete</a>
			  </td>
			</tr>
			<?php } ?>
		  </tbody>
		</table>
		<?php } ?>
		
	</div>
</div>
	<!-- Script File-->
    <script src="./main.js"></script>
</body>
</html>














<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['name']);

	$user_data = 'name='.$name;

	if (empty($name)) {
		header("Location: ../index.php?error=Name is required&$user_data");
	}else {

       $sql = "INSERT INTO users(name) 
               VALUES('$name')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       header("Location: ../index.php?success=successfully Added"); 	 
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}
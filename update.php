<?php
include 'connection.php';
	if(isset($_POST['add']))
	{
		$type = mysqli_real_escape_string($con,$_POST['pick']);
		$name = $_POST['name'];
		$details = $_POST['details'];
		$date = $_POST['date'];
    	$location = $_POST['location'];
    
    	$file=$_FILES['image']['tmp_name'];
   		$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
    	$image_name= addslashes($_FILES['image']['name']);
		move_uploaded_file($_FILES["image"]["tmp_name"],"assets/img/".$_FILES["image"]["name"]); // moves uploaded file inside the images folder.
        $pic="assets/img/".$_FILES["image"]["name"];
		
		$query="select name from place where name='$name'";
		$result = mysqli_query($con, $query);
		$rowss= mysqli_num_rows($result);
		if ($rowss== 1)
		{
				echo "<script>
				alert('ERROR! Name is already exist in system');
				window.location.href='profile1.php';
				</script>";
		}

		else
		{
			$sql = "INSERT INTO place(name, details, date, location, image, type)VALUES ('$name', '$details','$date', '$location',' $pic', '$type')";
			if ($con->query($sql) === TRUE)
			{
		    	echo "<script>
				alert('New record created successfully!');
				window.location.href='profile1.php';
				</script>";
			} 
		
			else 
			{
		  		echo "<script>
				alert('ERROR! PLEASE INSERT DETAILS IN RIGHT ORDER');
				window.location.href='profile1.php';
				</script>";
			}		
			
		} 
	}
		

	else if(isset($_POST['delete']))
	{
		$name = $_POST['delete'];
		$sql = "DELETE FROM place WHERE name='$name'";
		if ($con->query($sql) === TRUE) 
		{
    		echo "<script>
			alert('Record deleted successfully');
			window.location.href='profile1.php';
			</script>";
		} 
		else
		{
			echo"<script>
			alert('Error deleting record');
			window.location.href='profile1.php';
			</script>";
    		echo "Error deleting record: " . $con->error;
		}
	}

	else if(isset($_POST['update1']))
	{
		$name = $_POST['name'];
		$details = $_POST['details'];
		
    	$sql="update place SET name ='$name', details='$details' WHERE name='$name'";
    	if ($con->query($sql) === TRUE) {
    		echo "<script>
			alert('Record Updated successfully!');
			window.location.href='profile1.php';
			</script>";
		} else {
    		echo "<script>
			alert('Error updating record!');
			window.location.href='profile1.php';
			</script>";
		}
		$con->close();
	}


	else if(isset($_POST['update2']))
	{
		$name = $_POST['name'];
		$date = $_POST['date'];
		
    	$sql="update place SET name ='$name', date='$date' WHERE name='$name'";
    	if ($con->query($sql) === TRUE) {
    		echo "<script>
			alert('Record Updated successfully!');
			window.location.href='profile1.php';
			</script>";
		} else {
    		echo "<script>
			alert('Error updating record!');
			window.location.href='profile1.php';
			</script>";
		}
		$con->close();
	}

	else if(isset($_POST['update3']))
	{
		$name = $_POST['name'];
		$location = $_POST['location'];
		
    	$sql="update place SET name ='$name', location='$location' WHERE name='$name'";
    	if ($con->query($sql) === TRUE) {
    		echo "<script>
			alert('Record Updated successfully!');
			window.location.href='profile1.php';
			</script>";
		} else {
    		echo "<script>
			alert('Error updating record!');
			window.location.href='profile1.php';
			</script>";
		}
		$con->close();
	}


	else if(isset($_POST['update4']))
	{
		$name = $_POST['name'];
		$file=$_FILES['image']['tmp_name'];
   		$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
    	$image_name= addslashes($_FILES['image']['name']);
		move_uploaded_file($_FILES["image"]["tmp_name"],"assets/img/" . $_FILES["image"]["name"]); // moves uploaded file inside the images folder.
        $pic="assets/img/" . $_FILES["image"]["name"];
		
    	$sql="update place SET name ='$name', image='$pic' WHERE name='$name'";
    	if ($con->query($sql) === TRUE) {
    		echo "<script>
			alert('Record Updated successfully!');
			window.location.href='profile1.php';
			</script>";
		} else {
    		echo "<script>
			alert('Error updating record!');
			window.location.href='profile1.php';
			</script>";
		}
		$con->close();
	}
?>	
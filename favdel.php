<?php
	session_start();
	include 'connection.php';

	if(isset($_POST['delete']))
	{
		$username=$_SESSION['username'];
		$loc_id=$_POST['loc_id'];
		$sql = "DELETE FROM fav WHERE username='$username' and loc_id='$loc_id'";
		if ($con->query($sql) === TRUE) 
		{
    		echo "<script>
			alert('Record deleted successfully');
			window.location.href='fav.php';
			</script>";
		} 
		else
		{
			echo "<script>
			alert('Error deleting record');
			</script>";
    		echo "Error deleting record: " . $con->error;
		}
	}


	else if(isset($_POST['deletee']))
	{
		$username=$_SESSION['username'];
		$sql = "DELETE FROM fav WHERE username='$username'";
		if ($con->query($sql) === TRUE) 
		{
    		echo "<script>
			alert('All Favourites Deleted successfully');
			window.location.href='fav.php';
			</script>";
		} 
		else
		{
			echo "<script>
			alert('Error deleting record');
			window.location.href='fav.php';
			</script>";
    		echo "Error deleting record: " . $con->error;
		}
	}	
?>
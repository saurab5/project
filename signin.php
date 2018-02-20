<?php
include 'connection.php';
	//data base connection

	
	if(isset($_POST['login']))
	{	

		$pword=$_POST['password'];
		$username =$_POST['username'];
		$email=$_POST['email'];
		$pword=$_POST['password'];
		$password=md5($pword); //eccrypt password 
		$query ="select *from signin where username='$username' and password='$password' and email='$email'";
		$result = mysqli_query($con,$query);
		$rows= mysqli_num_rows($result);
			if ($rows== 1)
			{
				session_start();// starting session
				$_SESSION['username']=$username;// session holding username
				$sql="SELECT username,user from signin where username='$username'and user='admin'";
				$res= mysqli_query($con, $sql);
				if(mysqli_num_rows($res) > 0)
				{
					sleep(2);	
					header('Location:profile1.php');
				}

				else
				{
					sleep(2);	
					header('Location:profile.php');
				}
			}
			else 
			{
				echo "<script>
				alert('Login UnSuccessfully! Username or Password Error');
				window.location.href='login.html';
				</script>";
			}	
			mysqli_close($con);
	}



else if(isset($_POST['submit']))
	{
		$fname=$_POST['f'];
		$lname=$_POST['l'];
		$uname=$_POST['u'];
		$email=$_POST['e'];
		$a=$_POST['a'];
		$pword=$_POST['p'];
		$password=md5($pword);

		$query="select username from signin where username='$uname'";
		$result = mysqli_query($con, $query);
		$rowss= mysqli_num_rows($result);
		if ($rowss== 1)
		{
				echo "<script>
				alert('ERROR! Username is already exist in system');
				window.location.href='signin.html';
				</script>";
		}
		else
		{
			$query="insert into signin(fname,lname,username,password,email,age) values('$fname','$lname','$uname','$password','$email','$a')";
			if(mysqli_query($con,$query))
			{
				echo "<script>
				alert('Register Successfully!');
				window.location.href='';
				</script>";
			}		
			
			else 
			{
				echo "<script>
				alert('Failed to Register! Please try again later');
				window.location.href='';
				</script>";
			}
		}
	}
?>

<?php
session_start();
include 'connection.php';
        if(isset($_POST['like']))
        {
        $loc_id=$_POST['loc_id'];
        $username=$_SESSION['username'];
        $query="SELECT username,loc_id from fav where username='$username' and loc_id='$loc_id'";
        $result = mysqli_query($con, $query);
        $rowss= mysqli_num_rows($result);
        if ($rowss== 1)
        {
           echo "<script>
                alert('Item has been Added Already!');
                window.location.href='profile.php';
                </script>";
        }

        else
        {                
            $sql="INSERT INTO fav(loc_id,username) values ('$loc_id','$username')";
            if ($con->query($sql) === TRUE)
            {
                echo "<script>
                alert('Added to your favourite!');
                window.location.href='profile.php';
                </script>";
            } 
                
            else 
            {
                echo "<script>
                alert('ERROR! FAILED TO ADD');
                </script>";
            }
        }       
    } 

?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Trip Maker</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
        <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet" />
        <link href="assets/css/custom.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
           
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href=""><img src="assets\img\icon1.png  "alt="icon1" height="80px" width="80px"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="profile.php">POINT OF INTREST</a></li>    
                    <li><a href="Gallery.php">GALLERY</a></li>
                    <li><a href="fav.php">FAVOURITE</a></li>
                    <li> <div class="dropdown">
                        <button class="dropbtn"><a href="" data-toggle="tooltip" title="profile"><img src="assets\img\profile.png" 
                        alt="logoout" height="35px" width="45px" style="margin-top: -19px;margin-bottom: -14px;"><?php echo$_SESSION['username']; ?></a></button>
                        <div class="dropdown-content">
                          <a href="logout.php">LOGOUT</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
            </div>
        </div>
        <div id="cover">
            <img src="assets\img\Patan1.jpg" alt="" style="width: 1349px;height: 380px;">
        </div>
       
        <div id="middlecontainer">
            <div id="middlecontainer1" style="margin-top: 121px">
                
                <form action='favdel.php' method='post'>
            		<button type="submit" class="btn btn-success" name="deletee" value="deletee" style="border-style: inset;margin-left: 
                    1045px;margin-top: -12px;">Delete All Favourites</button></br>
                </form>
            
                <?php  
                        $username=$_SESSION['username'];
                        $query="SELECT * from fav where username='$username'";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($result)) 
                        {
                            $loc_id = $row['loc_id'];
                            $query1 = "SELECT * from place where loc_id='$loc_id'";
                            $result1 = mysqli_query($con, $query1);
                            while ($r = mysqli_fetch_assoc($result1)) 
                            {
                                echo "<h1><u>".$r['name']."</u></h1>";
                                echo '<img src="'.$r['image'].'"width="400" height="200" style="border-radius: 17px;"/></br></br>';
                                echo $r['details']."</br></br>";
                                echo "<strong>DATE: </strong>".$r['date']."</br>";
                                echo '<strong>ADDRESS: </strong>'.$r['location'].'</br>';
                            }
                                echo"<form action='favdel.php' method='post'>";
                                echo "<button type='submit' class='btn btn-success' name= 'delete' value='delete' style='border-style: inset;'>Delete</button>";
                                echo"<input type='hidden' name='loc_id' value='".$row['loc_id']."'>";
                                echo'</form>';
                        }    
                ?>
            </div>
        </div>
               

        
        <div id="footer">
            saurabbasnet5@gmail.com | All Right Reserved |
        </div>    
    </body>
</html>        
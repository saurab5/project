<?php
session_start();
include 'connection.php';
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
                    <li> <div class="dropdown">
                        <button class="dropbtn"><a href="profile1.php" data-toggle="tooltip" title="profile"><img src="assets\img\profile.png" 
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

        <div id="middlebody" style="margin-bottom: 40px;">
            <form action="" method="post">
                <input type="text" name="search" placeholder="Search..">
                <button type="search1" class="btn btn-success" name="search1" value="search1" style="border-style: inset;">Search</button>
            </form>

            <form action="" method="post" style="background-color: transparent;">
                <select name="pick" required="required" style="width: 29%;">
                    <option hidden disable="" placeholder="">Point of Intrest</option>
                    <option value="event">EVENT</option>
                    <option value="place">SIGHT SEEING</option>
                    <option value="lactivities">LOCAL ACTIVITIES</option>
                    <option value="levent">LOCAL EVENT</option>
                </select>
                <button type="go" class="btn btn-success" name="go" value="go" style="border-style: inset;">Search</button>
            </form>
            
            <?php
                    if(isset($_POST['search1']))
                    {

                        $search = $_POST['search'];
                        $sql="select * from place where name='$search'";
                        $result = $con->query($sql);
                        if($result->num_rows > 0)
                        {

                            $result = mysqli_query($con, $sql);
                            $somethings= array();


                            while ($r = mysqli_fetch_assoc($result)) 
                            {
                                echo "<h1>".$somethings[]=$r['name']."</h1>";
                                echo '<img src="'.$r['image'].'"width="400" height="200"/></br>';
                                echo $r['details']."</br></br>";
                                echo "<strong>DATE: </strong>".$r['date']."</br>";
                                echo '<strong>ADDRESS: </strong>'.$r['location'].'</br>';
                            }
                            mysqli_free_result($result);
                        }   
                        
                        else
                        {
                            echo "<script>
                            alert('No Result found');
                            window.location.href='profile1.php';
                            </script>";
                        }
                        $con->close();
                    }
            ?>
            <?php 
            if(isset($_POST['go']))
                    {
                        $type = mysqli_real_escape_string($con,$_POST['pick']);
                        $sql="SELECT * from place where type='$type'";
                        $result = mysqli_query($con, $sql);
                            while ($r = mysqli_fetch_assoc($result)) 
                            {
                                echo "<h1><u>".$r['name']."</u></h1>";
                                echo '<img src="'.$r['image'].'"width="400" height="200" style="border-radius: 17px;"/></br></br>';
                                echo $r['details']."</br></br>";
                                echo "<strong>DATE: </strong>".$r['date']."</br>";
                                echo '<strong>ADDRESS: </strong>'.$r['location'].'</br>';
                            }
                    }
            ?>             

            <h2>ADD ITEMS</h2>
            <form action="update.php" method="post" enctype="multipart/form-data">
            CHOOSE&nbsp;
            <select name="pick" required="required" style="width: 29%;">
                <option hidden disable></option>
                <option value="event">EVENT</option>
                <option value="place">SIGHT SEEING</option>
                <option value="lactivities">LOCAL ACTIVITIES</option>
                <option value="levent">LOCAL EVENT</option>
            </select></br>
            NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" size="30" name="name" required="required" placeholder=""></br>
            DETAILS:&nbsp;
            <input type="text" size="30" name="details" required="required"></br>
            DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <input type="text"   name="date" placeholder="YYYY-MM-DD"></br>
            ADDRESS
            <input type="text" required="required"  name="location"></br>
            IMAGE
            <input type="file" required="required"  name="image"></br>
            <button type="add" class="btn btn-success" name="add" value="add">ADD</button>
          </form>
            



            <h2>UPDATE ITEMS</h2>
            <form action="update.php" method="post" enctype="multipart/form-data">
            NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" size="30" name="name" required="required" placeholder=""></br>
            DETAILS&nbsp;&nbsp;
            <input type="text" size="30" name="details">
            <button type="update" class="btn btn-success" name="update1" value="update1" >Update</button></br>
            DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <input type="text" name="date" placeholder="YYYY-MM-DD">
            <button type="update" class="btn btn-success" name="update2" value="update2" >Update</button></br>
            ADDRESS
            <input type="text" name="location">
            <button type="update" class="btn btn-success" name="update3" value="update3">Update</button></br>
            IMAGE
            <input type="file" name="image">
            <button type="update" class="btn btn-success" name="update4" value="update4" style="margin-left: 307px;margin-top:-52px;">Update</button>
          </form>



          <h2>DELETE ITEMS</h2>
            <form action="update.php" method="post">
            NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" size="30" name="delete" required="required" placeholder="">
            <button type="delete" class="btn btn-success" name="delete" value="delete">DELETE</button>
          </form>
        </div>
       
        <div id="footer">
            saurabbasnet5@gmail.com | All Right Reserved |
        </div> 
         
    </body>
</html> 
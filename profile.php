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
            <img src="assets\img\pokhara1.jpg" alt="" style="width: 1349px;height: 380px;">
        </div>
       
        <div id="middlecontainer">
            <form action="" method="post">
                <input type="text" name="search" placeholder="Search..">
                <button type="search1" class="btn btn-success" name="search1" value="search1" style="border-style: inset;">Search</button>
            </form>
            
            <form action="" method="post" style="background-color: transparent;">
            <select name="pick" required="required" style="width:29%;">
                <option hidden disable="" placeholder="">----Quick Search----</option>
                <option value="event">EVENT</option>
                <option value="lactivities">LOCAL ACTIVITIES</option>
                <option value="levent">LOCAL EVENT</option>
            </select>
            <select name="picks" required="required">
                        <option hidden disable value="null" placeholder="">ORDER BY</option>
                        <option value="ASC">A-Z</option>
                        <option value="DESC">Z-A</option>
                    </select>
            <button type="go" class="btn btn-success" name="go" value="go" style="border-style: inset;">Search</button>
            </form> 

            <div id="middlecontainer1" style="min-height: 0px;">
                <?php
                    if(isset($_POST['go']))
                    {
                        $type = mysqli_real_escape_string($con,$_POST['pick']);
                        $typee = mysqli_real_escape_string($con,$_POST['picks']);
                        if($typee=="null")
                        {
                            $sql="SELECT * from place where type='$type'";
                            $result = mysqli_query($con, $sql);
                            while ($r = mysqli_fetch_assoc($result)) 
                            {
                                echo "<h1>".$r['name']."</h1>";
                                echo '<img src="'.$r['image'].'"width="400" height="200" style="border-radius: 17px;"/></br></br>';
                                echo $r['details']."</br></br>";
                                echo "<strong>DATE: </strong>".$r['date']."</br>";
                                echo '<strong>ADDRESS: </strong>'.$r['location'].'</br>';
                                echo"<form action='fav.php' method='post'>";
                                echo "<button type='submit' class='btn btn-success' name= 'like' value='like' style='border-style: inset;'>Add To Favourite</button>";
                                echo"<input type='hidden' name='loc_id' value='".$r['loc_id']."'>";
                                echo'</form>';
                            }
                        }
                        else 
                        {
                            $sql="SELECT * from place where type='$type' ORDER BY name $typee";
                            $result = mysqli_query($con, $sql);
                            while ($r = mysqli_fetch_assoc($result)) 
                            {
                                echo "<h1><u>".$r['name']."</u></h1>";
                                echo '<img src="'.$r['image'].'"width="400" height="200" style="border-radius: 17px;"/></br></br>';
                                echo $r['details']."</br></br>";
                                echo "<strong>DATE: </strong>".$r['date']."</br>";
                                echo '<strong>ADDRESS: </strong>'.$r['location'].'</br>';
                                echo"<form action='fav.php' method='post'>";
                                echo "<button type='submit' class='btn btn-success' name= 'like' value='like' style='border-style: inset;'>Add To Favourite</button>";
                                echo"<input type='hidden' name='loc_id' value='".$r['loc_id']."'>";
                                echo'</form>';
                            }
                        }
                    } 
                ?>      

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
                                echo "<h1>".$r['name']."</h1>";
                                echo '<img src="'.$r['image'].'"width="400" height="200" style="border-radius: 17px;"/></br>';
                                echo $r['details']."</br></br>";
                                echo "<strong>DATE: </strong>".$r['date']."</br>";
                                echo '<strong>ADDRESS: </strong>'.$r['location'].'</br>';
                                echo"<form action='fav.php' method='post'>";
                                echo "<button type='submit' class='btn btn-success' name= 'like' value='like' style='border-style: inset;'>Add To Favourite</button>";
                                echo"<input type='hidden' name='loc_id' value='".$r['loc_id']."'>";
                                echo'</form>';
                            }
                            mysqli_free_result($result);
                        }   
                        
                        else
                        {
                            echo "<script>
                            alert('No Result found');
                            window.location.href='profile.php';
                            </script>"; 
                        }
                    }
                ?>
            </div>
             <div id="display" style="margin-bottom: 25px;">
                <h1 style="color: cornflowerblue;font-family: cursive;margin-left: 474px;font-weight: 600;"> Places to See</h1>
                    <form action="" method="post" style="background-color: transparent;">
                    <select name="pickss" required="required">
                        <option hidden disable value="null" placeholder="">ORDER BY</option>
                        <option value="ASC">A-Z</option>
                        <option value="DESC">Z-A</option>
                    </select>
                    <button type="submit" class="btn btn-success" name="goo" value="goo" style="border-style: inset;">GO</button>
                    </form> 
                 <?php
                    if(isset($_POST['goo']))
                    {
                         $typee = mysqli_real_escape_string($con,$_POST['pickss']);
                         $sql="SELECT * from place where type='place' ORDER BY name $typee";
                            $result = mysqli_query($con, $sql);
                            while ($r = mysqli_fetch_assoc($result)) 
                            {
                                echo "<h1>".$r['name']."</h1>";
                                echo '<img src="'.$r['image'].'"width="400" height="200" style="border-radius: 17px;"/></br></br>';
                                echo $r['details']."</br></br>";
                                echo '<strong>ADDRESS: </strong>'.$r['location'].'</br>';
                                echo"<form action='fav.php' method='post'>";
                                echo "<button type='submit' class='btn btn-success' name= 'like' value='like' style='border-style: inset;'>Add To Favourite</button>";
                                echo"<input type='hidden' name='loc_id' value='".$r['loc_id']."'>";
                                echo'</form>';
                            }
                    }
                    else
                    {
                        $sql="select * from place where type='place'";
                        $result = $con->query($sql);
                            while ($r = mysqli_fetch_assoc($result)) 
                            {
                                echo "<h1>".$r['name']."</h1>";
                                echo '<img src="'.$r['image'].'"width="400" height="200" style="border-radius: 17px;"/></br>';
                                echo $r['details']."</br></br>";
                                echo '<strong>ADDRESS: </strong>'.$r['location'].'</br>';
                                echo"<form action='fav.php' method='post'>";
                                echo "<button type='submit' class='btn btn-success' name= 'like' value='like' style='border-style: inset;'>Add To Favourite</button>";
                                echo"<input type='hidden' name='loc_id' value='".$r['loc_id']."'>";
                                echo'</form>';
                            }
                            mysqli_free_result($result); 
                    }   
                ?>

            </div>   
        </div>      
        </div>   

        
        <div id="footer">
            saurabbasnet5@gmail.com | All Right Reserved |
        </div>    
    </body>
</html>        
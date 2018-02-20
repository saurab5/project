<?php
    session_start();
    include 'connection.php';
?>
<!DOCTYPE html>
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
                        <button class="dropbtn"><a href="profile.php" data-toggle="tooltip" title="profile"><img src="assets\img\profile.png" 
                        alt="logoout" height="35px" width="45px" style="margin-top: -19px;margin-bottom: -14px;"><?php echo$_SESSION['username']; ?></a></button>
                        <div class="dropdown-content">
                          <a href="logout.php">LOGOUT</a>
                        </div>
                      </div></li>
                  </ul>
                </div>
            </div>
        </div>  
        
        <section id="port-sec">
       <div class="container">
            <div class="row g-pad-bottom">
                <div class="text-center g-pad-bottom">
                   <div class="col-md-12 col-sm-12 alert-info">
                            <h4><i class="fa fa-desktop fa-2x" ></i>&nbsp;See Destination Gallery</h4>
                            <p>
                                Capture Your Moments,Take Back Home Your Memories!
                            </p>
                    </div>
                </div>
            </div>
           



           <div class="row g-pad-bottom" >
                <div class="col-md-10 col-md-offset-1 col-sm-12" >
                    <ul class="portfolio-items col-3">
                        <li class="portfolio-item">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="assets/img/patan.jpg" alt="">
                                </div>
                                <h5>Patan Durbar Square</h5>
                            </div>
                        </li>
                       
                        <li class="portfolio-item">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="assets/img/bhaktapur.jpg" alt="">
                                </div>
                                <h5>Bhaktapur Durbar Square</h5>
                            </div>
                        </li>
                        <li class="portfolio-item">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="assets/img/kathmandu.jpg" alt="">
                                </div>
                                <h5>Basantapur Durbar Square</h5>
                            </div>
                        </li>
                        <li class="portfolio-item">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="assets/img/everest.jpg" alt="">
                                </div>
                                <h5>Everest Base Camp</h5>
                            </div>
                        </li>
                        <li class="portfolio-item">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="assets/img/chitwan.jpg" alt="">
                                </div>
                                <h5>Chitwan</h5>
                            </div>
                        </li>
                        <li class="portfolio-item ">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="assets/img/mustang.jpg" alt="">
                                </div>
                                <h5>Mustang</h5>
                            </div>
                        </li>
                        <li class="portfolio-item ">
                           <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="assets/img/pokhara.jpg" alt="" height="200px">
                                </div>
                                <h5>Pokhara</h5>
                            </div>
                        </li>
                        <li class="portfolio-item ">
                           <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="assets/img/illam.jpg" alt="" height="200px">
                                </div>
                                <h5>llam</h5>
                            </div>
                        </li>
                        <li class="portfolio-item">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="assets/img/jomsom.jpg" alt="" height="200px">
                                </div>
                                <h5>Jomsom</h5>
                            </div>
                        </li>
                          <li class="portfolio-item">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="assets/img/Pashupatinath.jpg" alt="" height="200px">
                                </div>
                                <h5>Pashupatinath Temple</h5>
                            </div>
                        </li>
                          <li class="portfolio-item">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="assets/img/annapurna.jpg" alt="" height="200px">
                                </div>
                                <h5>Annapurna Base Camp</h5>
                            </div>
                        </li>
                          <li class="portfolio-item">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="assets/img/janakpur.jpg" alt="" height="200px">
                                </div>
                                <h5>Janaki Temple</h5>
                            </div>
                        </li>
                          <li class="portfolio-item">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="assets/img/gorkha.jpg" alt="" height="200px">
                                </div>
                                <h5>Gorkha</h5>
                            </div>
                        </li>
                          <li class="portfolio-item">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="assets/img/namche.jpg" alt="" height="200px">
                                </div>
                                <h5>Namche Bazaar</h5>
                            </div>
                        </li>
                          <li class="portfolio-item">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="assets/img/jiri.jpg" alt="" height="200px">
                                </div>
                                <h5>Jiri</h5>
                            </div>
                        </li>
                    </ul>
                </div>
           </div>
       </div>
   </section>
       <div id="footer">
            saurabbasnet5@gmail.com | All Right Reserved  
        </div>
        <script src="assets/plugins/jquery-1.10.2.js"></script>
        <script src="assets/plugins/bootstrap.min.js"></script>  
        <script src="assets/plugins/jquery.isotope.min.js"></script>
        <script src="assets/plugins/jquery.prettyPhoto.js"></script>    
        <script src="assets/js/custom.js"></script>
    </body>
</html>

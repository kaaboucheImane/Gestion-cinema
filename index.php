<!DOCTYPE html>
<html lang="en">
<head>
  <title>ACCUEIL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/css_page1.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="image/logo1.png">
	<link rel="stylesheet" href="css/diaporama.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
 <script>
   $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
 </script>
 <script>
   $(document).ready(function(){
    $('.customer-logos1').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
 </script>
</head>
<body style=" ">
  <?php
    $con=new PDO("mysql:host=localhost;dbname=ecine-1","root","");
  ?>
  <div class="navbar-wrapper" >
        <div class="container-fluid">
            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" ><img src="image/logo2.png" style="width: 3em;height: 2em; margin-top: -0.5em;"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">

                            <li class="active" ><a href="index.php">Accueil</a></li>
                            <li class=" "><a href="event.php" id="i2">Evenement</a></li>
                            <li class=" "><a href="movies.php" id="i2">Films</a></li>
                        </ul>
                        <ul class="nav navbar-nav pull-right">
                            <li class=""><a href="contact.php" id="i2">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
  </div>
  <section class="jumbotron text-center" style="margin-top:0em;background-color: #EAC117;">
    <div class="container">
      <h1 class="jumbotron-heading">CINEMA</h1>
    </div>
  </section>

  <div class="container-fluid text-center" style="margin-top: 3em;">    
      <div class="row">


        <div class="col-sm-9 "> 
          
          <div class="carousel slide" id="slider" data-ride="carousel" style="width:70em;">          
            <div class="carousel-inner" style="">
              <div class="item active" id="slide1">
                <img src="image/park.jpg" data-color="violet" alt="Third Image" style="width: 100%; height:29em; ">
                <div class="carousel-caption">
                      
                </div>
              </div>
                         
              <div class="item " id="slide2">
                <img src="image/escobar.jpg" data-color="violet" alt="Third Image" style="width: 100%; height:29em;">
                <div class="carousel-caption">
                      
                </div>
              </div>
              <div class="item " id="slide2">
                <img src="image/img.jpg" data-color="violet" alt="Third Image" style="width: 100%; height:29em;">
                <div class="carousel-caption">
                      
                </div>
              </div>
              <div class="item " id="slide2">
                <img src="image/img2.jpg" data-color="violet" alt="Third Image" style="width: 100%; height:29em;">
                <div class="carousel-caption">
                      
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#slider" data-slide="prev" role="button"> <span class="icon-prev"></span></a>
            <a class="right carousel-control" href="#slider" data-slide="next" role="button"> <span class="icon-next"></span></a>
          </div>
          <h3 style="margin-top: 2.5em; color: #28235d;" class="text-left">Films d'aujurd'hui</h3>
          <hr style="width: 4em;height:0.2em; background-color: red; margin-left:-0.1em; margin-top: -0.5em;margin-right:70em;">
            <div class="row">
                  <?php
                    $req=$con->query("SELECT * FROM film_de_jour LIMIT 0,8");
                    while ($row=$req->fetch()) {
                      //$id=$row['id'];
                      $titre=$row['title'];
                  ?>
                  <div class="col-md-3 col-sm-4">

                  <div class="wrimagecard wrimagecard-topimage">
                      <div class="wrimagecard-topimage_header" style="background-color: rgba(22, 160, 133, 0.1)">
                        
                        <img id="im" src="image/<?php echo $row['poster'];?>" style="width:100%; height:15em;">
                       
                      </div>
                      <div class="wrimagecard-topimage_title" style="margin-left:0.5em; margin-top: 0.5em; color: #E6E6E6;">
                        <p><i class="far fa-clock"></i>
                        <small><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $row['date_de_sortie'];?></small></p>
                        <h4><?php echo $titre;?></h4>
                         <a href='Description_film.php?titre=<?php echo $titre; ?>' style="color:grey;">» Lire la suite</a>
                         <br> <br>
                        <div class="pull-right badge" id="WrControls"></div></h4>
                      </div>
                      
                  </div>
              </div>
              <?php
                }
              ?>
              
                    
              



            </div>
            <!--
            <h3 style="margin-top: 2.5em; color: #28235d;" class="text-left">Populaire Acteurs</h3>
            <hr style="width: 4em;height:0.2em; background-color: red; margin-left:-0.1em; margin-top: -0.5em;margin-right:70em;">
            <div class="container" style="width: 73em;">
             
              <section class="customer-logos slider">
                 <div class="slide"><img src="image/pic1.jpg" style="border-radius: 50%;"></div>
                 <div class="slide"><img src="image/pic3.jpg" style="border-radius: 50%;"></div>
                 <div class="slide"><img src="image/pic4.jpg" style="border-radius: 50%;"></div>
                 <div class="slide"><img src="image/pic5.jpg" style="border-radius: 50%;"></div>
                 <div class="slide"><img src="image/pic4.jpg" style="border-radius: 50%;"></div>
                 <div class="slide"><img src="image/pic7.jpg" style="border-radius: 50%;"></div>
                 <div class="slide"><img src="image/pic15.jpg" style="border-radius: 50%;"></div>
                 <div class="slide"><img src="image/pic14.jpg" style="border-radius: 50%;"></div>
              </section>
           </div>
         -->
           <h3 style="margin-top: 2.5em; color: #28235d;" class="text-left">Populaire Films</h3>
           <hr style="width: 4em;height:0.2em; background-color: red; margin-left:-0.1em; margin-top: -0.5em;margin-right:70em;">
           <div class="container" style="width: 73em;">
             
              <section class="customer-logos1 slider">
                 <?php
                      $con=mysqli_connect('localhost','root','','ecine-1');
                      $sql="SELECT *FROM film_de_jour ";
                      $res=mysqli_query($con,$sql);
                      while($row=mysqli_fetch_array($res)) { 
                  ?>
                 <div class="slide"><img src="image/<?php echo $row['poster']; ?>"></div>
                 <?php } ?>
              </section>
           </div>
           <br><br><br>
        </div>
         





        <!-- fin col -->


        <div class="col-sm-3">

          <a href="contact.php" style="text-decoration: none;">
              <div class="well" style="background-color: black; height: 4em;">
                <font size="3" color="white"><p>Contact</p></font>
              </div>
           </a>

           <?php 
                  if(isset($_POST['send'])){
                      $mail=$_POST['email'];   
                      $con=new PDO("mysql:host=localhost;dbname=ecine-1","root","");
                      $req=$con->prepare("INSERT INTO newsletter(email)  VALUES(:m)");
                      $req->execute(array(':m'=>$mail));
                  }            
            ?>
           <div class="panel panel-default" style="">
             <div class="panel-heading" style="background-color: black; color: white;border-color:black;">NewsLetter</div>
             <div class="panel-body">
               <form action="index.php" method="post">
                <div class="input-group">
                  <input type="mail" class="form-control" name="email" placeholder="Email">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit" name="send">
                      <i class="glyphicon glyphicon-send"></i>
                    </button>
                  </div>
                </div>
              </form> 

             </div>
           </div>
          <h3 style="margin-top: 2.5em; color: #28235d;" class="text-left">Genres</h3>
          <hr style="width: 4em;height:0.2em; background-color: red; margin-left:-0.1em; margin-top: -0.5em;margin-right:70em;">
          <div class="list-group"  >
            <a  class="list-group-item" style="background-color:black; color: white;" >GENRES</a>
            <a href="genres.php?genre=ACTION" class="list-group-item" >Action</a>
            <a href="genres.php?genre=AVENTURE" class="list-group-item" >Aventure</a>
            <a href="genres.php?genre=ANIMATION" class="list-group-item" >Animation</a>
            <a href="genres.php?genre=SCIENCE-FICTION" class="list-group-item" >Science-Fiction</a>
            <a href="genres.php?genre=DRAMA" class="list-group-item" >Drama</a>
            <a href="genres.php?genre=HORREUR" class="list-group-item" >Horreur</a>
            <a href="genres.php?genre=POLICIER" class="list-group-item" >Policier</a>
            <a href="genres.php?genre=ROMANTIQUE" class="list-group-item" >Romantique</a>
          </div>
          <div class="col-12">
            <h3 style="margin-top: 2.5em; color: #28235d;" class="text-left">Recherche</h3>
            <hr style="width: 4em;height:0.2em; background-color: red; margin-left:-0.1em; margin-top: -0.5em;margin-right:70em;">

           <form method="post" action="recherche.php">
             <div class="input-group">
               <input type="text" class="form-control" name="titre" placeholder="Rechercher">
               <div class="input-group-btn">
                 <button class="btn btn-default" type="submit" name="ok">
                   <i class="glyphicon glyphicon-search"></i>
                 </button>
               </div>
             </div>
           </form> 

          
           <div class="col-12">
              <h3 style="margin-top: 2.5em; color: #28235d;" class="text-left">Evenement</h3>
              <hr style="width: 4em;height:0.2em; background-color: red; margin-left:-0.1em; margin-top: -0.5em;margin-right:70em;">

              <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="item active">
                             
                        <img src="image/rock3.jpg" style="width:100%; ">
                        <div class="carousel-caption" style="background-color: black;opacity: 0.5;color: white;">
                            <p><i class="far fa-clock"></i>
                              <small><i class="fa fa-clock-o" aria-hidden="true"></i>22:05</small><h3 class="carousel-caption-header" >Evenement</h3></p>
                            <p class="carousel-caption-text hidden-sm hidden-xs">
                                <a href='event.php' style='color:white;'>» Lire la suite</a>
                            </p>
                        </div>
                    </div>
                       
              
                    
                        
                  </div>
                  <a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
              </div>
           </div>
           <br>



        </div>
        </div>
      </div>
  </div>


















  <footer id="myFooter">
            <div class="container">
                <div class="row" style="display: inline;">
                  <div class="col-sm-10">
                    <div class="map"   data-show-text="false" style="margin-top: 1em; ">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12976.983588839823!2d-5.3451722!3d35.5970005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x84b527bd313a7c3f!2sAya+Al+Madina!5e0!3m2!1sfr!2sma!4v1524162982104" width="60%" height="250" frameborder="0" style="border:0" ></iframe>
                    </div>
                  </div>

                    <div class="col-sm-2" style="margin-left: -8em;">
                        <h5>Contactez nous</h5>
                        <ul class="address">
                                  
                            <li>
                               <i class="fa fa-phone" aria-hidden="true" style="color: #EAC117;"></i> <a href="#">05397-21505</a>
                            </li><br>
                            <li>
                               <i class="fa fa-map-marker" aria-hidden="true" style="color:#EAC117;"></i> <a href="#">35.597009,-5.344884 Tétouan 93000</a>
                            </li> <br>
                            <li>
                               <i class="fa fa-envelope" aria-hidden="true" style="color:#EAC117;"></i> <a href="#">info@example.com</a>
                            </li> 

                        </ul>   
                    </div>
                </div>
            </div>
            <div class="second-bar">
               <div class="container">
                    <h2 class="logo"><a href="#"><img src="image/logo1.png" style="width: 3em;height: 2em; margin-top: -0.5em;"> <b><big> Cinema</big></b></a></h2>
                    <div class="social-icons">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/ayaalmadina17.18/" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
 </footer>
</body>
<style type="text/css">
#slider .item{
  background: cover;
}
#slide1{
 background:  center no-repeat;
}
#slide2{
  background:  center no-repeat;
}
#slide3{
 background:  center no-repeat;
}


.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}

img #im{
   border: 1px solid #ddd; 


}
.wrimagecard{ 
    margin-top: 0;
    margin-bottom: 1.5rem;
    text-align: left;
    position: relative ;
    background: #fff;
    box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
    border-radius: 4px;
    transition: all 0.3s ease;
    background-color: black;


}


a.wrimagecard:hover, .wrimagecard-topimage:hover {
    box-shadow: 2px 4px 8px 0px rgba(46,61,73,0.2);
    color:white;
}


.navbar, .dropdown-menu{
background: #0C090A;
border: none;

}

.list-group span{
  margin-left:5em;
}

.nav>li>a:focus, .nav>li>a:hover,.nav .open>a, .nav .open>a:focus, .nav .open>a:hover, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover{
  border-bottom: 3px solid transparent;
  background: rgba(154, 154, 154, 0.27);
}/*fin tancliciw 3la menu kidzad wa7ad khate lta7t*/
.navbar a, .dropdown-menu>li>a, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover, .navbar-toggle{
 color: #fff;
}/*katba bi white*/
.dropdown-menu{
    box-shadow:none;
}



.navbar-toggle .icon-bar{
    color: #fff;
    background: #000000;
}
.nav li.active{
  background-color:#EAC117;

}

.nav a#i2:hover{
  background-color:#EAC117;

}

  #myFooter {
    background-color: #0C090A;
    color: white;
}

#myFooter .row {
    margin-bottom: 60px;
}



#myFooter ul {
    list-style-type: none;
    padding-left: 0;
    line-height: 1.7;
}

#myFooter h5 {
    font-size: 18px;
    color: white;
    font-weight: bold;
    margin-top: 30px;
}

#myFooter .logo{
    margin-top: 10px;
}

#myFooter .second-bar .logo a{
    color:#0C090A;
    font-size: 28px;
    float: left;
    font-weight: bold;
    line-height: 68px;
    margin: 0;
    padding: 0;
}

#myFooter a {
    color: #d2d1d1;
    text-decoration: none;
}

#myFooter a:hover,
#myFooter a:focus {
    text-decoration: none;
    color: white;
}

#myFooter .second-bar {
    text-align: center;
    background-color: #EAC117;
    text-align: center;
}

#myFooter .second-bar a {
    font-size: 22px;
    color: #0C090A;
    padding: 10px;
    transition: 0.2s;
    line-height: 68px;
}

#myFooter .second-bar a:hover {
    text-decoration: none;
}

#myFooter .social-icons {
    float:right;
}


#myFooter .facebook:hover {
    color: #0077e2;
}

#myFooter .google:hover {
    color: #ef1a1a;
}

#myFooter .twitter:hover {
    color: #00aced;
}

@media screen and (max-width: 767px) {
    #myFooter {
        text-align: center;
    }

    #myFooter .info{
        text-align: center;
    }
}


#myFooter{
   flex: 0 0 auto;
   -webkit-flex: 0 0 auto;
}

</style>
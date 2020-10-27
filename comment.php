<!DOCTYPE html>
<html lang="en">
<head>
  <title>Emission De Cinéma</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="image/logo1.png">
  <link rel="stylesheet" href="css/diaporama.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
 <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
 <script>
      $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
      });
  </script>
   <?php 
     session_start();
   ?>
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
 <?php
 @
   session_start();
    
 ?>
<?php 
 
   if (isset($_POST['env'])) {
     $nom=$_POST['nom'];
     $msg=$_POST['msg'];
     $titre=$_SESSION['titre'];
     $h=date("h:i");
     $con=mysqli_connect('localhost','root','','ecine-1');
     $sql="INSERT INTO comment (name,title,message,hour)VALUES('$nom','$titre','$msg','$h') ";
     $res=mysqli_query($con,$sql);

   }

 ?>
</head>
<body style=" ">
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
                            <li class="" ><a href="index.php" id="i2">Accueil</a></li>
                            <li class=" dropdown"><a href="event.php" id="i2">Evenement</a></li>
                            <li class=" "><a href="movies.php" id="i3">Films</a></li>
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
      <h1 class="jumbotron-heading">Emission De Cinéma</h1>
    </div>
  </section>
  <div class="container-fluid text-center" style="margin-top: 3em;">    
      <div class="row content">
        <div class="col-sm-8  ">
              <div class="col-sm-4" >
                  <h3>Films Récents</h3>
                  <hr style="width: 5em;height:0.3em; background-color: red; margin-left:-6em; margin-top: -0.5em;">

                    
                       <?php
                         $con=new PDO("mysql:host=localhost;dbname=ecine-1","root","");
                         $req=$con->query("SELECT * FROM film_de_jour,session,salle,langue where  film_de_jour.id=session.id_film and session.id_salle=salle.id and film_de_jour.langue_id=langue.id LIMIT 0,4 ");
                         while ($row=$req->fetch()) {
                           $titre=$row['title'];
                       ?>
                   <div class="col-md-12" style="">

                       <div class="wrimagecard wrimagecard-topimage" style=""  >
                           <div class="wrimagecard-topimage_header" style="background-color: rgba(22, 160, 133, 0.1)">
                        
                             <img id="im" src="image/<?php echo $row['poster'];?>" style="width:100%; height:15em;">
                       
                           </div>
                           <div class="wrimagecard-topimage_title" style="margin-left:0.5em; margin-top: 0.5em; color: #E6E6E6;">
                             <p><i class="far fa-clock"></i>
                             <small><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $row['date_de_sortie'];?> Numero de Salle :<?php echo $row['numero'];?></small></p>
                             
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
              <?php
               $titre=$_SESSION['titre'];
              ?>
              <?php
                
                $con=mysqli_connect('localhost','root','','ecine-1');
                $sql="SELECT*FROM movie,genre,realisateur,langue where movie.genre_id=genre.GenreID and movie.realisateur_id=realisateur.id and  movie.langue_id=langue.id and  title='$titre'";
                $rows=mysqli_query($con,$sql);
              ?>
              <div class="col-sm-8 col-md-8 text-left">
                  
                    <div class="thumbnail principal-post">
                       <?php
                          while($row=mysqli_fetch_array($rows)) {
                       ?>
                       <img src="image/<?php echo $row['poster'];?>" class="img-thumbnail"  height="200em" style="width: 100%;">
                       <div class="caption">
                          <h3><?php echo $row['title'];?></h3>
                          <span class="date-of-post"><h4><small><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $row['date_de _sortie'];?> Duree :<?php echo date("h",$row['duree'])."h".date("i",$row['duree'])."min";?> Numero de Salle :16 Langue :Anglais</p></small></h4></span>
                          <p><span class="glyphicon glyphicon-user"></span><small><?php echo " ". $row['full_name'];?><?php echo " ". $row['nationalite'];?></small></p>
                          <p><?php echo $row['description']; } ?></p>

                          <?php
                            
                            $con=mysqli_connect('localhost','root','','ecine-1');
                            $sql="SELECT*FROM gallery where title='$titre'";
                            $rows=mysqli_query($con,$sql);

                          ?>
                          <h3>Galerie</h3>
                          <hr style="width: 5em;height:0.3em; background-color: red; margin-left:-38em; margin-top: -0.5em;">
                          <div class="row">
                              
                              <div class='list-group gallery'>
                                  <?php  while($row=mysqli_fetch_array($rows)) { ?>
                                  <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                                     <a class="thumbnail fancybox" rel="ligthbox" href="image/<?php echo $row['picture'];?>">
                                      <img class="img-responsive" alt="" src="image/<?php echo $row['picture'];?>" />
                                     </a>
                                     
                                  </div>
                                  <?php }?>
                              </div>
                              
                          </div>
                          <h3>Bande-annonce</h3>
                          <hr style="width: 5em;height:0.3em; background-color: red; margin-left:-37.5em; margin-top: -0.5em;">
                          <?php
                             $con=mysqli_connect('localhost','root','','ecine-1');
                             $sql="SELECT*FROM movie,genre,realisateur,langue where movie.genre_id=genre.GenreID and movie.realisateur_id=realisateur.id and  movie.langue_id=langue.id  and title='$titre'";
                             $res=mysqli_query($con,$sql);
                          ?>
                          <div class="row">
                            
                             <div id="fb-root"></div>
                               
                               <?php while($rows=mysqli_fetch_array($res)) {?>
                               <div class="fb-video"  data-width="300"  data-show-text="false" style="margin-left: 2em;">
                                 <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $rows['trailer'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               
                               </div>
                             <?php }?>
                          </div>
                          <h3>Héros</h3>
                          <?php
                             $con=mysqli_connect('localhost','root','','ecine-1');
                             $sql="SELECT *FROM hero where title='$titre'";
                             $res=mysqli_query($con,$sql);
                          ?>
                          <hr style="width: 5em;height:0.3em; background-color: red; margin-left:-37.5em; margin-top: -0.5em;">
                          <div class="container" style="width: 40em;">
             
                            <section class="customer-logos1 slider text-center">
                               <?php while($rows=mysqli_fetch_array($res)) {?>
                               <div class="slide"><img src="image/<?php echo $rows['picture'];?>" style="width: 10em;height: 10em;"><h5><?php echo $rows['full_name'];?></h5></div>
                               <?php }?>
                               
                            </section>
                         </div>
                         <h3>Commentaire</h3>
                         <hr style="width: 5em;height:0.3em; background-color: red; margin-left:-37.5em; margin-top: -0.5em;">
                         <form action="comment.php" method="post">
                            <div class="form-group">
                              <input type="text" class="form-control" name="nom" placeholder="Nom">
                            </div>
                            <div class="form-group">
                              <textarea type="text" class="form-control" name="msg" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default" name="env">Send</button>
                         </form>
                         <hr>
                        
                         <?php
                             $con=mysqli_connect('localhost','root','','ecine-1');
                             $sql="SELECT *FROM comment where title='$titre'";
                             $res=mysqli_query($con,$sql);
                          ?>
                          <?php while($rows=mysqli_fetch_array($res)) {?>
                            
                         <div class="panel panel-default">
                           <div style="margin-left:0.5em;">
                            <p> <?php echo $rows['name']; ?> : <small><?php echo $rows['message']; ?></small> </p>
                            <p style="line-height:50%"><small><?php echo $rows['hour']; ?></small></p>
                          </div>
                         </div>
                        <?php } ?>


                        </div>
                    </div>
              </div>

             
             
              
               
             

        </div>


        <div class="col-sm-3 " >

          <a href="contact.php" style="text-decoration: none;">
              <div class="well" style="background-color: black; height: 4em;">
                <font size="3" color="white"><p>Contact</p></font>
              </div>
           </a>
           <?php 
                  if(isset($_POST['send'])){
                      $mail=$_POST['email'];   
                      $con=new PDO("mysql:host=localhost;dbname=ecine-1","root","");
                      $req=$con->prepare("INSERT INTO newsletter (email)  VALUES(:m)");
                      $req->execute(array(':m'=>$mail));
                  }            
            ?>
           <div class="panel panel-default" style="">
             <div class="panel-heading" style="background-color: black; color: white;border-color:black;">NewsLetter</div>
             <div class="panel-body">
               <form action="Description_film.php">
                <div class="input-group">
                  <input type="mail" class="form-control" placeholder="Email" name="email">
                  <div class="input-group-btn">
                    <button class="btn btn-default" name="send" type="submit">
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
                             
                        <img src="image/img5.jpg" style="width:100%; ">
                        <div class="carousel-caption" style="background-color: black;opacity: 0.5;color: white;">
                            <p><i class="far fa-clock"></i>
                              <small><i class="fa fa-clock-o" aria-hidden="true"></i>22:05</small><h3 class="carousel-caption-header" >Evenement</h3></p>
                            <p class="carousel-caption-text hidden-sm hidden-xs">
                                <a href='event.php' style='color:white;'>» Lire la suite</a>
                            </p>
                        </div>
                    </div>
                       
              
                    <div class="item">
                            
                        <img src="image/rock3.jpg" style="width:100%; ">
                            <div class="carousel-caption" style="background-color: black;opacity: 0.5;color: white;">
                            <p><i class="far fa-clock"></i>
                              <small><i class="fa fa-clock-o" aria-hidden="true"></i>10:30</small><h3 class="carousel-caption-header" >Evenement</h3></p>
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




        </div>
        </div>
      </div>
  </div><br><br><br>
  
















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




.gallery
{
    display: inline-block;
    margin-top: 20px;
}

.navbar, .dropdown-menu{
background: #0C090A;
border: none;

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
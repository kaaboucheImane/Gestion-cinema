<!DOCTYPE html>
<html lang="en">
<head>
  <title>CONTACT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css_page1.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="image/logo1.png">
	<link rel="stylesheet" href="css/diaporama.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
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
                            <li class=""><a href="movies.php" id="i3">Films</a></li>
                           
                        </ul>
                        <ul class="nav navbar-nav pull-right">
                            <li class="active"><a href="contact.php" id="i2">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
  </div>
  <section class="jumbotron text-center" style="margin-top:0em;background-color: #EAC117;">
    <div class="container">
      <h1 class="jumbotron-heading">Contact</h1>
    </div>
  </section>
  <?php 
 
   if (isset($_POST['ok'])) {
     $nom=$_POST['nom'];
     $mail=$_POST['mail'];
     $phone=$_POST['phone'];
     $msg=$_POST['msg'];
     $con=mysqli_connect('localhost','root','','ecine-1');
     $sql="INSERT INTO contact (full_name,email,phone,message)VALUES('$nom','$mail','$phone','$msg') ";
     $res=mysqli_query($con,$sql);

   }

 ?>
   <div class="container">

        <div class="map" style="margin-top: 4em;box-shadow: 3px 3px grey;">
           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12976.983588839823!2d-5.3451722!3d35.5970005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x84b527bd313a7c3f!2sAya+Al+Madina!5e0!3m2!1sfr!2sma!4v1524162982104" width="100%" height="450" frameborder="0" style="border:0" ></iframe>
        </div>
        
     <div class="col-sm-9 col-md-6 col-lg-8" id="box" style=" margin-top: 2em; background-color: white;border-radius: 2% 0% 0% 2%;">
        <h2>Contactez nous!</h2>
        <div>
        </div>
        <hr>
        <form class="form-horizontal" action="contact.php" method="post" id="contact_form">
          <fieldset>
            <div class="form-group">
              <div class="col-md-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input  placeholder="Nom/Prénom" class="form-control" type="text" name="nom">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input  placeholder="E-Mail Address" class="form-control" type="text" name="mail">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                  <input   class="form-control" type="text" name="phone" placeholder="Téléphone">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                  <textarea class="form-control"  placeholder="Message" name="msg"></textarea>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <button type="submit" class="btn btn-warning pull-right" name="ok" style="background-color: #EAC117;">Envoyer<span class="glyphicon glyphicon-send"></span></button>
              </div>
            </div>
          </fieldset>
        </form>
     </div>

     <div class="col-sm-3 col-md-6 col-lg-4 " style="margin-top: 2em; border-color: black 2px; background-color: white; height: 25.65em;border-radius: 0% 2% 2% 0%;">
        <aside class="sidebar">
            <div class="single contact-info">
              <h2 class="side-title">Contact Information</h2>
            <div>

            </div>
            <hr>
            <ul class="list-unstyled">
                <li>
                    <div class="icon"><i class="fa fa-map-marker" style="color: grey;"></i></div>
                    <div class="info"><p>35.597009,-5.344884<br>Tétouan 93000</p></div>
                </li>

                <li>
                    <div class="icon"><i class="fa fa-phone" style="color: grey;"></i></div>
                    <div class="info"><p>05397-21505<br>06619-66497</p></div>
                </li>

                <li>
                    <div class="icon"><i class="fa fa-envelope" style="color: grey;"></i></div>
                    <div class="info"><p>info@example.com<br>sales@yourdomain.com</p></div>
                </li>
            </ul>
          </div>
        </aside>
     </div>
    </div><br><br>

  
















  <footer id="myFooter">
            
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
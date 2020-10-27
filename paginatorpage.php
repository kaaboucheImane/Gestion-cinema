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
<?php  

  require 'paginator.php';
 $mysqli=new mysqli('localhost','root','','ouvrages');
 $query= " SELECT * FROM sous_categories ";

  $limit=(isset($_GET['limit'])) ? $_GET['limit'] :5;
  $page=(isset($_GET['page'])) ? $_GET['page'] :1;
  $links=2;

  $paginator=new paginator($mysqli,$query);
  $results=$paginator->getData($limit,$page);



  echo $paginator->createLinks($links,'pagination pagination-sm');


 ?>
 <div class="main-container"><?php  

  for ($p=0; $p <count($results->data) ; $p++) { 
  	$movie=$results->data[$p];
  	echo "<br>".$movie['sous_categorie'];
  }

  ?></div>
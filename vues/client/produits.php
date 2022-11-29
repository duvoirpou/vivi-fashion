<?php
// Start the session
/* session_start(); */
include('config_produits.php');
//stocker les ajouts dans la session
if (isset($_GET["ajouter"]))
{
	
  
	
  if (!isset($_SESSION["list"]))
  {
    $_SESSION["list"] = array();
  }
  array_push($_SESSION["list"], $_GET["ajouter"]);
}





//compter elements dans panier
$panier_count = 0;
if (isset($_SESSION["list"]))
{
  $panier_count = sizeof($_SESSION["list"]);
}
?>



<?php
/*require 'modeles/classeFunction.php';

$produit = new imagePanier(NULL,NULL,NULL,NULL,NULL,NULL);

	$produit->TraitementProduits();
	$aff = $produit->afficheProduits();
		*/
?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Vivi-Fashion</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="layout/style.css" type="text/css" media="all" />

<!-- Favicon  -->
    <link rel="icon" href="images/vivicon.png"/>
			<!-- -->

<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->

<link type="text/css" rel="stylesheet" href="layout/csstyle.css"/>
<link type="text/css" rel="stylesheet" href="layout/styleI.css"/>
<link type="text/css" rel="stylesheet" href="layout/css/styleMenu.css"/>
<!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"/> -->
	
	<script src="fontawesome_free_5_2_0_web/fontawesome_free_5_2_0_web/js/all.js" type="text/javascript"></script><!-- icon -->
	
<link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.css"/>	


<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />


<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>




<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
<!-- Homepage Only Scripts -->
<script type="text/javascript" src="layout/scripts/jquery.cycle.min.js"></script>


<style>
   .center {
      text-align: center;
    }

    .pagination {
      margin: 0 auto;
      text-align: center;
      padding: 24px;
    }

    .pagination li {
      display: inline;
      color: #fff;
      text-shadow: 0 1px 1px #eee;
    }

    .pagination li span {
      letter-spacing: 0.1em;
      margin: 0 6px;
    }

    .pagination li a {
      background: #E89F10;
      color: #fff;
      border: 1px solid #E89F10;
      padding: 10px 12px;
      text-decoration: none;
      -moz-border-radius: 6px;
      border-radius: 3px;
      text-shadow: 0 1px 1px #eee;
      margin: 0 3px;
    }

    .pagination li a:hover {
      background: white;
      color: #303438;
    }

    .pagination li.active a {
      background: white;
      color: #303438;
      border: none;
      font-weight: bolder;
    }


    .pagination li .titik {

      color: #303438;

      font-weight: bolder;
    }


    .pagination li.symbol a {
      font-size: 16px;
      font-weight: bolder;
      padding: 5px 12px 8px 12px;
    }


    .pagination li.disabled {
      display: none;
      visibility: hidden;
    }

</style>

</head>
<body>
<script type="text/javascript">
$(function() {
    $('#featured_slide').after('<div id="fsn"><ul id="fs_pagination">').cycle({
        timeout: 5000,
        fx: 'fade',
        pager: '#fs_pagination',
        pause: 1,
        pauseOnPagerHover: 0
    });
});
</script>


<!-- Shell -->
<div class="shell" style="">
       <?php if(isset($_SESSION['nom_client'])){ echo '
  <div id="header" classe="header" style="margin-top:10px; ">';}else{echo '
  <div id="header">';}?>
    <!--<h1 id="logo" style="color:white; font-size:50px"><a href="#">shoparound</a></h1>-->
  <div class="vivi" style="position:absolute; margin-top:23px; margin-left:10px;" ><nav class="navbar navbar-light " style="background-color: #778899;">
                <span class="navbar-brand" href="#" style="color:white; font-size:29px; height:53px; font-family: Verdana; text-shadow: 2px 2px 4px black; ">
    
                <b>Vivi-Fashion</b>
                </span>
                </nav></div>
    <!-- Cart -->
    <div id="cart" style="background-color:"> <a href="?c=pan" class="cart-link"><i class="fab fa-opencart" style="font-size:16px;"></i>Voir le panier</a>
      <div class="cl">&nbsp;</div><?php
    
    
    //compter elements dans panier
$panier_count = 0;
if (isset($_SESSION["list"]))
{
  $panier_count = sizeof($_SESSION["list"]);
}?>
      <span class=""><center> Articles : <strong><?php print $panier_count; ?></strong></center></span> &nbsp;&nbsp; 
    
    
    
    <?php
    ?>
     </div>
    <!-- End Cart -->
    <!-- Navigation -->
  
  <div class="client" style="background-color:; width:177px">
      <?php
        if(isset($_SESSION['nom_client'])){
        echo '<div style="" class="nom_client"><b>'.$_SESSION['nom_client'].'</b>|<a href="?c=dcx_client" style="text-decoration: none"><b>déconnexion</b></a></div>';}
      ?>
      </div>
  
  
    <div id="navigation">
      <ul class="">
                  <li><a href="?c" class="a">Accueil</a></li>
                  <li><a href="?c=pro" class="active a">Produits</a></li>
                  
                  <?php
                  if(!isset($_SESSION['id_client'])){
                  echo '<li><a href="?c=commande" class="a">Mon Compte</a></li>';}
                  ?>
                  
                  <?php
									if(isset($_SESSION['id_client'])){
									echo '<li><a href="?c=Comm" class="a">Mes Achats</a></li>';}
									?>
                  
                  <li><a href="?c=pan" class="a">Mon Panier</a></li>
                  <li><a href="?c=contact" class="a">Contact</a></li>
                 </ul>
    </div>
  </div>
  <!-- End Header -->
  <!-- Main -->
  <div id="main">
    <div class="cl">&nbsp;</div>
    <!-- Content -->
    
    <div id="sidebar" style="width: 217px; position: absolute">
      <!-- Search -->
      <div class="box " >
        <h2>Search by <span></span></h2>
        <div class="box-content">
          <form action="#" method="post">
            <label>Keyword</label><br>
            <input type="text" class="field" style="width:150px"/><br>
            <label>Category</label><br>
            <select class="field" style="width:150px">
              <option value="">-- Select Category --</option>
            </select><br><br>
            <div class="inline-field">
              <label>Prix</label>
              <select class="field small-field">
                <option value="">1000</option>
              </select><b>fcfa</b>
              <label>à:</label>
              <select class="field small-field">
                <option value="">5000</option>
              </select><b>fcfa</b>
            </div>
            <input type="submit" class="search-submit" value="Search" />
            <!-- <p> <a href="#" class="bul">Advanced search</a><br />
              <a href="#" class="bul">Contact Customer Support</a> </p> -->
          </form>
        </div>
      </div>
      <!-- End Search -->
      <!-- Categories -->
      
      </div>
    
    <div class="products" style="margin-left: 227px;">
    <div class="cl">&nbsp;</div>
    <div class="ligne">
    <?php
              for($i=0; $i < count($results->data); $i++) {
            ?>
      
				<div class="img1">
        <ul>
          <li> <a ><img src="images/<?php echo $results->data[$i]['photo']?>"/></a>
					<div class="middle">
            <div class="text">APC</div>
            <div style="margin-top:90px; position:absolute; background-color:; width:290px; margin-left:-100px; text-align:center"><strong class="price"><?php echo number_format(($results->data[$i]['prix']),'0',',',' ')?> fcfa</strong>
												 <a class="" href="?c=pro&ajouter=<?php echo($results->data[$i]['id_produits'])?>" id=""><i class="fa fa-cart-arrow-down" style="font-size:25px; margin-left:-10px; margin-top:10px"></i>
												 </a>	
											</div> 
          </div>
          </li>
    </ul>
    <div class="cl">&nbsp;</div>
    <br>
        </div>
        
        <?php }?>
      </div>
      </div>
      
		  
	  
      <div class="center" style="">
      <?php
        echo $paginator->createLinks($links);
      ?>
      
    </div>
    
    
	  
    </div>
    <!-- End Content -->
   
      <!-- End Categories -->
    </div>
    <!-- End Sidebar -->
    <div class="cl">&nbsp;</div>
	
	<!-- Footer -->
  <?php include('footer.php'); ?>
  <!-- End Footer -->
  
  
  </div>
  <!-- End Main -->
  
  </ul>
</div>
<!-- End Shell -->


 <script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
			 <script src="js/bootstrap.min.js"></script>
			 
			 


</body>
</html>
	  
		
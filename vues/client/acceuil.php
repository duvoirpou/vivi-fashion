<!DOCTYPE html >
<html >
<head>
<title>Vivi-Fashion</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<!-- Favicon  -->
    <link rel="icon" href="images/vivicon.png"/>
			<!-- -->

<link rel="stylesheet" href="layout/style.css" type="text/css" media="all" />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->

<link type="text/css" rel="stylesheet" href="layout/csstyle.css"/>
<link type="text/css" rel="stylesheet" href="layout/styleI.css"/>
<link type="text/css" rel="stylesheet" href="layout/css/styleMenu.css"/>
<link type="text/css" rel="stylesheet" href="layout/mon_bootstrap.css"/>
<!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	
	<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
  
<link rel="stylesheet" href="layout/jquery-ui-1.12.1.custom/jquery-ui.css"/>

<script src="layout/fontawesome_free_5_2_0_web/js/all.js" type="text/javascript"></script><!-- icon -->
<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>


<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
<!-- Homepage Only Scripts -->
<script type="text/javascript" src="layout/scripts/jquery.cycle.min.js"></script>


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


<style>

</style>

</head>



<body style="">
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
    <div id="cart" style=""> <a href="?c=pan" class="cart-link"><i class="fab fa-opencart" style="font-size:16px;"></i>Voir le panier</a>
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
	
	<div class="client" style="width:177px">
			<?php
				if(isset($_SESSION['nom_client'])){
				echo '<div style="" class="nom_client"><b>'.$_SESSION['nom_client'].'</b>|<a href="?c=dcx_client" style="text-decoration: none"><b>déconnexion</b></a></div>';}
			?>
			</div>
	
	
    <div id="navigation">
      <ul class="">
									<li><a href="?c" class="active a">Accueil</a></li>
									<li><a href="produits.php" class="a">Produits</a></li>
									
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
    <div id="content">
      <!-- Content Slider -->
      <div id="slider" class="box">
        <div id="slider-holder">
          <ul>
            <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
            <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
            <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
            <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
          </ul>
        </div>
        <div id="slider-nav"> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> </div>
      </div>
      <!-- End Content Slider -->
      <!-- Products -->
      <div class="products">
        <div class="cl">&nbsp;</div>
        <ul>
        <?php while($et=$aff2->fetch()){?>
          <li> <a ><img src="images/<?php echo($et['photo'])?>" alt="" /></a>
            <div class="product-info">
              <h3><?php echo($et['libelle'])?></h3>
              <div class="product-desc">
                <h4><?php echo($et['nom_cat'])?></h4>
                <p><?php echo($et['nom_produits'])?></p>
                <strong class="price"><?php echo number_format(($et['prix']),'0',',',' ')?> fcfa</strong> </div>
            </div>
          </li>
          <?php }?>
          <!-- <li> <a ><img src="images/sacs/IMG-20190107-WA0022.jpg" alt="" /></a>
            <div class="product-info">
              <h3>LOREM IPSUM</h3>
              <div class="product-desc">
                <h4>WOMEN’S</h4>
                <p>Lorem ipsum dolor sit<br />
                  amet</p>
                <strong class="price"> fcfa</strong> </div>
            </div>
          </li> -->
          <?php while($et=$aff3->fetch()){?>
          <li class="last"> <a ><img src="images/<?php echo($et['photo'])?>" alt="" /></a>
            <div class="product-info">
              <h3><?php echo($et['libelle'])?></h3>
              <div class="product-desc">
                <h4><?php echo($et['nom_cat'])?></h4>
                <p><?php echo($et['nom_produits'])?></p>
                <strong class="price"><?php echo number_format(($et['prix']),'0',',',' ')?> fcfa</strong> </div>
            </div>
          </li>
          <?php }?>
        </ul>
        <div class="cl">&nbsp;</div>
      </div>
	  
	  
	  <div class="products plusProduits">
        <div class="cl">&nbsp;</div>
        <ul>
        <?php while($et=$aff4->fetch()){?>
          <li> <a ><img src="images/<?php echo($et['photo'])?>" alt="" /></a>
            <div class="product-info">
              <h3><?php echo($et['libelle'])?></h3>
              <div class="product-desc">
                <h4><?php echo($et['nom_cat'])?></h4>
                <p><?php echo($et['nom_produits'])?></p>
                <strong class="price"><?php echo number_format(($et['prix']),'0',',',' ')?> fcfa</strong> </div>
            </div>
          </li>
          <?php }?>
          <!-- <li> <a ><img src="images/sacs/IMG-20190108-WA0013.jpg" alt="" /></a>
            <div class="product-info">
              <h3>LOREM IPSUM</h3>
              <div class="product-desc">
                <h4>WOMEN’S</h4>
                <p>Lorem ipsum dolor sit<br />
                  amet</p>
                <strong class="price"> fcfa</strong> </div>
            </div>
          </li> -->
          <?php while($et=$aff5->fetch()){?>
          <li class="last"> <a ><img src="images/<?php echo($et['photo'])?>" alt="" /></a>
            <div class="product-info">
              <h3><?php echo($et['libelle'])?></h3>
              <div class="product-desc">
                <h4><?php echo($et['nom_cat'])?></h4>
                <p><?php echo($et['nom_produits'])?></p>
                <strong class="price"><?php echo number_format(($et['prix']),'0',',',' ')?> fcfa</strong> </div>
            </div>
          </li>
          <?php }?>
        </ul>
        <div class="cl">&nbsp;</div>
      </div>
      <!-- End Products -->
    </div>
    <!-- End Content -->
    <!-- Sidebar -->
    <div id="sidebar">
      <!-- Search -->
      <div class="box " >
        <h2 style="font-size: 16px">Recherche par <span></span></h2>
        <div class="box-content">
          <form action="" method="post">
          <div class="form-group">
            <!-- <label>Produit</label><br> -->
            <select class="form-control" style="width:200px" name="id_type">
            <option value='0'>-- Type --</option>
                                            <?PHP $dbh = connexionBdd();
                                            $req_arrond = $dbh->prepare("SELECT * FROM type_produit ORDER BY id_type");
                                            $req_arrond->execute();
                                            while ($data = $req_arrond->fetch()) {
                                                echo "<option value=" . $data['id_type'] . ">" . $data['libelle'] . "</option>";
                                            }
                                            ?>
                     </select>                       
            
            <!-- <label> -->
              </div><br>
              <div class="form-group">
            <!-- <label>Categorie</label><br> -->
            <select class="form-control" style="width:200px" name="id_cat">
              <option value="0">-- Catégorie --</option>
              <?PHP
                  $req_type = $dbh->prepare("SELECT * FROM categories ORDER BY id_cat");
                  $req_type->execute();
                  while ($data = $req_type->fetch()) {
                       echo "<option value=" . $data['id_cat'] . ">" . $data['nom_cat'] . "</option>";
                                            }
                                            ?>
            </select>
            </div><br>
            <!-- <div class="inline-field">
              <label>Prix</label>
              <select class="field small-field">
                <option value="">1000</option>
              </select><b>fcfa</b>
              <label>à:</label>
              <select class="field small-field">
                <option value="">5000</option>
              </select><b>fcfa</b>
            </div> -->
            <!-- <button type="submit" name="recherche" id="" class="btn btn-primary btn-sm " style="margin-left: 0px;">Validez</button> -->
             <input type="submit" name="recherche" class="btn btn-primary btn-sm " value="Valider" style="margin-left: 0px;"/>
            <!-- <p> <a href="#" class="bul">Advanced search</a><br />
              <a href="#" class="bul">Contact Customer Support</a> </p> -->
          </form>
        </div>
      </div>
      <!-- End Search -->
      <!-- Categories -->
      <!--<div class="box">
        <h2>Categories <span></span></h2>-->
        <!--<div class="box-content">
          <div id="H" title="Cliquez">
							 <h2 style="color:white; font-size:1.5em; " class="h21">HOMMES <div class="spanH"><span></span></div></h2> 
							
						</div >
				<div id="homme" >
					
					
					<div id="articleH ">
						
			
						<div class="mnu " style="margin-top:5px; width:203px; margin-left:0px;">
						  <ul>
							<li><a rel="nofollow" target="" href="?c=phb" title=""><div class="span">Baskets</div></a></li>
							
							<li><a rel="nofollow" target="" href="?c=chemiseH" title=""><div class="span survol1" >Chemises</div></a></li>
							<li><a rel="nofollow" target="" href="#" title=""><div class="span" ><b>Chaussures</b></div></a></li>
							<li><a rel="nofollow" target="" href="?c=shortH" title=""><div class="span survol" ><b>Culottes</b></div></a></li>
							<li><a rel="nofollow" target="" href="#" title=""><div class="span">Pantalons</div></a></li>
							<li><a rel="nofollow" target="" href="#" title=""><div class="span">T-shirts</div></a></li>
							<li><a rel="nofollow" target="" href="#" title=""><div class="span">Sandales</div></a></li>
							
							<li><a rel="nofollow" target="" href="?c=vesteH" title="E-lusion"><div class="span">Vestes</div></a></li>
						  </ul>
  
						</div>
						
				<div class="mnu aff" style="margin-left:190px; margin-top:-187px; position:absolute; z-index:2; display:none">
					<ul>
					
					
						<li><a rel="nofollow" target="_blank" href="#" title="E-lusion">
						<div class="span">slips</div></a></li>
						
						
					
					</ul>
				</div>	
				
				<div class="mnu aff1" style="margin-left:190px; margin-top:-255px; position:absolute; z-index:2; display:none">
					<ul>
					
					
						<li><a rel="nofollow" target="_blank" href="#" title="E-lusion">
						<div class="span">contre-sueur</div></a></li>
						
						
					
					
					</ul>
				</div>		
				</div>  Fin #articleH 
					
					
					
				</div>  Fin #homme 
				
				
				
				<div id="F" >
						<h2 style="color:white; font-size:1.5em;" class="h22">FEMMES <div class="spanF"><span></span></div ></h2>
				</div >
				
				<div id="femme">
					
					
					<div id="articleF">
						
						
						<div class="mnu" style="width:203px; margin-left:10px; margin-top:5px">
						  <ul>
							<li><a rel="nofollow" target="_blank" href="?c=pfb" ><div class="span">Baskets</div></a></li>
							
							<li><a  href="?c=chemiseF" ><div class="span">Chemises</div></a></li>
							<li><a  href="#" ><div class="span">Chaussures</div></a></li>
							<li><a  href="#" ><div class="span">Culottes</div></a></li>
							<li><a  href="#" ><div class="span">Pantalons</div></a></li>
							<li><a  href="#" ><div class="span">T-shirts</div></a></li>
							<li><a  href="#" title="E-lusion"><div class="span">Sandales</div></a></li>
							
							<li><a  href="#" ><div class="span">Vestes</div></a></li>
						  </ul>
						</div>
							
					</div>  Fin #articleF 
					
				</div>  Fin #femme 
				
				
				<div id="E" >
						<h2 style="color:white; font-size:1.5em;" class="h23">ENFANTS <div class="spanE"><span></span></div></h2>
				</div >
				
				<div id="ENFANTS">
					
					
					<div id="articleE">
						
						 Menu Article Enfants 
						<div class="mnu" style="width:203px; margin-left:0px; margin-top:5px">
						  <ul>
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span survolF">Filles</div></a></li>
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span survolG">Garçons</div></a></li>
						  </ul>
						  
						   Sous menu Fille 
							 <div class="mnu affF" style="margin-left:190px; margin-top:-84px; position:absolute; z-index:2; display:none">
						  <ul>
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span">Baskets</div></a></li>
							
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span">Culottes</div></a></li>
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span">Chaussures</div></a></li>
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span">Pantalons</div></a></li>
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span">T-shirts</div></a></li>
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span">Sandales</div></a></li>
							<li><a rel="nofollow" target="_blank" href="http://www.e-lusion.com/" title="E-lusion"><div class="span">Vestes</div></a></li>
							
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span">E-</div></a></li>
						  </ul>
						</div>  FIN Sous menu Fille 
						
						 Sous menu Garçon 
						  <div class="mnu affG" style="margin-left:190px; margin-top:-50px; position:absolute; z-index:2; display:none">
						  <ul>
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span">Baskets</div></a></li>
							
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span">Culottes</div></a></li>
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span">Chaussures</div></a></li>
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span">Pantalons</div></a></li>
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span">T-shirts</div></a></li>
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span">Sandales</div></a></li>
							<li><a rel="nofollow" target="_blank" href="#" title="E-lusion"><div class="span">sous-vêtements</div></a></li>
							
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span">Vestes</div></a></li>
						  </ul>
						</div> FIN Sous menu Garçon 
						  
						</div> FIN Menu Article Enfants 
						
						
					</div>  fin #articleE 
					
				</div>  Fin #ENFANTS 
				
				
				<div id="A">
						<h2 style="color:white" class="h24">SACS & ACCESSOIRES <div class="spanA"><span></span></div></h2>
				</div >
				
				<div id="autres">
					
					
					<div id="articleA">
						
						
						<div class="mnu" style="width:203px; margin-left:0px; margin-top:0px">
						  <ul>
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span">Casquettes</div></a></li>
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span">bonnets</div></a></li>
							
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span">E-</div></a></li>
							<li><a rel="nofollow" target="_blank" href="#" ><div class="span">E-</div></a></li>
						  </ul>
						</div>
						
						
					</div>  Fin #articleA 
					
				</div>  Fin #autres 
        </div>



      </div>-->
      <!-- End Categories -->
    </div>
    <!-- End Sidebar -->
    <div class="cl">&nbsp;</div>
  </div>
  <!-- End Main -->
  <!-- Side Full -->
  <div class="side-full" style="">
    <!-- More Products -->
    <div class="more-products" style="margin-top:20px">
      <div class="more-products-holder">
        <ul>
        <?php while($et=$aff6->fetch()){?>
          <li><a href="#"><img src="images/<?php echo($et['photo'])?>" alt="" /></a></li>
        <?php } ?>
          <!-- <li><a href="#"><img src="css/images/small2.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small3.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small4.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small5.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small6.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small7.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small2.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small3.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small4.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small5.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small6.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small7.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small2.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small3.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small4.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small5.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small6.jpg" alt="" /></a></li> -->
          <li class="last"><a href="#"><img src="css/images/small7.jpg" alt="" /></a></li>
        </ul>
      </div>
      <div class="more-nav"> <a href="#" class="prev">previous</a> <a href="#" class="next">next</a> </div>
    </div>
    <!-- End More Products -->
    <!-- Text Cols -->
    <div class="cols" style="margin-top:20px">
      <div class="cl">&nbsp;</div>
      <div class="col">
        <h3 class="ico ico1">Donec imperdiet</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
        <p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
      </div>
      <div class="col">
        <h3 class="ico ico2">Donec imperdiet</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
        <p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
      </div>
      <div class="col">
        <h3 class="ico ico3">Donec imperdiet</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
        <p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
      </div>
      <div class="col col-last">
        <h3 class="ico ico4">Donec imperdiet</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
        <p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
      </div>
      <div class="cl">&nbsp;</div>
    </div>
    <!-- End Text Cols -->
  </div>
  <!-- End Side Full -->
  
  
  
  
  
  <?php include('footer.php'); ?>
</div>

</div>
<!-- End Shell -->


 <script src="layout/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
			 <script src="js/bootstrap.min.js"></script>
			 
			 

  <script>
  
  /* MON MENU A GAUCHE */
  $( function() {
    $( ".menu" ).menu();
  } );
  
  $('#H').click(
	function(){
		$('#articleH, #homme, .spanH').toggle('slow');
		$('#articleF, #femme, #ENFANTS, #articleE, #autres, #articleA, .spanF, .spanE, .spanA').hide('slow');
		
		$('.gauche1').toggle('slow');
		
	}
	);
	
	$('#F').click(
	function(){
		$('#articleF, #femme, .spanF').toggle('slow');
		$('#articleH, #homme, #ENFANTS, #articleE, #autres, #articleA, .spanH, .spanE, .spanA').hide('slow');
		$('.gauche1').toggle('slow');
	}
	);
	
	$('#E').click(
	function(){
		$('#ENFANTS, #articleE, .spanE').toggle('slow');
		$('#articleH, #homme, #articleF, #femme, #autres, #articleA, .spanH, .spanF, .spanA').hide('slow');
		$('.gauche1').toggle('slow');
	}
	);
	
	$('#A').click(
	function(){
		$('#autres, #articleA, .spanA').toggle('slow');
		$('#articleH, #homme, #articleF, #femme, #ENFANTS, #articleE').hide('slow');
		$('.gauche1').toggle('slow');
	}
	);
	
	
							$('.survol1').mouseover(function(){
								$('.aff1').toggle();
							});
							
							$('.survol').mouseover(function(){
								$('.aff').toggle();
							});
							$('.survolF').mouseover(function(){
								$('.affF').toggle();
								$('.affG').hide();
							});
							$('.survolG').mouseover(function(){
								$('.affG').toggle();
								$('.affF').hide();
							});
							$('#H, #F, #E, #A, #slider, .produits').mouseover(function(){
								$('.affG').hide();
								$('.affF').hide();
								$('.aff').hide();
								$('.aff1').hide();
							});
					
	
	/* --------FIN--------- */
	

	$('.readmore').click(
	function(){
		$('.top').toggle('slow');
		$('.boxtop').toggle('slow');
		
	}
	);
	
	
	
	

  </script>


</body>
</html>

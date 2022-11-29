<!DOCTYPE html>
	<html>
		<head>
		<link rel="icon" href="images/vivicon.png"/>
<title>Vivi-Fashion</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="all" />

<!-- Favicon  -->
    <link rel="icon" href="images/vivicon.png"/>
			<!-- -->

<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->

<link type="text/css" rel="stylesheet" href="csstyle.css"/>
<link type="text/css" rel="stylesheet" href="styleI.css"/>
<link type="text/css" rel="stylesheet" href="css/styleMenu.css"/>
<!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="fontawesome_free_5_2_0_web/fontawesome_free_5_2_0_web/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"/><!-- icon -->
	<script src="fontawesome_free_5_2_0_web/fontawesome_free_5_2_0_web/js/all.js" type="text/javascript"></script><!-- icon -->
<link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.css"/>	

<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>
</head>
		
		<body> <!-- <div class="container-fluid" style="background-color:#FAEBD7; height:120px; position:absolute; z-index:4; opacity:0.7;"></div> -->
		<div class="shell" style="">
			
			<?php if(isset($_SESSION['nom_client'])){ echo '
  <div class="container" style=" padding-top:10px; ">';}else{echo '
  <div class="container" style=" /*padding-top:10px;*/ ">';}?>
			
			<div id="header">
    <!--<h1 id="logo" style="color:white; font-size:50px"><a href="#">shoparound</a></h1>-->
	<div class="vivi" style="" ><nav class="navbar navbar-light " style="background-color: #778899;">
								<span class="navbar-brand" href="#" style="color:white; font-size:29px; height:53px; font-family: Verdana; text-shadow: 2px 2px 4px black; ">
    
								<b>Vivi-Fashion</b>
								</span>
								</nav></div>
    <!-- Cart -->
    <div id="cart" style="background-color:"> <a href="?c=pan" class="cart-link"><i class="fab fa-opencart" style="font-size:16px;"></i> Voir le panier</a>
      <div class="cl">&nbsp;</div><?php
	  
	  
	  //compter elements dans panier
$panier_count = 0;
if (isset($_SESSION["list"]))
{
  $panier_count = sizeof($_SESSION["list"]);
}?>
      <span><center>Articles: <strong><?php print $panier_count; ?></strong></center></span></div>
    <!-- End Cart -->
    <!-- Navigation -->
	
	
	<div class="client" style="width:177px;">
			<?php

				if(isset($_SESSION['nom_client'])){
				echo '<div style="background-color:; margin-left:55px"><b>'.$_SESSION['nom_client'].'</b>| <a href="?c=dcx_client">déconnexion</a></div>';}
			?>
			</div>
	
    <div id="navigation">
      <ul>
									<li><a href="?c" class="a">Accueil</a></li>
									<li><a href="?c=pro" class="a">Produits</a></li>
									
									<?php
									if(!isset($_SESSION['id_client'])){
									echo '<li><a href="?c=commande" class="active a">Mon Compte</a></li>';}
									?>
									
									<?php
									if(isset($_SESSION['id_client'])){
									echo '<li><a href="#" class="a">FAQ</a></li>';}
									?>
									
									<li><a href="?c=pan" class="a">Mon Panier</a></li>
									<li><a href="?c=contact" class="a">Contact</a></li>
								 </ul>
    </div>
    <!-- End Navigation -->
  </div>
			
			
			</div><!-- Container fermé -->
<br>
<div id="contactform" class="col-md-6" style=" margin-top:100px; position:; margin-left:10px;" align="center"><!-- Connexion -->
      <!-- <h2>Why Not Contact Us Today !</h2> -->
	  
      <form action="" method="post">
        
		  <h1><b>Welcome back! Sign in to your account</b></h1><br><br><br>
		  
		  <table style="">
		  <tr>
		  <td align="rigth">
         <label for="Nom" class="margin" style="font-size:18px;">Nom:</label></td>
		 <td >
            <input id="Nom" name="nom_client" type="text" value="" style="/*margin-left:45px;*/ font-size:16px; height:20px; width:275px;" placeholder="votre nom"/>*</td></tr>
          
		  
		  <tr><td align="rigth"><br>
		  <label for="Prénom" class="margin" style="font-size:18px;">Prénom:</label></td>
            <td ><br><input id="Prénom" name="prenom_client" type="text" value="" style="/*margin-left:21px;*/ font-size:16px; height:20px; width:275px" placeholder="votre prénom"/>*
          </td></tr>

          <tr><td align="rigth"><br>
          	<label for="sexe_client" style="font-size:18px;">Sexe :</td>
		              <td ><br>

		              	<select class="field small-field" id="sexe_client" name="sexe_client" style="width:80px">

		              	<option value="" style="font-size:16px;"></option>
						<option value="masculin" style="font-size:16px;">Masculin</option>
						<option value="feminin" style="font-size:16px;">Feminin</option>
						
					  </select>
		            </label></td></tr>
		  
		  <tr><td align="rigth"><br>
		  <label for="emailaddress" class="margin" style="font-size:18px;">Email:</label></td>
            <td ><br><input id="emailaddress" name="email_client" type="text" value="" style="/*margin-left:39px;*/ font-size:16px; height:20px; width:275px" placeholder="votre email"/></td></tr>
			
		  <tr><td align="rigth"><br>
		  <label for="mp_client" class="margin" style="font-size:18px;">Mot de passe:</label></td>
            <td ><br><input id="mp_client" name="mp_client" type="password" value="" style="/*margin-left:39px;*/ font-size:16px; height:20px; width:275px" placeholder="votre mot de passe"/></td></tr>
          

          <tr><td align="rigth"><br>
          <label for="confirm_mp_client" style="font-size:18px;">Confirmez le mot de passe:</td>
		             <td ><br> <input type="password" class="form-control" id="confirm_mp_client" name="confirm_mp_client" style="/*margin-left:39px;*/ font-size:16px; height:20px; width:275px" placeholder="confirmez votre mot de passe">
		            </label></td></tr>
		  
		   <tr><td align="rigth"><br>
		  <label for="Adresse" class="margin" style="font-size:18px;">Adresse:</label></td>
            <td ><br><input id="Adresse" name="adresse_client" type="text" value="" style="/*margin-left:19px;*/ font-size:16px; height:20px; width:275px" placeholder="votre adresse"/></td></tr>
          
		  
		  <tr><td align="rigth"><br>
		  <label for="Ville" class="margin" style="font-size:18px;">Ville:</label></td>
            <td ><br><input id="Ville" name="ville_client" type="text" value="" style="/*margin-left:49px;*/ font-size:16px; height:20px; width:275px" placeholder="votre ville"/> </td></tr>
			
			<!--<label for="Pays" class="margin">Pays:
            <input id="Pays" name="Pays" type="text" value="" style="margin-left:47px; width:275px" placeholder="votre pays"/>
          </label><br>-->
		  <tr><td align="rigth"><br>
		  <label for="tel" class="margin" style="font-size:18px;">Téléphone:</label></td>
            <td ><br><input id="tel" name="tel_client" type="text" value="" style="font-size:16px; height:20px; width:275px" placeholder="votre tel"/></td></tr> 
        </table>
          <br><br>
		  
		  <?php
	  
	  /* if(isset($_POST['enregistrer']))
		{if($reponse){
					echo '<span style="color:green">enregistrement fait</span>';
				}else
					{
					echo '<span style="color:red">pas bon</span>';
					}
					} */
	  
	  
	  ?>
		  
		  <br><br>
          
		  
          <!-- <label for="subject" class="margin">Subject:
            <input id="subject" name="subject" type="text" value="" value="" style="margin-left:20px; width:275px"/>
          </label><br> -->
		  
          
		  
          <p>
            <input style="font-size:18px; width:100px; height:32px" id="submitform" name="enregistrer" type="submit" value="Enregistrer" />
            &nbsp;
            <input style="font-size:18px; width:100px; height:32px" id="resetform" name="resetform" type="reset" value="Annuler" />
          </p>
        
      </form>
	  <br><br><br><br>
	  
	  <p><a href="?c=commande">Connectez-vous !</a></p>
	  
    </div>
<div style="margin-top:250px"></div>
			
			
			<!-- Footer -->
  <?php include('footer.php'); ?>
  <!-- End Footer -->
			
			
			
			
			
			</div><!-- SHELL FIN -->
			
			
			
			
			
			
			
			
			<!-- <script src="js/jquery-3.3.1.min.js"></script> -->
			  <script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
			 <script src="js/bootstrap.min.js"></script>
  
		</body>
	</html>
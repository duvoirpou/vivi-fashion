
  <!-- Header -->
  <?php if(isset($_SESSION['nom_client'])){ echo '
  <div id="header" classe="header" style="margin-top:10px; ">';}else{echo '
  <div id="header" style="margin-top:10px; ">';}?>
    <!--<h1 id="logo" style="color:white; font-size:50px"><a href="#">shoparound</a></h1>-->
	<div class="vivi" style="position:absolute; margin-top:23px; margin-left:10px;" ><nav class="navbar navbar-light " style="background-color: #778899;">
								<span class="navbar-brand" href="#" style="color:white; font-size:29px; height:53px; font-family: Verdana; text-shadow: 2px 2px 4px black; ">
    
								<b>Vivi-Fashion</b>
								</span>
								</nav></div>
    <!-- Cart -->
	<?php
	if(!isset($_SESSION['nom_client'])){
    echo '<div id="cart" style="background-color:;position:absolute"> <a href="?c=pan" class="cart-link"><i class="fab fa-opencart" style="font-size:16px;"></i>Voir le panier</a>
      <div class="cl">&nbsp;</div>';} 
	  
	  else{echo '<div id="cart" style="background-color:;position:"> <a href="?c=pan" class="cart-link"><i class="fab fa-opencart" style="font-size:16px;"></i>Voir le panier</a>
      <div class="cl">&nbsp;</div>';}

  ?>
	  
	  <?php
	  
	  
	  //compter elements dans panier
$panier_count = 0;
if (isset($_SESSION["list"]))
{
  $panier_count = sizeof($_SESSION["list"]);
}?>
      <span><center> Articles : <strong><?php print $panier_count; ?></strong></center></span> &nbsp;&nbsp; 
	  
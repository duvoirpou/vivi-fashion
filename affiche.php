<?php
//compter elements dans panier
$panier_count = 0;
if (isset($_SESSION["list"]))
{
  $panier_count = sizeof($_SESSION["list"]);
}
?>

<strong><?php print $panier_count; ?></strong>
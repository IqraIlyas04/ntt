<!-- index.php?page_view=home
index.php?page_view=about-us
index.php?page_view=contact -->

<?php
 include_once('includes/header.php');

if(!isset($_GET['page_view']))
{
	include_once('includes/partials/home.php');	
}
else
{
	include_once('includes/partials/'.$_GET['page_view'].'.php');
}

?>

<?php include_once('includes/footer.php'); ?>
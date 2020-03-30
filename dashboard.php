<?php
include_once('inc/header.php');
if($_SESSION['user_email']==""){
	header('location:index.php');

}
include_once('inc/header.php');
 ?>
 <div class="row">
 	<div class="col-md-12">
 		<h2>Welcome,<?php echo $_SESSION['user_email']; ?></h2>
 		<p><a href="logout.php">Logout</a></p>

 	</div>
 </div>
 
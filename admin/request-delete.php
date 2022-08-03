<?php include('includes/header.php') ?>
 <?php include('includes/sidebar.php') ?>
<?php
if(isset($_GET ['id'])){
	$id=$_GET['id'];
	$con=mysqli_connect("localhost","root","","donor");
  $data=mysqli_query($con,"DELETE FROM requests WHERE id='$id'");
  if($data)
   {
	   echo"<h1> Data Deleted </h1>";
	   header('Location: index.php');
	   
	 }
	
}
?>
<?php include('includes/footer.php') ?>
<?php
if(isset($_POST['search'])){
	$check = '';
	$bloodtypes = $_POST['bloodtypes'];
	// echo $bloodtypes;
	// die;
	$con = mysqli_connect('localhost','root','','donor');
	$result = mysqli_query($con,"SELECT * FROM detail WHERE bloodtypes='$bloodtypes' AND blood_amount!=''");

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood</title>
</head>
<body>
	<table border=2px>
		<tr>
		<th>Donor Name </th>
		<th>Address </th>
		<th>Contact Details</th>
</tr>
<?php 
while($row = mysqli_fetch_row($result)){
	$check=1;
	?>
<tr>
	<td><?php echo $row[1]."&nbsp;&nbsp;".$row[2] ?> </td>
	<td><?php echo $row[6]."&nbsp;&nbsp;".$row[7]."&nbsp;&nbsp;".$row[9] ?> </td>
	<td><?php echo $row[10] ?> </td>
	</tr>
	<?php  } 
        if($check!=1){
        	echo 'not available';
        }
} ?>
</table>
</body>
</html>
<?php
if(isset($_POST)){
	// print_r($_POST);
	// die;
	$firstname = $_POST['txtf'];
	$lastname = $_POST['txtl'];
    $age = $_POST['txta'];
    $gender = $_POST['gender'];
	// $address = $_POST['txtad'];
	$state= $_POST['State'];
	$municipality = $_POST['Municipality'];
	$ward = $_POST['Ward'];
	$zone = $_POST['Zone'];
	$district = $_POST['District'];
	$phone_no= $_POST['txtp'];
	$bloodtypes = $_POST['bloodgroup'];
	$blood_amount = $_POST['txtmin'];
	$email = $_POST['txte'];
	$feedbacks = $_POST['txtfeadback'];
		
	$con = mysqli_connect('localhost','root','','donor');

	// mysqli_query();
	
  // $test = mysqli_query($con,"INSERT INTO test(first_name) VALUES('Testname')");
	// $data = "INSERT INTO detail(firstname,lastname,age,gender,state,municipality,ward,zone,district,phone_no,bloodtypes,blood_amount,email,feedbacks) VALUES('$firstname','$lastname','$age','$gender','$state','$municipality','$ward','$zone','$district','$phone_no','$bloodtypes','$blood_amount',$email','$feedbacks')";

	$result = mysqli_query($con,"INSERT INTO detail(firstname,lastname,age,gender,state,
	municipality,ward,zone,district,phone_no,bloodtypes,blood_amount,email,feedbacks)
	 VALUES('$firstname','$lastname','$age','$gender','$state','$municipality','$ward',
	 '$zone','$district','$phone_no','$bloodtypes','$blood_amount','$email','$feedbacks')");

	if($result) {
		echo '<script>alert("Data insertion successful")</script>';
		header('Location:donordetail.php');
		}
	else{
		echo "<script>alert('Invalid!!')</script>";
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="2">
		<td>SN</td>
		<td>firstname</td>
		<td>lastname</td>
		<td>age</td>
		<td>gender</td>
		<td>phone_no</td>
		<td>bloodtypes</td>
		<td>blood_amount</td>
		<td>email</td>
		<td>feedbacks</td>
	</table>

</body>
</html>
<?php
if(isset($_POST)){
     $Bloodgroup = $_POST['bgroup'];
     $Unit_required = $_POST['unit'];
     $Recipient_name = $_POST['name'];
     $Needed_blood_in = $_POST['Blood'];
     $Phone = $_POST['Phone'];
     $Message_to_donor = $_POST['Message'];

	$con = mysqli_connect('localhost','root','','donor');
	
		
$result = mysqli_query($con,"INSERT INTO requests(Bloodgroup,Unit_required,Recipient_name,Needed_blood_in,Phone,Message_to_donor) VALUES('$Bloodgroup','$Unit_required','$Recipient_name','$Needed_blood_in','$Phone','$Message_to_donor')");

	if($result) {
		echo '<script>alert("Data insertion successful")</script>';
		header('Location:request.php');

	}
	else{
		echo "<script>alert('Invalid!!')</script>";
	}

}
?>
<?php
$con = mysqli_connect('localhost','root','','donor');
$sql = "SELECT * FROM requests";
$result = mysqli_query($con,$sql);


while($row = $result->fetch_array(MYSQLI_ASSOC)){
  $data[] = $row;
}


$results = ["sEcho" => 1,
        	"iTotalRecords" => count($data),
        	"iTotalDisplayRecords" => count($data),
        	"aaData" => $data ];


echo json_encode($results);








	?>
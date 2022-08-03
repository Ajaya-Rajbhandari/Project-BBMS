<!DOCTYPE html>
<html>
<head>
	<title>Table of donor and blood available</title>
	<style type="text/css">
   * {
  font-family: sans-serif; /* Change your font family */
}

.content-table {
  justify-content: center;
  
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}
.row{
  box-sizing: border-box;
  justify-content: center;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}
body{
  font-family: montserrat;
   background-image: url('blood.jpg');
  background-size: cover;
}
nav{
  background: linear-gradient(135deg,  #e6001a, #9b59b6);
  height: 80px;
  width: 100%;
}
label.logo{
  color: white;
  font-size: 35px;
  line-height: 80px;
  padding: 0 5px;
  font-weight: bold;
}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}
 
  </style>
</head>
<body>
  <form method="POST" >
         <div class="row">
<table class="content-table" border="2">
  <thead>
    <tr>
      <th>S.N</th>
      <th>Name</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Contact</th>
      <th> Blood Type</th>
      <th>Blood Amount</th>
    </tr>
  </thead>
  
</table>
</div>
</form>
</body>
</html>


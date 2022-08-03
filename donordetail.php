
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<head>
	<title>Details of the donor </title>
	<style type="text/css">
{
	margin: 0;
	padding: 0;
}
body{
	background-image: url("5.jpg");
	background-repeat: no-repeat;
	background-size: cover;
}
h2{
	text-align: center;
	padding: 20px;
}
.container{
	background:#000000;
	width: 500px;
  font-style:inherit;
	color:white;
	font-size:22px;
	padding: 20px;
	border-radius: 10px;
	opacity: 80%


}
form .button input {
    height: 100%;
    width: 750%;
    border-radius: 5px;
    border: none;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 1px;
}
	</style>

</head>
<body>

	<nav class="menubar">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Be a Hero, Give a Blood</label>
      <ul>
        <li><a href="Homepage.php">Home</a></li>
        <li><a href="donordetail.php">Add Donor</a></li>
        <li><a href="request.php">Request</a></li>
        <li><a href="aboutus.html"> ABOUT US <i class="fas fa-caret-down"></i></a>
                 <div class="submenu">
                  <p><a href="campgain.html">Campgain</a></p>
                  <p><a href="donorclub.html">Donor Club</a></p>
                  <p><a href="event.html">DonationEvents</a></p>
                  <p><a href="contact.html">Contact_Us</a></p>
                </div>
              </li>
            
        <li>
        <input type="text" placeholder="Search">
        <button>Search</button>
  
      </li>
        </ul>
         </nav>

	<form name="myform" method="POST" action="process.php">
	<div class="top">
    <div class="container">	
	  Firstname:   <input type="text" required name="txtf" placeholder="Enter your first name"><br><br>
	  Lastname:    <input type="text" required name="txtl" placeholder="Enter your last name"> <br><br>
	  Age :   <input type="number" required name="txta" placeholder="Enter your age">  <br><br>
	  Gender:  <select required name="gender">
		  	        <option value="Gender">Gender</option>
		    	    <option value="Male">Male</option>
		    	    <option value="Female">Female</option>
		    	    </select><br><br>
       <label>Address:</label>
	  	           <input type="text" required="" name="State" placeholder="State"> <br>
	  	           <input type="text" required name="Municipality" placeholder="Municipality"><br>
	  	           <input type="text" required name="Ward" placeholder="Ward"><br>
	  	           <input type="text" required name="Zone" placeholder="Zone"> <br>
	  	           <input type="text" required name="District" placeholder="District"> 
	              <br><br>
	   Phone_no:  <input type="number" required name="txtp" placeholder="Enter your phone number"><br><br>  
	   Bloodtypes:  <select name="bloodgroup">
	 	           <option value="Bloodgroups">Bloodgroups</option>
	  	           <option value="O+ve">O+ve</option>
		    	   <option value="O-ve">O-ve</option>
		    	   <option value="A+ve">A+ve</option>
		    	   <option value="A-ve">A-ve</option>
		    	   <option value="B+ve">B+ve</option>
		    	   <option value="B-ve">B-ve</option>
		    	   <option value="AB+ve">AB+ve</option>
		    	   <option value="AB-ve">AB-ve</option>
		    	   </select><br><br>
		Blood_amount:<input type="text" required name="txtmin" placeholder="Enter minimum blood donation"><br><br>
		Email:  <input type="text" required name="txte" placeholder="Enter your email id" onblur="emailvalidation()"> <br><br>      	   
       Feedbacks:<input type="text" required="" name="txtfeadback" placeholder="Feel free to provide any feedbacks here"><br><br>
                   <input type="submit" value="submit">


</div>	
</div>	
</form>
</body>
<script>
    function emailvalidation()
    {
      var a = document.myform.txte.value;
      if(a.indexOf("@")==-1)
      {
        alert("please enter a valid email address");
        document.myform.txte.focus();
      }
      else{
      	alert ("Validation successful");
      }
    }
</html>
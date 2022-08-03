
<!DOCTYPE html>
<html>
<head>
	<title>Details of the donor </title>
	<style type="text/css">
{
	margin: 0;
	padding: 0;
}
body{
	background-image: url("bimg.jpg");
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

	color:white;
	font-size:18px;
	padding: 20px;
	border-radius: 10px;
	opacity: 80%


}
#register{
	margin-left: 50px;
}
label{
	color: white;
	font-family: sans-serif;
	font-size: 18px;
	display: block;
	
	

}
#name{
	width: 300px;
	border:none;
	border-radius: 10px;
	outline: 0;
	padding: 7px;
	margin-left: auto;
	


}
#name1{
	width: 300px;
	border:none;
	border-radius: 10px;
	outline: 0;
	padding: 7px;
	margin-left: auto;
	
	margin:5px;
  }
	
 input{
	width: 200px;
	margin-left: 80px;
}
#bg{
	width: 300px;
	border:none;
	border-radius: 10px;
	outline: 0;
	padding: 7px;
	margin-left: auto;
	
	margin:5px;
	outline: 0;
}
	#ph{
width: 300px;
	border:none;
	border-radius: 10px;
	outline: 0;
	padding: 7px;
	margin-left: auto;
	
	margin:5px;
}
	}
	</style>
</head>
<body>
	<nav class="menubar">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Give Blood Save Life</label>
      <ul>
        <li><a href="Homepage.php">Home</a></li>
        <li><a href="donordetail">Add Donor</a></li>
        <li><a href="request.php">Request</a></li>
        <li><a href="aboutus.html"> ABOUT US <i class="fas fa-caret-down"></i></a>
                 <div class="submenu">
                  <p><a href="campgain.html">Campgain</a></p>
                  <p><a href="donorclub.html">Donor Club</a></p>
                  <p><a href="event.html">DonationEvents</a></p>
                  <p><a href="contact.html">Contact Us</a></p>
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
		<h2>Give Few Drops;Gift Someone Whole Life</h2>
    <div class="container">	
	  firstname:   <input type="text" required name="txtf" placeholder="Enter your first name"><br><br>
	  lastname:    <input type="text" required name="txtl" placeholder="Enter your last name"> <br><br>
	  age :   <input type="text" required name="txta" placeholder="Enter your age">  <br><br>
	  gender:  <select required name="gender">
		  	        <option value="Gender">Gender</option>
		    	    <option value="Male">Male</option>
		    	    <option value="Female">Female</option>
		    	    </select><br><br>
       <label>address:</label>
	  	           <input type="text" required="" name="State" placeholder="State"> 
	  	           <input type="text" required name="Municipality" placeholder="Municipality">
	  	           <input type="text" required name="Ward" placeholder="Ward">
	  	           <input type="text" required name="Zone" placeholder="Zone"> 
	  	           <input type="text" required name="District" placeholder="District"> 
	              <br><br>
	   phone_no:  <input type="text" required name="txtp" placeholder="Enter your phone number"><br><br>  
	   bloodtypes:  <select name="bloodgroup">
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
		blood_amount:<input type="text" required name="txtmin" placeholder="Enter minimum blood donation"><br><br>
		email:  <input type="text" required name="txte" placeholder="Enter your email id" onblur="emailvalidation()"> <br><br>      	   
       feedbacks:<input type="text" required="" name="txtfeadback" placeholder="Feel free to provide any feedbacks here"><br><br>
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
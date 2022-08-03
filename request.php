<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Blood bank management system </title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <nav class="menubar">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Give Life Save Life</label>
      <ul>
        <li><a href="Homepage.php">Home</a></li>
        <li><a href="donordetail.php">Add Donor</a></li>
        <li><a href="request.php">Request</a></li>
        <li><a href="aboutus.html"> ABOUT US <i class="fas fa-caret-down"></i></a>
                 <div class="submenu">
                  <p><a href="campgain.html">Campaign</a></p>
                  <p><a href="donorclub.html">Donor_Club</a></p>
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

         
  <div class="img"></div>

  <div class="container">
    
    <div class="content">
      <form  name="myform" action="process1.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="datails"></span>
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
        </div>
          <div class="input-box">
            <span class="details">Unit Required(in pint)</span>
            <input type="text" placeholder="Enter the unit (in pint)" required name="unit"><br><br>
          </div>

          <div class="input-box">
            <span class="details">Recipient Name</span>
            <input type="text" placeholder="Enter your  name" required name="name"><br><br>
          </div>

          <div class="input-box">
            <span class="details">
            Needed Blood (in hrs): <input type="text" placeholder="Enter the time (in hrs)" name="Blood">
          </div>
         </span>
          
          
          <div class="input-box">
            <span class="details">Phone</span>
            <input type="number" placeholder="Enter your number" required name="Phone"><br><br>
         
          </div> 

          <div class="input-box">
            <span class="details">Message To Donor</span>
            <input type="text" placeholder="Type Message here" required name="Message" id="message"><br><br>
          </div>
          
        
        <div class="button">
          <input type="submit" value="submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
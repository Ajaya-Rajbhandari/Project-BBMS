<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta charset="utf-8">
    <!-- <title>Responsive Navbar | CodingNepal</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <style>
    .container{
      margin-left:15px;
      margin-right:15px;
    }
    .row {
      padding-left:15px;
      padding-right:15px;
    }
    .col-6{
      float:right;
      width:80%;
    }
    .imgShow{
      margin-left: 30%;
       padding:10px;
    }
  </style>

  <body>
    <nav class="menubar">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Give Blood, Save Life</label>
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
                  <p><a href="admin"> Go to Admin </a></p>
                </div>
              </li>
        <li>
       
        
        <form method="POST" action="searchProcess.php">
          <input type="text" placeholder="Search bloodtypes.." name="bloodtypes" id="txt" required>
           <button type="submit" id="ajaxSubmit" name="search"><i class="fa fa-search"></i></button>
            </div>
  </form>
  
      </li>
        </ul>
         </nav>

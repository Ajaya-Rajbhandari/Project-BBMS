<?php include('includes/header.php') ?>

 <?php include('includes/sidebar.php') ?>
<?php 
    

 if(isset($_POST['update'])){
     // create connection
    $servername = "localhost";
    $username= "root"; 
    $password = "";
    $dbname = "donor";
    $conn = new mysqli($servername,$username,$password,$dbname);
    //check conn
    if($conn->connect_error){
        die("Connect failed".$conn->connect_error);
    }
    
    $id=$_GET['id'];

 
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

   // $con = mysqli_connect('localhost','root','','donor');
    // if($_FILES['file']['name'] !=''){

    //     $source = $_FILES['file']['tmp_name'];
    //     $destination = $_SERVER['DOCUMENT_ROOT'];
    //     $filename = date('ymdhis').$_FILES['file']['name']; //2021-09-01about

    //     $path = $destination.'/admin/uploads/notices/'.$filename;
    //     $result = move_uploaded_file($source,$path);
    // }
    $sql = "update detail set Firstname='$firstname',Lastname='$lastname', Age='$age', Gender='$gender', State='$state', Municipality='$municipality', Ward='$ward', Zone='$zone', District='$district', Phone_no='$phone_no', Bloodtypes='$bloodtypes', Blood_amount='$blood_amount', Email='$email', Feedbacks='$feedbacks' where id='$id'";
    if($conn->query($sql)===true){
        $msg="Successfully Updated!!";
      echo "<script type='text/javascript'>alert('$msg');</script>";
      
     }else{
        $errormsg="Something went wrong, Try again";
      echo "<script type='text/javascript'>alert('$errormsg');</script>";
    }
 }
    
?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">

                  <?php 
                    $id=$_GET['id'];
                  $conn = mysqli_connect('localhost','root', '', 'donor');
                  $sql = "SELECT * FROM detail WHERE id='$id'";
                  $res = mysqli_query($conn,$sql);
                  
                  while($row=mysqli_fetch_assoc($res)) {

                    ?>

<form name="myform" method="POST" action="" class="forms-sample">
    <div class="form-group row"> 
        <label class="col-sm-3 col-form-label">Firstname:</label>
        <div class="col-sm-9">
      <input type="text" required name="txtf" placeholder="Enter your first name" value="<?php echo $row['firstname'] ?>" class="form-control">
    </div>
      </div> 
    <div class="form-group row"> 
        <label class="col-sm-3 col-form-label">Lastname:</label>
        <div class="col-sm-9">
      <input type="text" required name="txtl" placeholder="Enter your last name" value="<?php echo $row['lastname'] ?>" class="form-control">
    </div>
      </div> 
     <div class="form-group row"> 
        <label class="col-sm-3 col-form-label">Age:</label>
        <div class="col-sm-9">
      <input type="text" required name="txta" placeholder="Enter your age" value="<?php echo $row['age'] ?>" class="form-control">
    </div>
      </div> 
      <div class="form-group row"> 
        <label class="col-sm-3 col-form-label">Gender:</label>
       <select required name="gender" value="<?php echo $row['gender'] ?>">
                    <option value="Gender">Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select></div>
          <div class="form-group row">
             <label class="col-sm-3 col-form-label">address:</label>
                   <input type="text" required="" name="State" placeholder="State" value="<?php echo $row['state'] ?>">
                   <input type="text" required name="Municipality" placeholder="Municipality" value="<?php echo $row['municipality'] ?>">
                   <input type="text" required name="Ward" placeholder="Ward"value="<?php echo $row['ward'] ?>">
                   <input type="text" required name="Zone" placeholder="Zone" value="<?php echo $row['zone'] ?>"> 
                   <input type="text" required name="District" placeholder="District" value="<?php echo $row['district'] ?>"> 
              </div>   

       <div class="form-group row">
        <label class="col-sm-3 col-form-label">Phone_number:</label>
        <input type="text" required class="form-control" name="txtp" placeholder="Enter your phone number" value="<?php echo $row['phone_no'] ?>">
    </div>
       <div class="form-group row">
        <label class="col-sm-3 col-form-label">Bloodtypes:</label>
          <select name="bloodgroup" class="form-control" value="<?php echo $row['bloodtypes'] ?>">
                   <?php if($row['bloodtypes']=='O+ve'){
                   ?>

                   <option value="<?php echo $row['bloodtypes'] ?>" selected><?php echo $row['bloodtypes'] ?></option>
               <?php } else {?>
<option value="O+ve">O+ve</option>
    <?php }?>
                <?php if($row['bloodtypes']=='O-ve'){
                   ?>

                   <option value="<?php echo $row['bloodtypes'] ?>" selected><?php echo $row['bloodtypes'] ?></option>
               <?php } else {?>
<option value="O-ve">O-ve</option>
    <?php }?>
    <?php if($row['bloodtypes']=='A+ve'){
                   ?>

                   <option value="<?php echo $row['bloodtypes'] ?>" selected><?php echo $row['bloodtypes'] ?></option>
               <?php } else {?>
<option value="A+ve">A+ve</option>
    <?php }?>
    <?php if($row['bloodtypes']=='A-ve'){
                   ?>

                   <option value="<?php echo $row['bloodtypes'] ?>" selected><?php echo $row['bloodtypes'] ?></option>
               <?php } else {?>
<option value="A-ve">A-ve</option>
    <?php }?>
    <?php if($row['bloodtypes']=='AB+ve'){
                   ?>

                   <option value="<?php echo $row['bloodtypes'] ?>" selected><?php echo $row['bloodtypes'] ?></option>
               <?php } else {?>
<option value="AB+ve">AB+ve</option>
    <?php }?>
    <?php if($row['bloodtypes']=='AB-ve'){
            ?>

                   <option value="<?php echo $row['bloodtypes'] ?>" selected><?php echo $row['bloodtypes'] ?></option>
               <?php } else {?>
<option value="AB-ve">AB-ve</option>
    <?php }?>
    <?php if($row['bloodtypes']=='O+ve'){
                   ?>

                   <option value="<?php echo $row['bloodtypes'] ?>" selected><?php echo $row['bloodtypes'] ?></option>
               <?php } else {?>
<option value="O+ve">O+ve</option>
    <?php }?>
    <?php if($row['bloodtypes']=='B+ve'){
                   ?>

                   <option value="<?php echo $row['bloodtypes'] ?>" selected><?php echo $row['bloodtypes'] ?></option>
               <?php } else {?>
<option value="B+ve">B+ve</option>
    <?php }?>
    <?php if($row['bloodtypes']=='B-ve'){
                   ?>

                   <option value="<?php echo $row['bloodtypes'] ?>" selected><?php echo $row['bloodtypes'] ?></option>
               <?php } else {?>
<option value="B-ve">B-ve</option>
    <?php }?>
                   </select></div>
           <div class="form-group row">
        <label class="col-sm-3 col-form-label">Blood_amount:</label>        
        <input type="text" class="form-control" required name="txtmin" placeholder="Enter minimum blood donation" value="<?php echo $row['blood_amount'] ?>"></div>
        <div class="form-group row">
        <label class="col-sm-3 col-form-label">Email:</label> 
        <input type="text" class="form-control" required name="txte" placeholder="Enter your email id" value="<?php echo $row['email'] ?>"onblur="emailvalidation()"></div><
        <div class="form-group row">
        <label class="col-sm-3 col-form-label">Feedbacks:</label> 
       <input type="text" class="form-control" required name="txtfeadback" placeholder="Feel free to provide any feedbacks here" value="<?php echo $row['feedbacks'] ?>"></div>
                   <input type="submit" class="btn btn-primary mr-2" value="update" name="update">
                

 

</form>
   <?php  } ?> 

<?php include('includes/footer.php') ?>

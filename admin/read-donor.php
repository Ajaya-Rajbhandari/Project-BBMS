<?php include('includes/header.php') ?>
 <?php include('includes/sidebar.php') ?>
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Admin</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
                </div>
                      <table id='donortable' class='display dataTable' border="2">
             <thead>
    <tr>
      <th>S.N</th>
      <th>FName</th>
      <th>LName</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Contact</th>
      <th>Blood Type</th>
      <th>Blood Amount</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>

</table>
</div>

            
                  
      <?php include('includes/footer.php') ?>

      <script>
$(document).ready(function(){
   $('#donortable').DataTable({
      'processing': false,
      'serverSide': true,
      'serverMethod': 'post',
      'ajax': {
          'url':'ajaxProcess.php'
      },
      'columns': [
          { data: 'id' },
         { data: 'firstname' },
         { data: 'lastname' },
         { data: 'age' },
         { data: 'gender' },
         { data: 'phone_no' },
         { data: 'bloodtypes' },
         { data: 'blood_amount' },
         {
          data: '',
          render: (data,type,row)=>{
            return `<a href='admin-edit.php?id=${row.id}' class='btn btn-info m-1'>Edit</a> <a href='admin-delete.php?id=${row.id}' class='btn btn-info m-1' onclick="return confirm('Are you sure you want to delete?')">Delete</a>`;
          }
         }
      ]
   });
});

      </script>
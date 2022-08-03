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
                      <table id='requesttable' class='display dataTable' border="2">
             <thead>
    <tr>
      <th>S.N.</th>
      <th>Blood_Group</th>
      <th>Unit_Required</th>
      <th>Recipient_Name</th>
      <th>Needed_blood_in</th>
      <th>Phone</th>
      <th>Action</th>
    </tr>
  </thead>

</table>
</div>

            
                  
      <?php include('includes/footer.php') ?>

      <script>
$(document).ready(function(){
   $('#requesttable').DataTable({
      'processing': false,
      'serverSide': true,
      'serverMethod': 'post',
      'ajax': {
          'url':'ajax1Process.php'
      },
      'columns': [
          { data: 'id'},
         { data: 'Bloodgroup' },
         { data: 'Unit_required' },
         { data: 'Recipient_name' },
         { data: 'Needed_blood_in' },
          { data: 'Phone' },
                  {
          data: '',
          render: (data,type,row)=>{
            return `<a href='admin-delete.php?id=${row.id}' class='btn btn-info m-1' onclick="return confirm('Are you sure you want to delete?')">Delete</a>`;
          }
         }
      ]
   });
});

      </script>
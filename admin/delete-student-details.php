
<?php

   include('admintitle.php');
  include('../dbconnection.php');

  $id = $_GET['sid'];
  // $id = $_REQUEST['sid'];    
  $qry = "DELETE FROM `student` WHERE `id` = '$id'";
  $run = mysqli_query($conn,$qry);


  if($run == true){

    ?>
    <script type="text/javascript">
      alert("Data Deleted succesfully");
      window.open('deletestudent.php','_self');
    </script>
    <?php
  }


 ?>
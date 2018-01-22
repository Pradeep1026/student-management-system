<?php

session_start();
if(isset($_SESSION['uid'])){

    echo "";
}
else {
  header('location: ../login.php');
}
 ?>
 <?php

include('header.php');

?>

  <div class="adminbox">
    <h4><a href="admindashboard.php" style="float:left;margin-right:10px;color:#fff;text-decoration:none">Go to Dashboard</a></h4>
    <h4><a href="../logout.php" style="float:right;margin-right:10px;color:#fff;text-decoration:none">Logout</a></h4>
    <h1>WELCOME TO ADMIN DASHBORD</h1>
  </div>

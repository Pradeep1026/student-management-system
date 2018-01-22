
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

    <h4><a href="../logout.php" style="float:right;margin-right:10px;color:#fff;text-decoration:none">Logout</a></h4>
    <h1>WELCOME TO ADMIN DASHBORD</h1>
  </div>
  <div class="studentdash">
    <div class="studentlink">
      <ol>
        <li><a href="insertstudent.php">Insert Student Details</a></li>
        <li><a href="updatestudent.php">Update Student Details</a></li>
        <li><a href="deletestudent.php">Delete Student Details</a></li>
      </ol>
    </div>
  </div>
  </body>
</html>

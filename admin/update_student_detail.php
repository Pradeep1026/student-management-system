
 <!-- Updating students details query -->
<?php

if (isset($_POST['submit'])) {
  include('../dbconnection.php');
  $id = $_POST['sid'];
  $rollno = $_POST['rollno'];
  $city = $_POST['city'];
  $name = $_POST['name'];
  $pcontact = $_POST['pcontact'];
  $standard = $_POST['standard'];
  $image = $_FILES['image']['name'];
  $tempname = $_FILES['image']['tmp_name'];
  move_uploaded_file($tempname,"../dataimg/$image");

  $qry = "UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `pcontact` = '$pcontact', `standard` = '$standard', `image` = '$image' WHERE `student`.`id` = $id;";
  $run = mysqli_query($conn,$qry);

  if($run){

    ?>
    <script type="text/javascript">
      alert("Data Updated succesfully");
      window.open('edit-student-details.php?sid=<?php echo $id;?>','_self');
</script>
    <?php
  }



}


 ?>
<?php

  include('admintitle.php');

 ?>

<form  action="insertstudent.php" method="post" enctype="multipart/form-data" >
  <table border="1" style="width:70%;" align="center">
    <tr>
      <th>Roll no.</th>
      <td><input type="text" name="rollno" placeholder="Enter Roll number" required></input></td>
    </tr>
    <tr>
      <th>Name</th>
      <td><input type="text" name="name" placeholder="Enter Name" required></td>
    </tr>
    <tr>
      <th>City</th>
      <td><input type="text" name="city" placeholder="Enter City" required></td>
    </tr>
    <tr>
      <th>Parrent contact</th>
      <td><input type="text" name="pcontact" placeholder="Enter Parrent contact" required></td>
    </tr>
    <tr>
      <th>Standard</th>
      <td><input type="text" name="standard" placeholder="Enter Standard" required></td>
    </tr>
    <tr>
      <th>Image</th>
      <td><input type="file" name="image" required></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" value="Submit" style="width:100%;background:blue;font-size:20px"></td>
    </tr>
  </table>

</form>
</body>
</html>
<?php

if (isset($_POST['submit'])) {
  include('../dbconnection.php');

  $rollno = $_POST['rollno'];
  $city = $_POST['city'];
  $name = $_POST['name'];
  $pcontact = $_POST['pcontact'];
  $standard = $_POST['standard'];
  $image = $_FILES['image']['name'];
  $tempname = $_FILES['image']['tmp_name'];
  move_uploaded_file($tempname,"../dataimg/$image");

  $qry = "INSERT INTO `student`( `rollno`, `name`, `city`, `pcontact`, `standard`, `image`) VALUES ('$rollno','$name','$city','$pcontact','$standard','$image') ";
  $run = mysqli_query($conn,$qry);

  if($run){

    ?>
    <script type="text/javascript">
      alert("Data submited succesfully");
    </script>
    <?php
  }



}


 ?>

<?php

  include('admintitle.php');
  include('../dbconnection.php');

  $sid = $_GET['sid'];
  $qry = "SELECT* FROM student WHERE id = '$sid'";
  $run = mysqli_query($conn,$qry);
  $data = mysqli_fetch_assoc($run);
 ?>

<form  action="update_student_detail.php" method="post" enctype="multipart/form-data" >
  <table border="1" style="width:70%;" align="center">
    <tr>
      <th>Roll no.</th>
      <td><input type="text" name="rollno" value="<?php echo $data['rollno']?>" required></input></td>
    </tr>
    <tr>
      <th>Name</th>
      <td><input type="text" name="name" value="<?php echo $data['name']?>" required></td>
    </tr>
    <tr>
      <th>City</th>
      <td><input type="text" name="city" value="<?php echo $data['city']?>" required></td>
    </tr>
    <tr>
      <th>Parrent contact</th>
      <td><input type="text" name="pcontact" value="<?php echo $data['pcontact']?>" required></td>
    </tr>
    <tr>
      <th>Standard</th>
      <td><input type="text" name="standard" value="<?php echo $data['standard']?>" required></td>
    </tr>
    <tr>
      <th>Image</th>
      <td><input type="file" name="image" required></td>
    </tr>
    <tr>
      <input type="hidden" name="sid" value="<?php echo $data['id'];?>"/>
      <td colspan="2" align="center"><input type="submit" name="submit" value="UPDATE" style="width:100%;background:blue;font-size:20px"></td>
    </tr>
  </table>

</form>
</body>
</html>
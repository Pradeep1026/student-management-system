<?php

  include('admintitle.php');

 ?>

<form  action="updatestudent.php" method="post">
  <table align="center">
    <tr>
      <th>Enter Student name:</th>
      <td><input type="text" name="name"/> </input></td>
      <td><select name="standard">
        <option value="cse">CSE</option>
         <option value="civil">CIVIL</option>
          <option value="mechnical">MECHNICAL</option>
      </select></td>
      <td><input type="submit" name="submit" value="Search"/></td>
    </tr>
  </table>

</form>

<table border="1" align="center" width="80%">
  
    <tr style="background-color: #000; color:#fff">
      <th>Number of student</th>
      <th>Roll no.</th>
      <th>Name</th>
      <th>City</th>
      <th>Parent Contact</th>
      <th>Standard</th>
      <th>Image</th>
      <th>Edit</th>
    </tr>
  <?php

if (isset($_POST['submit'])) {
  include('../dbconnection.php');

  $name = $_POST['name'];
  $standard = $_POST['standard'];
  $qry = "SELECT * FROM student WHERE standard = '$standard' AND name LIKE '%$name%'";
  $run = mysqli_query($conn,$qry);
  $row = mysqli_num_rows($run);
  
  if ($row < 1 || $name==null) {

     ?>
      <script type="text/javascript">
        alert('No student exist with this details.');
      </script>
      <?php

  }
  else {
    
    $count = 0;
    while ($data = mysqli_fetch_assoc($run)) {
      
      $count++;
      ?>

      <tr align="center">
        <td > <?php echo $count; ?></td>
      <td> <?php echo $data['rollno']; ?></td>
      <td><?php echo $data['name']; ?></td>
      <td><?php echo $data['city']; ?></td>
      <td><?php echo $data['pcontact']; ?></td>
      <td><?php echo $data['standard']; ?></td>
      <td><img src="../dataimg/<?php echo $data['image']; ?>" width="110px" height="100px"></td>
      <td><a href="edit-student-details.php?sid=<?php echo $data['id'];?>"><button>Edit</button></a></td>
     </tr>

      <?php
  }
    }

}

 ?>
</table>


</body>
</html>



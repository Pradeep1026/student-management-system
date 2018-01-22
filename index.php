<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Welcome to student Management system</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
   <div class="main_header_top">
    <h5 align="right"> <a href="login.php">Login admin page</a> </h5>
    <h1 align="center"><marquee align="right">Welcome to Student Management System</marquee></h1></div>

    <form action="index.php" method="post">
        <table align="center" border="1" style="width:50%">
            <tr>
                <td colspan="2" align="center">Student Information</td>
            </tr>
            <tr>
                <td>standard</td>
                <td>
                    <select name="standard">
              <option value="cse">CSE</option>
              <option value="civil">CIVIL</option>
              <option value="mechnical">MECHNICAL</option>
            </select>
                </td>
            </tr>
            <tr>
                <td>Roll no. </td>
                <td> <input type="text" name="rollno" required> </input>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="show info"></input>
                </td>
            </tr>
        </table>

        <!-- showing student details table  -->

        <?php

if (isset($_POST['submit'])) {
  include('dbconnection.php');

  $rollno = $_POST['rollno'];
  $standard = $_POST['standard'];
  $qry = "SELECT * FROM student WHERE standard = '$standard' AND rollno = '$rollno'";
  $run = mysqli_query($conn,$qry);
  $row = mysqli_num_rows($run);
  
  if ($row < 1) {

      ?>
            <script type="text/javascript">
                alert('No student exist with this Roll number');

            </script>
            <?php

  }
  else {
    
    
    $data = mysqli_fetch_assoc($run)
    
      ?>
                <table border="1" align="center" width="80%" style="margin-top: 20px">

                    <tr>
                        <th>Roll no.</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Parent Contact</th>
                        <th>Standard</th>
                        <th>Image</th>
                    </tr>
                    <tr align="center">
                        <td>
                            <?php echo $data['rollno']; ?>
                        </td>
                        <td>
                            <?php echo $data['name']; ?>
                        </td>
                        <td>
                            <?php echo $data['city']; ?>
                        </td>
                        <td>
                            <?php echo $data['pcontact']; ?>
                        </td>
                        <td>
                            <?php echo $data['standard']; ?>
                        </td>
                        <td><img src="dataimg/<?php echo $data['image']; ?>" width="110px" height="100px"></td>
                    </tr>

                    <?php
  }
    
}

 ?>
                </table>

    </form>

</body>

</html>

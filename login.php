<?php

    session_start();
    if(isset($_SESSION['uid'])){
      header('location:admin/admindashboard.php');
    }

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to Admin login page</title>
  </head>
  <body>
    <h1 align="center">Admin Login</h1><hr/ align="center" style="width:25%">
    <form action="login.php" method="post">

      <table align="center">
        <tr>
          <td>Username</td>
          <td> <input type="text" name="username"></input> </td>

        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password"></input></td>
        </tr>
        <tr>
          <td colspan="2" align="center"> <input type="submit" name="login" value="Login"></input></td>
        </tr>
      </table>

    </form>
  </body>
</html>
<?php

  include('dbconnection.php');
  if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $run = mysqli_query($conn,$qry);
    $row = mysqli_num_rows($run);
    if($row < 1){

        ?>
      <script>
        alert("username or password not match");
        window.open('login.php','_self');
      </script>
        <?php
    }
    else {
      $data = mysqli_fetch_assoc($run);
      $id = $data['id'];

      $_SESSION['uid'] = $id;
      header('location:admin/admindashboard.php');
    }



  }


 ?>

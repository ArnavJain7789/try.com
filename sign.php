<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Amazon</title>
  <style>
    .button {
      background-color: blue;
      width: 600px;
      height: 55px;
      color: white;
      font-size: 40px;
      display: inline-block;
      text-align: center;
      border-radius: 10px;
      text-decoration: none;
    }

    .button1 {
      background-color: #bfbfbf;
      width: 600px;
      height: 55px;
      color: white;
      font-size: 40px;
      display: inline-block;
      text-align: center;
      border-radius: 10px;
      text-decoration: none;
    }

    .email {
      padding: 5px 40px;
      border-radius: 15px;
      background-color: #e6ffe6;
    }

    .pass {
      padding: 5px 40px;
      border-radius: 15px;
      background-color: #e6ffe6;
    }

    .address {
      padding: 20px 40px;
      border-radius: 15px;
      background-color: #e6ffe6;
    }

    .ph {
      padding: 5px 40px;
      border-radius: 15px;
      background-color: #e6ffe6;
    }

    .form {
      padding: 20px 30px;
      border-radius: 20px;
      background-color: white;
      width: 700px;
      height: 600px;
    }

  </style>
</head>
<body bgcolor="black">
<br><br><br><br><br><br><br><br><br>
<center>

<form class="form" action="#" method="post">

<font color="blue" size="70" face="impact" regular>Sign Up</font><br><br>
  <input type="email" id="e1" placeholder="Email" class="email" name="email" required><br><br>

  <input type="password" id="e2" placeholder="Password" maxlength="15" minlength="5" class="pass" name="password" required><br><br>

  <input type="text" id="e3" placeholder="Your Address" class="address" name="address" required><br><br>

  <input type="number" id="e4" placeholder="Phone Number (optional)" class="ph" name="phonenumber"><br><br><br><br><br>
  
  <input type="submit" value="Sign Up" class="button" name="register">
  <br><br>
  <a href="amazon.php" class="button1">Cancel</a>
  
</form>

</center>

</body>
</html>

<?php
    if(isset($_POST['register']))
    {
      $email    = $_POST['email'];
      $password = $_POST['password'];
      $address  = $_POST['address'];
      $phnumber = $_POST['phonenumber'];

      $query = "INSERT INTO FORM VALUES('$email','$password','$address','$phnumber')";
      $data = mysqli_query($conn, $query);

      if($data)
      {
        //echo "Data inserted into the database";
      }
      else
      {
        echo "Failed to insert data into the database";
      }
    }
?>

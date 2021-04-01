<style>
input[type=text],input[type=password],input[type=tel],input[type=email],input[type=number],input[type=id],input[type=date],select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
form
{
    text-align: center;
}
h2 {
    text-align: center;
    }
    body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

</style>

<?php
if(isset($_POST['login']))
{

  $uid=$_POST['uid'];
  //CONNECTION
  include('connect.php');
  //CHECK
  $check="SELECT * from courses WHERE uid='$uid'";
  // QUERY
  $query=mysqli_query($conn,$check);
  $row=mysqli_num_rows($query);
  if($row=='0')
  {
        echo"there is np your uid number ...please register <a href='studentregister.php'>student register</a>";
      
        
        echo"there is np your uid number ...please register <a href='teacherregister.php'>teacher register</a>";
  }
        else
        {
          while($roww=mysqli_fetch_array($query))
          {

            $u=$roww['uid'];
          }
          if($u==$uid)
         {
           SESSION_START();
           $_SESSION['data']=$u;
           header('location:read.php');
         }
         else
         {
           echo"no uid found";
         }


        }

  
    
}









?>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
input[type=text],input[type=password],input[type=tel],input[type=email],input[type=number],input[type=id],input[type=date],select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 4px;
  background-color: #f2f2f2;
  padding: 20px;
}
form
{
    text-align: center;
}
h2 {
    text-align: center;
    }
    body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

</style>
<body>


<div class="topnav">
  <a class="active" href="login.php">login</a>
  <a href="teacherregister.php">TEACHER REGISTRATION</a>
  <a href="studentregister.php">STUDENT REGISTRATION</a>
  <a href="contact.php">CONTACT</a>

</div>
<div>



<h2>LOGIN</h2>
​
<form action="" method="POST">

        <label for="id">Uid:</label><br>
        <input type="Id"  name="uid" minlength="5"><br>
        <button type="login" name="login">login</button>
</form>



</div>


</body>
</html>
​

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
SESSION_START();
$uiiid=$_SESSION['data'];
if(!isset($_SESSION['data']))
{
    header('location:login.php');
}


?>
<?php
//connection
include('connect.php');
//READ
$read="SELECT * from courses WHERE type='student' AND uid='$uiiid'";
$query=mysqli_query($conn,$read);
echo"
<table border='1'>
<tr>
<th>uid</th>
<th>type</th>
<th>name</th>
<th>mobileno</th>
<th>courselist</th>
<th>update</th>
<th>delete</th>


</tr>
";
while($row=mysqli_fetch_array($query))
{
    $sid=$row['id'];
    $uid=$row['uid'];
    $type=$row['type'];
    $name=$row['name'];
    $mobileno=$row['mobileno'];
    $courselist=$row['courselist'];


    echo"
    <tr>
    <td>".$uid."</td>
    <td>".$type."</td>
    <td>".$name."</td>
    <td>".$mobileno."</td>
    <td>".$courselist."</td>
    <td><a href='updates.php?id=".$sid."'>update</a></td>
    <td><a href='updates.php?id=".$sid."'>delete</a></td>

    <td></td>
    </tr>
    
    
    ";
   
}
echo"
</table>
";
?>



<?php
//connection
include('connect.php');
//READ
$read="SELECT * from courses WHERE type='teacher' AND uid='$uiiid'";
$query=mysqli_query($conn,$read);
echo"
<table border='1'>
<tr>
<th>uid</th>
<th>type</th>
<th>name</th>
<th>mobileno</th>
<th>courselist</th>
<th>coursefee</th>
<th>update</a></th>
<th>delete</a></th>

</tr>
";
while($row=mysqli_fetch_array($query))
{
    $tid=$row['id'];
    $uid=$row['uid'];
    $type=$row['type'];
    $name=$row['name'];
    $mobileno=$row['mobileno'];
    $courselist=$row['courselist'];
    $coursefee=$row['coursefee'];


    echo"
    <tr>
    <td>".$uid."</td>
    <td>".$type."</td>
    <td>".$name."</td>
    <td>".$mobileno."</td>
    <td>".$courselist."</td>
    <td>".$coursefee."</td>
    <td><a href='updatet.php'>update</a></td>
    <td><a href='delete.php'>delete</a></td>
 
    </tr>
    
    
    ";
   
}
echo"
</table>
";
?>
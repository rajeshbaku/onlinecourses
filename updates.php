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

while($row=mysqli_fetch_array($query))
{
    $id=$row['id'];
    $uid=$row['uid'];
    $type=$row['type'];
    $name=$row['name'];
    $mobileno=$row['mobileno'];
    $courselist=$row['courselist'];

 
   
}

?>

<h2>STUDENT REGISTERATION</h2>
<form action="" method="POST">
        <label for="fname">NAME:</label><br>
        <input type="text" id="fname" class="form-control" type="text" pattern="[a-zA-Z][a-zA-Z ]{0,}"  name="name" required="required" value="<?php echo"$name" ?>" ><br><br>
        <label for="fname">MOBILENO:</label><br>
        <input type="tel"name="mobileno"id="phone_number" pattern="^\d{10}$" required="required" value="<?php echo"$mobileno" ?>">
          <br><br>

        <label for="department">COURSE LIST:</label><br>
        <select  name="courselist" required="required">
        <option value="php">php</option>
        <option value="html">html</option>
        <option value="bootstrap">bootstrap</option>
        <option value="css">css</option>
        <option value="java">java</option>
        <option value="jquery">jquery</option>
        </select><br><br>

        <button type="submit" name="update">update</button>
       

</form>
<?php


if(isset($_POST['update']))

{
       
        $one="student";
        $name=$_POST['name'];
        $mobileno=$_POST['mobileno'];
        $courselist=$_POST['courselist'];

        //CONNECTION
        include('connect.php');
        //update
        $update="UPDATE courses SET type='$one',name='$name',mobileno='$mobileno',courselist='$courselist' WHERE uid='$uiiid'";
        $query=mysqli_query($conn,$update);
        

}


?>
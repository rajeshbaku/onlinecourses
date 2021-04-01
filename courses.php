<html>

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
  padding: 18px;
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
  padding: 12px 14px;
  text-decoration: none;
  font-size: 15px;
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
  <a href="courses.php">COURSES</a>

</div>

<form action="" method="POST">
    
        <label for="department">COURSE LIST:</label><br>
        <select  name="courlselist" required="required">
        <option value="php">php</option>
        <option value="html">html</option>
        <option value="bootstrap">bootstrap</option>
        <option value="css">css</option>
        <option value="java">java</option>
        <option value="jquery">jquery</option>
        </select><br><br>

        <button type="submit" name="submit">Submit</button>
       

</form>
</body>
</html>
​
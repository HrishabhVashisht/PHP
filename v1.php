
<!DOCTYPE HTML>  
<html>

<body>  

<?php
// define variables and set to empty values
$firstnameErr = $lastnameErr = $emailErr = "";
$firstname = $lastname = $email  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
 if (empty($_POST["firstname"])) 
{
   $firstnameErr = "Name is required";
  } 

else
{

$firstname = test_input($_POST["firstname"]);

if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) 
{
$firstnameErr = "Only letters and white space allowed";
}
}
  
if (empty($_POST["lastname"])) 
{
    $lastnameErr = "Name is required";
  } 
else
 {
    $lastname = test_input($_POST["lastname"]);
if (!preg_match("/^[a-zA-Z ]*$/",$lasttname)) 
{
$lastnameErr = "Only letters and white space allowed";
  }
}

if (empty($_POST["email"])) 
{
    $emailErr = "Email is required";
  } else
 {
    $email = test_input($_POST["email"]);
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h2>Initiating Input and Form Validation</h2>
<p><span class="error">* Required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >  
  First_Name: <input type="text" name="firstname">
  <span class="error">* <?php echo $firstnameErr;?></span>
  <br><br>
  Last_Name: <input type="text" name="lastname">
  <span class="error">* <?php echo $lastnameErr;?></span>
  <br><br>
  Email: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
 
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>My Input:</h2>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $email;
echo "<br>";
include 'insert.php';
?>

</body>
</html>


<?php
$con = mysqli_connect("localhost", "hrishabh", "password");
if(!$con)
{
echo "Not Connected to Server Database";
}
if(!mysqli_select_db($con,"people"))
{
echo "Database not selected";
}
$First_Name = $_POST["firstname"];
$Last_Name = $_POST["lastname"];
$Email = $_POST["email"];
$sqll = "INSERT INTO data(First_Name,Last_Name,Email) VALUES('$First_Name','$Last_Name','$Email')";
if(!mysqli_query($con,$sqll))
{
echo "Data Not Inserted";
}
else
{
echo "Data to be inserted and Displaying record in Descending order of First_Name";
}
header('url=v1.php');

?>

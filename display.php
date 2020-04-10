<html>
<head>
<title>Displaying record after grouping in Descending order</title>
</head>
<body>
<table border=1 cellpadding=1 cellspacing=1>
<tr>
<th>ID</th>
<th>FirstName</th>
<th>LastName</th>
<th>Email</th>
</tr>

<?php
$cone = mysqli_connect("localhost", "hrishabh", "password");
if(!$cone)
{
echo "Not Connected to Server Database";
}
if(!mysqli_select_db($cone,"people"))
{
echo "Database not selected";
}
$sqql = "SELECT * FROM data ORDER BY First_Name DESC";
$record=mysqli_query($cone,$sqql);
while($row=mysqli_fetch_array($record))
{
echo "<tr>";
echo "<td>".$row['Id']."</td>";
echo "<td>".$row['First_Name']."</td>";
echo "<td>".$row['Last_Name']."</td>";
echo "<td>".$row['Email']."</td>";
}
?>

</table>
</body>
</html>


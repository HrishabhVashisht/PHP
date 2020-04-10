<?php

$conn = mysqli_connect("localhost", "hrishabh", "password");
 
// Check connection
if($conn === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
}
 

// Print host information
echo "Connected Successfully. Host info: " . mysqli_get_host_info($conn);



$sql = "CREATE DATABASE people";

if(mysqli_query($conn, $sql))
{
    echo "Database created successfully";  
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);  
}

mysqli_close($conn);

$conn = mysqli_connect("localhost", "hrishabh", "password","people");

$tbl = "CREATE TABLE data(
    Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    First_Name VARCHAR(50) NOT NULL,
    Last_Name VARCHAR(50) NOT NULL,
    Email VARCHAR(50) NOT NULL UNIQUE
)";

if(mysqli_query($conn, $tbl))
{
    echo "Table created successfully.";  
}
 else
{
    echo "ERROR: Could not able to execute $tbl. " . mysqli_error($conn);  
}
mysqli_close($conn);

?>

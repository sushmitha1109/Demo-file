<?php
//Block 1
$user = "root"; //Enter the user name
$password = "password"; //Enter the password
$host = "127.0.0.1"; //Enter the host
$dbase = "tarunaturals1"; //Enter the database
$table = "list"; //Enter the table name

//Block 2
$firstname= $_POST['firstname_entered'];
$lastname= $_POST['lastname_entered'];
$email= $_POST['email_entered'];

//Block 3
$connection= mysql_connect ($host, $root, $password);
if (!$connection)
{
die ('Could not connect:' . mysql_error());
}
mysql_select_db($dbase, $connection);


//Block 4
$customers= mysql_query( "SELECT username FROM $table WHERE username= '$username'" ) 
or die("SELECT Error: ".mysql_error()); 


//Block 5
mysql_query("INSERT INTO $table (column1, column2, column3)
VALUES (value1, value2, value3)");

//Block 6
echo 'You have been added.';

//Block 7
mysql_close($connection);

?>

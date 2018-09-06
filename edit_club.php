<?php
 
// Code to be executed when 'Insert' is clicked. 
if ($_POST['submit'] == 'Insert'){
//validation flag to check that all validations are done 
$validationFlag = true; 
//Check all the required fields are filled 
if(!($_POST['club_name']))
{ 
echo 'All the fields marked as * are compulsary.<br>'; 
$validationFlag = false; 
} 

else{ 
$club_name = $_POST['club_name']; 
$fest_name = $_POST['fest_name']; 
 
}


//If all validations are correct, connect to MySQL and execute the query 
if($validationFlag){ 
//Connect to mysql server 
$link = @mysql_connect('localhost', 'root', '2015160'); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('FESTEVENTMANAGEMENT'); 
if(!$db){ 
die("Unable to select database"); 
} 
//Create Insert query 
$query = "INSERT INTO CLUB (CLUB_NAME,FEST_NAME) VALUES ('$club_name','$fest_name')"; 
//Execute query 
$results = mysql_query($query); 
 
//Check if query executes successfully 
if($results == FALSE) 
echo mysql_error() . '<br>'; 
else 
echo 'Data inserted successfully! '; 
} 
} 
 
// Code to be executed when 'Update' is clicked. 
if ($_POST['submit'] == 'Update'){ 
if(!$_POST['club_name']) 
echo 'Enter the loan number as it is the primary key.'; 
else{ 
$validationFlag = true;

$club_name = $_POST['club_name']; 
$fest_name = $_POST['fest_name']; 
 
 
//$update = "UPDATE customer SET customer_name = '$customer_name'"; 

if($_POST['fest_name']){ 
$update = "UPDATE CLUB SET FEST_NAME = '$fest_name' WHERE CLUB_NAME = '$club_name'"; 
} 
 

//If all validations are correct, connect to MySQL and execute the query 
if($validationFlag){ 
//Connect to mysql server 
$link = @mysql_connect('localhost', "root", "2015160"); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('FESTEVENTMANAGEMENT'); 
if(!$db){ 
die("Unable to select database"); 
} 
//Execute query 
$results = mysql_query($update); 
if($results == FALSE) 
echo mysql_error() . '<br>'; 
else 
echo mysql_info(); 
} 
} 
} 
// Code to be executed when 'Delete' is clicked. 
if ($_POST['submit'] == 'Delete'){ 
if(!$_POST['club_name']) 
echo 'Enter the name of the customer as it is the primary key.'; 
else{ 

$club_name = $_POST['club_name']; 
$fest_name = $_POST['fest_name']; 


$delete = "DELETE FROM CLUB WHERE CLUB_NAME = '$club_name'"; 
//Connect to mysql server 
$link = @mysql_connect('localhost', "root", "2015160"); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('FESTEVENTMANAGEMENT'); 
if(!$db){ 
die("Unable to select database"); 
} 
//Execute query 
$results = mysql_query($delete); 
if($results == FALSE) 
echo mysql_error() . '<br>'; 
else 
echo 'Data deleted successfully'; 
} 
} 


exit(); 

?>

<?php
 
// Code to be executed when 'Insert' is clicked. 
if ($_POST['submit'] == 'Insert'){
//validation flag to check that all validations are done 
$validationFlag = true; 
//Check all the required fields are filled 
if(!($_POST['message_no']))
{ 
echo 'All the fields marked as * are compulsary.<br>'; 
$validationFlag = false; 
} 

else{ 
$message_no = $_POST['message_no']; 
$messagetext = $_POST['messagetext']; 
$email_id = $_POST['email_id']; 
}


//If all validations are correct, connect to MySQL and execute the query 
if($validationFlag){ 
//Connect to mysql server 
$link = @mysql_connect('localhost', 'root', 'SIRI'); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('dbms'); 
if(!$db){ 
die("Unable to select database"); 
} 
//Create Insert query 
$query = "INSERT INTO MESSAGE (MESSAGE_NO,MESSAGETEXT,EMAIL_ID) VALUES ('$message_no','$messagetext','$email_id')"; 
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
if(!$_POST['message_no']) 
echo 'Enter the loan number as it is the primary key.'; 
else{ 
$validationFlag = true;

$message_no = $_POST['message_no']; 
$messagetext = $_POST['messagetext']; 
$email_id = $_POST['email_id']; 
 
//$update = "UPDATE customer SET customer_name = '$customer_name'"; 

if($_POST['messagetext']){ 
$update = "UPDATE MESSAGE SET MESSAGETEXT = '$messagetext' WHERE MESSAGE_NO = '$message_no'"; 
} 
if($_POST['email_id']){ 
$update = "UPDATE MESSAGE SET EMAIL_ID = '$email_id' WHERE MESSAGE_NO = '$message_no'"; 
} 

//If all validations are correct, connect to MySQL and execute the query 
if($validationFlag){ 
//Connect to mysql server 
$link = @mysql_connect('localhost', "root", "SIRI"); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('dbms'); 
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
if(!$_POST['message_no']) 
echo 'Enter the name of the customer as it is the primary key.'; 
else{ 

$message_no = $_POST['message_no']; 
$messagetext = $_POST['messagetext']; 
$email_id = $_POST['email_id']; 

$delete = "DELETE FROM MESSAGE WHERE MESSAGE_NO = '$message_no'"; 
//Connect to mysql server 
$link = @mysql_connect('localhost', "root", "SIRI"); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('dbms'); 
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

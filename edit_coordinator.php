<html>
<head><title></title>
<link rel="stylesheet" type="text/css" href="stylecad.css"/></head></html>
<?php
 
// Code to be executed when 'Insert' is clicked. 
if ($_POST['submit'] == 'Insert'){
//validation flag to check that all validations are done 
$validationFlag = true; 
//Check all the required fields are filled 
if(!($_POST['person_mobile_no']))
{ 
echo 'All the fields marked as * are compulsary.<br>'; 
$validationFlag = false; 
} 

else{ 
$person_name = $_POST['person_name']; 
$person_mobile_no = $_POST['person_mobile_no']; 
$email_id = $_POST['email_id']; 

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
$query = "INSERT INTO EVENT_COORDINATOR (PERSON_NAME,PERSON_MOB_NO,EMAIL_ID) VALUES ('$person_name','$person_mobile_no','$email_id')"; 
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
if(!$_POST['person_mobile_no']) 
echo 'Enter the event_name as it is the primary key.'; 
else{ 
$validationFlag = true;

$person_name = $_POST['person_name']; 
$person_mobile_no = $_POST['person_mobile_no']; 
$email_id = $_POST['email_id']; 
 
//$update = "UPDATE customer SET customer_name = '$customer_name'"; 

if($_POST['person_name']){ 
$update = "UPDATE EVENT_COORDINATOR SET PERSON_NAME = '$person_name' WHERE PERSON_MOB_NO = '$person_mobile_no'"; 
} 
if($_POST['email_id']){ 
$update = "UPDATE EVENT_COORDINATOR SET EMAIL_ID = '$email_id' WHERE PERSON_MOB_NO = '$person_mobile_no'"; 
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
if(!$_POST['person_mobile_no']) 
echo 'Enter the mobile_number  as it is the primary key.'; 
else{ 

$person_name = $_POST['person_name']; 
$person_mobile_no = $_POST['person_mobile_no']; 
$email_id = $_POST['email_id']; 

$delete = "DELETE FROM EVENT_COORDINATOR WHERE PERSON_MOB_NO = '$person_mobile_no'"; 
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
<?php
 
// Code to be executed when 'Insert' is clicked. 
if ($_POST['submit'] == 'Insert'){
//validation flag to check that all validations are done 
$validationFlag = true; 
//Check all the required fields are filled 
if(!($_POST['event_name']))
{ 
echo 'All the fields marked as * are compulsary.<br>'; 
$validationFlag = false; 
} 

else{ 
$event_name = $_POST['event_name']; 
$event_date = $_POST['event_date']; 
$event_time = $_POST['event_time']; 
$registration_fee = $_POST['registration_fee']; 
$venue = $_POST['venue']; 
$club_name = $_POST['club_name']; 

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
$query = "INSERT INTO COMPETITION (EVENT_NAME,EVENT_DATE,EVENT_TIME,REGISTRATION_FEE,VENUE,CLUB_NAME) VALUES ('$event_name','$event_date','$event_time','$registration_fee','$venue','$club_name')"; 
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
if(!$_POST['event_name']) 
echo 'Enter the event_name as it is the primary key.'; 
else{ 
$validationFlag = true;

$event_name = $_POST['event_name']; 
$event_date = $_POST['event_date']; 
$event_time = $_POST['event_time']; 
$registration_fee = $_POST['registration_fee']; 
$venue = $_POST['venue']; 
$club_name = $_POST['club_name'];  
 
//$update = "UPDATE customer SET customer_name = '$customer_name'"; 

if($_POST['event_date']){ 
$update = "UPDATE COMPETITION SET EVENT_DATE = '$event_date' WHERE EVENT_NAME = '$event_name'"; 
} 
if($_POST['event_time']){ 
$update = "UPDATE COMPETITION SET EVENT_TIME = '$event_time' WHERE EVENT_NAME = '$event_name'"; 
} 
if($_POST['registration_fee']){ 
$update = "UPDATE COMPETITION SET REGISTRATION_FEE = '$registration_fee' WHERE EVENT_NAME = '$event_name'"; 
} 
if($_POST['venue']){ 
$update = "UPDATE COMPETITION SET VENUE = '$venue' WHERE EVENT_NAME = '$event_name'"; 
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
if(!$_POST['event_name']) 
echo 'Enter the name of the event as it is the primary key.'; 
else{ 

$event_name = $_POST['event_name']; 
$event_date = $_POST['event_date']; 
$event_time = $_POST['event_time']; 
$registration_fee = $_POST['registration_fee']; 
$venue = $_POST['venue']; 
$club_name = $_POST['club_name']; 

$delete = "DELETE FROM COMPETITION WHERE EVENT_NAME = '$event_name'"; 
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

<html>

<head><title></title>

<link rel="stylesheet" type="text/css" href="styleauto.css"/></head> 
 </html>
<?php
 
// Code to be executed when 'Insert' is clicked. 
if ($_POST['submit'] == 'Insert'){
//validation flag to check that all validations are done 
$validationFlag = true; 
//Check all the required fields are filled 
if(!($_POST['mobile_no']))
{ 
echo 'All the fields marked as * are compulsary.<br>'; 
$validationFlag = false; 
} 

else{ 
$mobile_no = $_POST['mobile_no']; 
$competition_name= $_POST['competition_name']; 
$winner_position = $_POST['winner_position']; 
$winner_name= $_POST['winner_name']; 
$institute = $_POST['institute']; 

 
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
$query = "INSERT INTO WINNER (MOBILE_NO,COMPETITION_NAME,WINNER_POSITION,WINNER_NAME,INSTITUTE) VALUES ('$mobile_no','$competition_name','$winner_position','$winner_name','$institute')"; 
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
if(!$_POST['mobile_no']) 
echo 'Enter the mobile no as it is the primary key.'; 
else{ 
$validationFlag = true;

$mobile_no = $_POST['mobile_no']; 
$competition_name= $_POST['competition_name']; 
$winner_position = $_POST['winner_position']; 
$winner_name= $_POST['winner_name']; 
$institute = $_POST['institute']; 
 
 
//$update = "UPDATE customer SET customer_name = '$customer_name'"; 

if($_POST['competition_name']){ 
$update = "UPDATE WINNER SET COMPETITION_NAME = '$competition_name' WHERE MOBILE_NO = '$mobile_no'"; 
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
if(!$_POST['mobile_no']) 
echo 'Enter the name of the customer as it is the primary key.'; 
else{ 

$mobile_no = $_POST['mobile_no']; 
$competition_name= $_POST['competition_name']; 
$winner_position = $_POST['winner_position']; 
$winner_name= $_POST['winner_name']; 
$institute = $_POST['institute'];  


$delete = "DELETE FROM WINNER WHERE MOBILE_NO = '$mobile_no'"; 
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

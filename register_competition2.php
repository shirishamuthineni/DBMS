<html>
<head><title></title>
<link rel="stylesheet" type="text/css" href="stylegusto.css"/></head></html>
<?php 
//Start the session to see if the user is authencticated user. 
session_start(); 
//Check if the session variable for user authentication is set, if not redirect to login page. 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
//include the menu 
require('menu.php');
echo"<center>";
echo"</br>";echo"</br>";
echo"<font size=6 color=black>";
echo"WELCOME ADMIN";echo"</br>";echo"</br>";
echo"<a href=information.html>click here to get information</a>";echo"</center>";echo"</font>";
exit();
}
else{
header('location:login_form.php');
exit();
}
?>
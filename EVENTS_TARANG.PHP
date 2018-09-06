<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
</html>
<?php 

 
 /*Connect to mysql server*/ 
$link = @mysql_connect('localhost', 'root', '2015160');  

/*Check link to the mysql server*/ 
if(!$link)
{ 
die('Failed to connect to server: ' . mysql_error());
 } 

/*Select database*/ 
$db = mysql_select_db('FESTEVENTMANAGEMENT'); 
if(!$db)
{
 die("Unable to select database"); 
}

 /*Create query*/ 
$qry = 'SELECT CLUB_NAME 
        FROM CLUB
		WHERE FEST_NAME="TARANG"'; 

/*Execute query*/ 
$result = mysql_query($qry);
ECHO"<CENTER>";
echo '<h1>CLUBS PARTICIPATING IN TARANG ARE - </h1>';
ECHO"</CENTER>";

 /*Draw the table for Players*/ 

  

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
ECHO "<CENTER>";
$c=$row['CLUB_NAME'];
if($c=="LITERARY")
{ echo $c; ECHO " >>>>>>>>>> ";ECHO "<a href='literary.php'>explore literary</a>";}
ECHO  "<BR></BR>";
if($c=="JAZBAAT")
{ echo $c;ECHO " >>>>>>>>>>>       ";ECHO"<a href='jazbaat.php'>explore jazbaat</a>";}
if($c=="AVARTHAN")
{ echo $c;ECHO "  >>>>>>>>>>      ";ECHO" <a href='avarthan.php'>explore aavarthan</a>";}
if($c=="SAAZ")
{ echo $c;ECHO " >>>>>>>>>>>>       ";ECHO"<a href='saaz.php'>explore sazz</a>";}
if($c=="ABHIVYAKTI")
{ echo $c;ECHO " >>>>>>>>>>>       ";ECHO "<a href='abhivyakti.php'>explore abhivyakti</a>";}
ECHO "</CENTER>";
}



exit(); 

?>

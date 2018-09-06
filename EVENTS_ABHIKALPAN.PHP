<html>
<head><title></title><link rel="stylesheet" type="text/css" href="styleabhikalpan.css"/>
</head></html>
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
		WHERE FEST_NAME="ABHIKALPAN"'; 

/*Execute query*/ 
$result = mysql_query($qry);
ECHO"<CENTER>";
echo '<h1>CLUBS PARTICIPATING IN ABHIKALPAN ARE - </h1>';
ECHO"</CENTER>";

 /*Draw the table for Players*/ 

  

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
ECHO "<CENTER>";
$c=$row['CLUB_NAME'];
if($c=="ROBOTICS")
{ echo $c; ECHO " >>>>>>>>>> ";ECHO "<a href='robotics.php'>explore robotics</a>";}
ECHO  "<BR></BR>";
if($c=="AUTOMOTIVE")
{ echo $c;ECHO " >>>>>>>>>>>       ";ECHO"<a href='automotive.php'>explore automotive</a>";}
if($c=="ELECTRONICS")
{ echo $c;ECHO "  >>>>>>>>>>      ";ECHO" <a href='electronics.php'>explore electronics</a>";}
if($c=="PROGRAMMING")
{ echo $c;ECHO " >>>>>>>>>>>>       ";ECHO"<a href='programming.php'>explore programming</a>";}
if($c=="ASTRONOMY")
{ echo $c;ECHO " >>>>>>>>>>>       ";ECHO "<a href='astronomy.php'>explore astronomy</a>";}
if($c=="FILM_MAKING")
{ echo $c; ECHO " >>>>>>>>>> ";ECHO "<a href='film_making.php'>explore film making</a>";}
if($c=="BUSINESS_AND_MANAGEM")
{ echo $c; ECHO " >>>>>>>>>> ";ECHO "<a href='business_and_management.php'>explore business and management</a>";}
if($c=="PHOTROGRAPHY")
{ echo $c; ECHO " >>>>>>>>>> ";ECHO "<a href='photography.php'>explore photography</a>";}
if($c=="CAD")
{ echo $c; ECHO " >>>>>>>>>>>> ";ECHO "<a href='cad.php'>explore CAD</a>";}
ECHO "</CENTER>";
}



exit(); 

?>

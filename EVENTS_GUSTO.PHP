<html>
<head><link rel="stylesheet" type="text/css" href="stylegusto.css"/>
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
		WHERE FEST_NAME="GUSTO"'; 

/*Execute query*/ 
$result = mysql_query($qry);
ECHO"<CENTER>";
echo '<h1>CLUBS PARTICIPATING IN GUSTO ARE - </h1>';
ECHO"</CENTER>";

 /*Draw the table for Players*/ 

  

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
ECHO "<CENTER>";
$c=$row['CLUB_NAME'];
if($c=="ATHLETICS")
{ echo $c; ECHO " >>>>>>>>>> ";ECHO "<a href='athletics.php'>explore athletics</a>";}
ECHO  "<BR></BR>";
if($c=="FOOTBALL")
{ echo $c;ECHO " >>>>>>>>>>>       ";ECHO"<a href='football.php'>explore football</a>";}
if($c=="VOLLEYBALL")
{ echo $c;ECHO "  >>>>>>>>>>      ";ECHO" <a href='volleyball.php'>explore volleyball</a>";}
if($c=="CRICKET")
{ echo $c;ECHO " >>>>>>>>>>>>       ";ECHO"<a href='cricket.php'>explore cricket</a>";}
if($c=="BADMINTON")
{ echo $c;ECHO " >>>>>>>>>>>       ";ECHO "<a href='badminton.php'>explore badminton</a>";}
if($c=="LAWN_TENNIS")
{ echo $c; ECHO " >>>>>>>>>> ";ECHO "<a href='lawn_tennis.php'>explore lawn_tennis</a>";}
if($c=="TABLE_TENNIS")
{ echo $c; ECHO " >>>>>>>>>> ";ECHO "<a href='table_tennis.php'>explore table_tennis</a>";}
if($c=="BASKETBALL")
{ echo $c; ECHO " >>>>>>>>>> ";ECHO "<a href='basketball.php'>explore basketball</a>";}
if($c=="CHESS")
{ echo $c; ECHO " >>>>>>>>>>>> ";ECHO "<a href='chess.php'>explore Chess</a>";}
if($c=="CARROMS")
{ echo $c; ECHO " >>>>>>>>>>>> ";ECHO "<a href='carroms.php'>explore carroms</a>";}
ECHO "</CENTER>";
}



exit(); 

?>

<html>
<head><title></title>

<link rel="stylesheet" type="text/css" href="stylepro.css"/></head></html>
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
$qry = 'SELECT COMPETITION_NAME,WINNER_POSITION,MONEY  
        FROM PRIZE_MONEY,COMPETITION
         WHERE  EVENT_NAME=COMPETITION_NAME
		 AND CLUB_NAME="PROGRAMMING"'; 

/*Execute query*/ 
$result = mysql_query($qry);
ECHO"<CENTER>";
echo "<h1>PRIZE_MONEY FOR_THE EVENTS CONDUCTED BY PROGRAMMING CLUB ARE </h1>";

 /*Draw the table for Players*/ 
echo '<table border="1"> 

<th> COMPETITION_NAME </th> 
<th> WINNER_POSITION </th>
<th>MONEY</th>  ';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['COMPETITION_NAME'].'</td>
<td>'.$row['WINNER_POSITION'].'</td>
<td>'.$row['MONEY'].'</td>
</tr>'; 
}
ECHO"</CENTER>";

echo '</table>';

exit(); 

?>

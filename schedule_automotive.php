<html>
<head><title></title>

<link rel="stylesheet" type="text/css" href="styleauto.css"/></head></html>
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
$qry = 'SELECT * FROM COMPETITION
         WHERE CLUB_NAME="AUTOMOTIVE"'; 

/*Execute query*/ 
$result = mysql_query($qry);
ECHO"<CENTER>";
echo '<h1>SCHEDULE OF EVENTS CONDUCTED BY AUTOMOTIVE CLUB ARE </h1>';

 /*Draw the table for Players*/ 
echo '<table border="1"> 

<th> EVENT_NAME </th> 
<th> EVENT_DATE </th> 
<th> EVENT_TIME </th>
<th> REGISTRATION_FEE </th>
<th> VENUE </th>';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['EVENT_NAME'].'</td>
<td>'.$row['EVENT_DATE'].'</td>
<td>'.$row['EVENT_TIME'].'</td>
<td>'.$row['REGISTRATION_FEE'].'</td>
<td>'.$row['VENUE'].'</td>
</tr>'; 
}
ECHO"</CENTER>";

echo '</table>';

exit(); 

?>

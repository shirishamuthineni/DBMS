<html>
<head><title></title>
<link rel="stylesheet" type="text/css" href="stylecad.css"/></head></html>

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
$qry = 'SELECT MOBILE_NO,COMPETITION_NAME,WINNER_POSITION,WINNER_NAME,INSTITUTE FROM WINNER'; 

/*Execute query*/ 
$result = mysql_query($qry);
ECHO"<CENTER>";
echo '<h1>WINNERS OF THE EVENTS ARE ARE </h1>';
 /*Draw the table for Players*/ 
echo '<table border="1"> 

<th> MOBILE_NO </th> 
<th> COMPETITION_NAME</th>
<TH>WINNER_POSITION</TH>
<TH>WINNER_NAME</TH>
<TH>INSTITUTE</TH> ';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['MOBILE_NO'].'</td>
<td>'.$row['COMPETITION_NAME'].'</td>
<td>'.$row['WINNER_POSITION'].'</td>
<td>'.$row['WINNER_NAME'].'</td>
<td>'.$row['INSTITUTE'].'</td>
</tr>'; 
}
ECHO"</CENTER>";

echo '</table>';

exit(); 

?>

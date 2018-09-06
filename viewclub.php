<html>
<head><title></title>
<link rel="stylesheet" type="text/css" href="stylegusto.css"/></head></html>

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
$qry = 'SELECT CLUB_NAME,FEST_NAME FROM CLUB'; 

/*Execute query*/ 
$result = mysql_query($qry);
ECHO"<CENTER>";
echo '<h1>CLUBS IN THE FESTS ARE </h1>';
 /*Draw the table for Players*/ 
echo '<table border="1"> 

<th> CLUB_NAME </th> 
<th> FEST_NAME </th> ';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['CLUB_NAME'].'</td>
<td>'.$row['FEST_NAME'].'</td>
</tr>'; 
}
ECHO"</CENTER>";

echo '</table>';

exit(); 

?>

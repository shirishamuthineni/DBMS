<html>
<head><title></title>
<link rel="stylesheet" type="text/css" href="stylebadminton.css"/></head></html>

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
$qry = 'SELECT PERSON_NAME,PERSON_MOB_NO,EMAIL_ID FROM EVENT_COORDINATOR'; 

/*Execute query*/ 
$result = mysql_query($qry);
ECHO"<CENTER>";
echo '<h1>ALL COORDINATOR DETAILS ARE </h1>';
 /*Draw the table for Players*/ 
echo '<table border="1"> 

<th> COORDINATOR NAME</th> 
<th> COORDINATOR MOBILE NO </th> 
<th> EMAIL ID</th> ';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['PERSON_NAME'].'</td>
<td>'.$row['PERSON_MOB_NO'].'</td>
<td>'.$row['EMAIL_ID'].'</td>
</tr>'; 
}
ECHO"</CENTER>";

echo '</table>';

exit(); 

?>

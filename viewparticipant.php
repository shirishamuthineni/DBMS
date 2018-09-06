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
$qry = 'SELECT MOBILE_NO,PARTICIPANT_NAME,COLLEGE FROM PARTICIPANT'; 

/*Execute query*/ 
$result = mysql_query($qry);
ECHO"<CENTER>";
echo '<h1>PARTICIPANTS  TAKEN PART IN THE EVENTS ARE </h1>';
 /*Draw the table for Players*/ 
echo '<table border="1"> 

<th> MOBILE_NO </th> 
<th> PARTICIPANT_NAME</th>
<TH>COLLEGE</TH> ';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['MOBILE_NO'].'</td>
<td>'.$row['PARTICIPANT_NAME'].'</td>
<td>'.$row['COLLEGE'].'</td>
</tr>'; 
}
ECHO"</CENTER>";

echo '</table>';

exit(); 

?>

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
$qry = 'SELECT * FROM PARTICIPANT'; 

/*Execute query*/ 
$result = mysql_query($qry);
echo '<h1>PARTICIPANT DETAILS ARE - </h1>';

 /*Draw the table for Players*/ 
echo '<table border="1"> 

<th> MOBILE_NUMBER </th> 
<th> PARTICIPANT_NAME </th>
 <th> INSTITUTE </th> ';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['MOBILE_NO'].'</td>
<td>'.$row['PARTICIPANT_NAME'].'</td>
<td>'.$row['COLLEGE'].'</td> 
</tr>'; 
}

echo '</table>';

exit(); 

?>

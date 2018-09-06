<html>
<head><title></title>

<link rel="stylesheet" type="text/css" href="stylefmc.css"/></head></html>
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
$qry = 'SELECT PERSON_NAME,EVENT_COORDINATOR.PERSON_MOB_NO AS MOBILE_NO,EMAIL_ID,COMPETITION_NAME  
        FROM EVENT_COORDINATOR,ORGANISE,COMPETITION
         WHERE EVENT_COORDINATOR.PERSON_MOB_NO=ORGANISE.PERSON_MOB_NO
		 AND EVENT_NAME=COMPETITION_NAME
		 AND CLUB_NAME="FILM_MAKING"'; 

/*Execute query*/ 
$result = mysql_query($qry);
ECHO"<CENTER>";
echo "<h1>COORDINATOR DETAILS FOR_THE EVENTS </BR>CONDUCTED BY FILM_MAKING CLUB ARE </h1>";

 /*Draw the table for Players*/ 
echo '<table border="1"> 

<th> PERSON_NAME </th> 
<th> PERSON_MOBILE_NO </th>
<th>EMAIL_ID</th>
<th>COMPETITION_NAME</th>  ';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['PERSON_NAME'].'</td>
<td>'.$row['MOBILE_NO'].'</td>
<td>'.$row['EMAIL_ID'].'</td>
<td>'.$row['COMPETITION_NAME'].'</td>
</tr>'; 
}
ECHO"</CENTER>";

echo '</table>';

exit(); 

?>

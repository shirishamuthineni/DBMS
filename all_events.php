<?php  

 /*Connect to mysql server*/ 
$link = @mysql_connect('localhost', 'root', '2015160');  

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
$qry = 'SELECT * FROM COMPETITION,CLUB
		WHERE FEST_NAME="TARANG"
		AND COMPETITION.CLUB_NAME=CLUB.CLUB_NAME'; 

/*Execute query*/ 
$result = mysql_query($qry);
echo '<h1>ALL EVENTS  are - </h1>';

 /*Draw the table for Players*/ 
echo '<table border="1"> 

<th> EVENT_NAME </th> 
<th> EVENT_DATE </th>
 <th> EVENT_TIME </th> 
 <th> REGISTRATION_FEE</TH>
 <TH>VENUE</TH>
 <TH> CLUB_NAME</TH>';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['EVENT_NAME'].'</td>
<td>'.$row['EVENT_DATE'].'</td>
<td>'.$row['EVENT_TIME'].'</td> 
<td>'.$row['REGISTRATION_FEE'].'</td>
<td>'.$row['VENUE'].'</td>
<td>'.$row['CLUB_NAME'].'</td>
</tr>'; 
}

echo '</table>';
 
exit(); 
 
?>
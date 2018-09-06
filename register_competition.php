
<html>

<head><title></title>

<link rel="stylesheet" type="text/css" href="styleauto.css"/></head> 
<body> 
<center> 
<h1>EVENT REGISTRATION/UPDATION FORM</h1> 
<form action="edit_competition.php" method="post"> 
<table cellpadding = "10"> 
<tr> 
<td>event_name*</td> 
<td><input type="text" name="event_name" maxlength="15"></td> 
</tr> 
<tr>  
<td>event_date</td> 
<td><input type="text" name="event_date" maxlength="50"></td> 
</tr>
<tr>  
<td>event_time</td> 
<td><input type="text" name="event_time" maxlength="50"></td> 
</tr>
<td>registration_fee</td> 
<td><input type="text" name="registration_fee" maxlength="50"></td> 
</tr>
<td>venue</td> 
<td><input type="text" name="venue" maxlength="50"></td> 
</tr>
<td>club_name</td> 
<td><input type="text" name="club_name" maxlength="50"></td> 
</tr>

<td><input type="submit" name="submit" value="Insert"></td> 
<td><input type="submit" name="submit" value="Update"></td> 
<td><input type="submit" name="submit" value="Delete"></td> 
</tr> 
</table> 
</form> 
</center> 
</body> 
</html>

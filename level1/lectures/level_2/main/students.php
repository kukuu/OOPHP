<!-- Program Name:  mysqlphp.php
     Description: PHP program that sends an SQL query to the
                  MySQL server and displays the results.
-->
<html>
<head>
<title>Members Only</title>

</head>
<body>
<form action=<?=$_SERVER['PHP_SELF']?> method="get">
 	<table  align="center" width="100%">
		<tr>
			<td colspan="2">
 				<span class="gold">
						<strong>Hello! Welcome to PHP Level 2 Course</strong>
				</span>
			</td>
		</tr>
  		<tr>
			<td align="right" valign="top">
				<div class="torquoise" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type in SQL query</div>
			</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="query" cols="60" rows="10" value=''><?php echo $query ?></textarea></td></tr>
  		<tr>
			<td colspan="2" align="center"><input type="submit" value="Submit Query"></td>
		</tr>
 	</table>
</form>
<?php
echo "<p></p>";

 $user="root";
 $host="localhost";
 $password="";
 /* $password="c00k1e1";*/
 $database = 'mysqlphp';
 $query = $_GET['query'];
 $query = stripSlashes($query) ;
 $query = strip_tags($query) ;
 
 
 
echo "<h4 align=center>$query</h4>";
echo "<table  width=100% border=2 noshade bgcolor=#ffcc33>";
		echo "<tr><th bgcolor=#cccccc>ID</th>
				<th bgcolor=#808080>Name</th>
				<th bgcolor=#cccccc>Surname</th>
				<th bgcolor=#cccccc>Gender</th>
				<th bgcolor=#808080>Email</th><th bgcolor=#cccccc>Phone</th>
				<th bgcolor=#808080>Mobile</th><th bgcolor=#cccccc>Pet</th></tr>";
		echo "</table>";
  
if (!mysql_connect($host,$user,$password)) {echo "<p>Unable to connect to database</p>";}
if (!mysql_select_db($database)) {echo "<p><strong>Unable to select database</span></strong>";}
$r = mysql_query($query);
if (!$r) {echo "<p align=center><strong>Unable to query to database</strong></p>";}
else {
	
	while ($row = mysql_fetch_array($r)) {
	
	
		
		echo "<table cellspacing=2 cellpadding=2  width=100% border=2 noshade bgcolor=#ffcc33>";
			echo "<tr><td bgcolor=#cccccc width=65>".$row['ID']."</td>
				<td bgcolor=#cccccc width=145>".$row['Name']."</td>
				<td bgcolor=#cccccc width=210>".$row['Surname']."</td>
				<td bgcolor=#cccccc width=173>".$row['gender']."</td>
				<td bgcolor=#cccccc width=135>".$row['email']."</td>
				<td bgcolor=#cccccc width=148>".$row['phone']."</td>
				<td bgcolor=#cccccc width=170>".$row['mobile'];
		echo "</td><td bgcolor=#cccccc>";
		echo '<img width="80" height="100" src="/lectures/images/'.$row["pet"].'.jpg">';
		echo "</td></tr>";
echo "</table>";


	}
}
 
?>
</body>
</html>

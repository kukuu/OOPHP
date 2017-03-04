<!-- Program Name:  mysqlphp.php
     Description: PHP program that sends an SQL query to the
                  MySQL server and displays the results.
-->
<html>
<head>
<title>Members Only</title>
<style>
.red {
	color:#ff0000;
}

.gold {
	color:#ff9933;
	font-size:2em;
	
	}
.torquoise {
	color:#ff00ff;
	font-weight:bold;
}

.dg {
	color:#ffcc33;
}

th,td {width:120px;}

</style>
</head>
<body>
<form action=<?=$_SERVER['PHP_SELF']?> method="get">
 	<table  align="center" width="100%">
		<tr>
			<td colspan="2">
 				<span class="gold">
						<strong>MySQL/PHP Query Search</strong>
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
 $database = 'cities_data';
 $query = $_GET['query'];
 $query = stripSlashes($query) ;
 $query = strip_tags($query) ;
 
 
 

  
if (!mysql_connect($host,$user,$password)) {echo "<p>Unable to connect to database</p>";}
if (!mysql_select_db($database)) {echo "<p><strong>Unable to select database</span></strong>";}
$r = mysql_query($query);
if (!$r) {echo "<p align=center><strong>Unable to query to database</strong></p>";}
else {

//Use nested if conditions to attach functions and call on radio buttons and check boxes. have IDs in the form ements

//for example if name or id="querry" output table
//if name or id  is that of checbox or radio show a  different table form a database
	
	echo "<h4 align=center>$query</h4>";
	echo "<table  width=100% border=2 noshade bgcolor=#ffcc33>";
		echo "<tr><th bgcolor=#cccccc>Country Code</th>
				<th bgcolor=#808080>City Name</th>
				<th bgcolor=#cccccc>Population</th>
				<th bgcolor=#cccccc>Latitute</th>
				<th bgcolor=#808080>Longitute</th>
				<th bgcolor=#808080>Landmark</th>";
		echo "</table>";
	while ($row = mysql_fetch_array($r)) {
	
	
		
		echo "<table cellspacing=2 cellpadding=2  width=100% border=2 noshade bgcolor=#ffcc33>";
			echo "<tr>
				<td bgcolor=#cccccc width=65>".$row['Country Code']."</td>
				<td bgcolor=#cccccc width=145>".$row['City Name']."</td>
				<td bgcolor=#cccccc width=210>".$row['Population']."</td>
				<td bgcolor=#cccccc width=173>".$row['Latitute']."</td>
				<td bgcolor=#cccccc width=135>".$row['Longitute']."</td>";
		echo '</td><td bgcolor=#cccccc>';
		echo '<img width="200" height="150" src="/lectures/images/'.$row["Landmark"].'.jpg">';
		echo "</td></tr>";
echo "</table>";


	}
}
 
?>
</body>
</html>

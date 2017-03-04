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

</style>
</head>
<body>
<form action=()    method="get">
 	<table  align="center" width="100%">
		<tr>
			<td colspan="2">
 				<span class="gold">
						<strong>Hello! Welcome to The MySQL/PHP Course</strong>
				</span>
			</td>
		</tr>
  		<tr>
			<td align="right" valign="top">
				<div class="torquoise" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type in SQL query</div>
			</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="query" cols="60" rows="10" value=''>()</textarea></td></tr>
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
 $password="c00k1e1";
 $query = $_GET['query'];
 $query = stripSlashes($query) ;
 $query = strip_tags($query) ;
 
echo "<h4 align=center>()</h4>";
  
if (!mysql_connect($host,$user,$password)) {echo "<p>Unable to connect to database</p>";}
if (!mysql_select_db($database)) {echo "<p><strong>Unable to select database</span></strong>";}
$r = mysql_query($query);
if (!$r) {echo "<p align=center><strong>Unable to query to database</strong></p>";}
else {
	
	while ($row = mysql_fetch_array($r)) {
	
	echo "<table align=center width=650 border=2 noshade bgcolor=#ffcc33>";
		echo "<tr><th bgcolor=#cccccc>()</th>
				<th bgcolor=#808080>()</th>
				<th bgcolor=#cccccc>()</th>
				<th bgcolor=#cccccc>()</th>
				<th bgcolor=#808080>()</th><th bgcolor=#cccccc>()</th>
				<th bgcolor=#808080>()</th><th bgcolor=#cccccc>()t</th></tr>";
		echo "<tr><td bgcolor=#cccccc align=center>".$row['()']."</td>
				<td bgcolor=#cccccc align=center>".$row['()']."</td>
				<td bgcolor=#cccccc align=center>".$row['()']."</td>
				<td bgcolor=#cccccc align=center>".$row['()']."</td>
				<td bgcolor=#cccccc align=center>".$row['()']."</td>
				<td bgcolor=#cccccc align=center>".$row['()']."</td>
				<td bgcolor=#cccccc align=center>".$row['()'];
		echo "</td><td bgcolor=#cccccc align=center>";
		echo '<img width="100" height="100" src="/lectures/images/'.$row["()"].'.jpg">';
		echo "</td></tr>";
echo "</table><br />";
	}
}
 
?>
</body>
</html>

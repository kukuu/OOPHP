<!-- Program Name:  mysql_send.php
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
<form action=<?=$_SERVER['PHP_SELF']?> method="get">
 	<table  align="center" width="100%">
		<tr>
			<td colspan="2">
 				<span class="gold">
						<strong>Hello! This is the Department Table</strong>
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
  
if (!mysql_connect($host,$user,$password)) {echo "<p>Unable to connect to database</p>";}
if (!mysql_select_db($database)) {echo "<p><strong>Unable to select database</span></strong>";}
$r = mysql_query($query);
if (!$r) {echo "<p align=center><strong>Unable to query to database</strong></p>";}
else {
	
	while ($row = mysql_fetch_array($r)) {

	
		echo "<table align=center width=650 border=2 noshade bgcolor=#ffcc33>";
		echo "<tr><th bgcolor=#808080>Department Number</th><th bgcolor=#cccccc>Department Name</th><th bgcolor=#808080>Location</th><th bgcolor=#cccccc>Manager</th></tr>";
		
		echo "<tr><td bgcolor=#cccccc align=center>".$row['deptno']."</td><td bgcolor=#cccccc align=center>".$row['deptname']."</td><td bgcolor=#cccccc align=center>".$row['loc']."</td><td bgcolor=#cccccc align=center>".$row['mgr']."</td></tr>";
		echo "</table><br />";
	}
}
include_once('./xinclude.php');  

include_once('./deptlist.php'); 
?>
</body>
</html>

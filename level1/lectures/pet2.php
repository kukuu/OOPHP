<!-- Program Name:  mysql_send.php
     Description: PHP program that sends an SQL query to the
                  MySQL server and displays the results.
-->
<html>
<head>
<title>SQL Query Sender</title>
	<style>
	.red{
	color:#ff0000;
	}
	.gold{
	color:#ff9933;
	}
	.torquoise
	{
	color:#ff00ff;
	}
	</style>
</head>
<body>
<?php
echo "<p><span class=gold><div align=center><strong>Hello Pet World</strong></div></span></p>";

 $user="root";
 $host="localhost";
 $password="";
 /*$password="c00k1e1";*/
 $database = 'mysqlphp';
 $query = $_GET['query'];
  $query = stripSlashes($query) ;
 
echo "<h3>$query</h3>";
  



  
if (!mysql_connect($host,$user,$password)) {echo "<p>Unable to connect to database</p>";}
if (!mysql_select_db($database)) {echo "<p><strong>Unable to select database</span></strong>";}
$r = mysql_query($query);
if (!$r) {echo "<p align=center><strong>Unable to query to database</strong></p>";}
else {
	
	while ($row = mysql_fetch_array($r)) {
	
		echo "<p align=center>";
		echo $row['Pet_ID']." || ";
		echo $row['Description']." || ";
		echo $row['Price']." || ";
		echo '<img src="/lectures/images/'.$row["pix"].'.jpg">';
		echo "</p>";
	}
	
	
}
  
?>

<form action=<?=$_SERVER['PHP_SELF']?> method="get">
 <table  align="center">

  <tr>
   <td align="right" valign="top"><b><span class=torquoise>Type in SQL query</span></b></td>
   <td><textarea name="query" cols="60" rows="10" value=''><?php echo $query ?></textarea>
   </td>
  </tr>
  <tr>
   <td colspan="2" align="center"><input type="submit" value="Submit Query"></td>
  </tr>
 </table>
</form>

</body>
</html>
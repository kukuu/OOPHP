<!-- Program Name:  pet.php
     Description: PHP program that sends an SQL query to the
                  MySQL server and displays the results.
				  Author ; Alexander Adu-Sarkodie
-->
<html>
<head>
<title>SQL Query Sender</title>
	<style>
		.red {
			color:#ff0000;
		}
		.gold {
			color:#ff9933;
		}
		.torquoise {
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
 $database = 'mysqlsunday2';
 $query = $_GET['query'];//Notation for array of queries
 $query = stripSlashes($query) ;//filter
 
echo "<h3>$query</h3>";
  
  
if (!mysql_connect($host,$user,$password)) {echo "<p>Unable to connect to database</p>";}
if (!mysql_select_db($database)) {echo "<p><strong>Unable to select database</span></strong>";}
$r = mysql_query($query);//store query results with query as argument
if (!$r) {echo "<p align=center><strong>Unable to query to database</strong></p>";}
else {
	
	while ($row = mysql_fetch_array($r)) {
	
		echo "<p align=center>";
		echo $row['Pet_ID']." || ";
		echo $row['Description']." || "; //fetch arrray of results
		echo $row['Price']." || ";
		echo '<img src="/lectures/images/'.$row["pix"].'.jpg">';
		echo "</p>";
	}
	
	
}
  
?>
	<div align="center">
	   <form action=<?=$_SERVER['PHP_SELF']?> method="get">   <!-- Writes back into the PHP page --> 
	 			<b><span class=torquoise>Type in SQL query</span></b><br />
	   			<textarea name="query" cols="60" rows="10" value=''><?php echo $query ?></textarea><br /><br />
	   			<input type="submit" value="Submit Query" style="margin-left:40px;">
	   </form>
	</div>
</body>
</html>

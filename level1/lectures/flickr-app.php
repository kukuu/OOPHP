<!-- Program Name:  flickr.php
Author : Alexander Adu-Sarkodie. 

Notation: This work cannot be re-produced or used without the consent of the author.

Description: PHP program that sends an SQL query to the MySQL server and displays the results from the database pet table.

-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Flickr API: Author- Alexander Adu-Sarkodie</title>
	<script language="javascript" type="text/javascript">
		function dropdown(mySel){
			var myWin, myVal;
			myVal = mySel.options[mySel.selectedIndex].value;
			if(myVal){
				if (mySel.form.target)myWin = parent[mySel.form.target];
				else myWin = window;
				if (! myWin) return true;
				myWin.location = myVal;
			}
			return false;
		}
</script>
<style>
	.red {color:#ff0000;}
	.gold {color:#ff9933;}
	.torquoise {color:#ff00ff;}
	.querry-text{width:300px;}
	.main {margin:0 auto;}
</style>
</head>
<body>

<h1>Flickr API</h1>
<ul>
	<li>
		This API has been built in PHP, so images can be queried from a MySQL DB
	</li>
	<li>Built a JavaSript search mechanism (drop down menu) to load a category.</li>
	<li>Built a PHP logic to load data from DB</li>
	<li>Images are loaded from a MySQL database just as flickr does</li>
	<li>The returned category will have 2 views. A listed one and one which is a slide (Slide view has been provided)</li>
<li>Category page has been built as a slide using JQuery</li>
	<li>The listed thumbnails view page which is not provided can be just a list of thumnails enhaced with CSS3 animation to priview larger versions of the image. It can also be done using lightbox</li>
<li>I have done this bit of work in an hour and forty minutes.</li>
</ul>

<?php
echo "<h2 class=gold><div align=center><strong>Hello Pet World</strong></div></span></h2>";

 $user="root";
 $host="localhost";
 $password="";
 $database = 'mysqlphp';;
 $query = $_GET['query'];
 $query = stripSlashes($query) ;//filter
 
echo "<h3>$query</h3>";
  
  
if (!mysql_connect($host,$user,$password)) {echo "<p>Unable to connect to database</p>";}
if (!mysql_select_db($database)) {echo "<p><strong>Unable to select database</span></strong>";}
$r = mysql_query($query);
if (!$r) {echo "<p align=center><strong>Unable to query to database</strong></p>";}
else {
	
	while ($row = mysql_fetch_array($r)) {
	echo "<span style='margin;0 auto;'>";
	echo '<img src="/flickr/images/'.$row["pix"].'.jpg" width="120" height="120">' . $row['Pet_ID'].$row['Description'];;
	echo "<br />";
	echo "</span>";
	}
	
	
}
  
?>
	   <form action=<?=$_SERVER['PHP_SELF']?> method="get">
	 			<b><span class=torquoise>Type in SQL query</span> (e.g select * from pet_table;)</b><br />
	   			<input type="text" name="query"  class="querry-text" value='<?php echo $query ?>'><input type="submit" value="Submit Query" style="margin-left:40px;">   			
	   </form>
	</div>

<form  method="post" onSubmit="return dropdown(this.gourl)">
	<select name="gourl">
		<option value="">Choose a category</option>
		<option value="category1.php">Category 1 pictures</option>
		<!-- <option value="category2.php">Category 2 pictures</option>
		<option value="category2.php">Category 3 pictures</option> -->
	</select>
	<input type="submit" value="Go">
</form>

</body>
</html>

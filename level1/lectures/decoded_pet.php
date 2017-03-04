<pre>
&lt;!-- Program Name:  pet.php
     Description: PHP program that sends an SQL query to the
                  MySQL server and displays the results.
--&gt;

&lt;html&gt;
&lt;head&gt;
&lt;title&gt;SQL Query Sender&lt;/title&gt;
	&lt;style&gt;
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
	&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;?php
echo "&lt;p&gt;&lt;span class=gold&gt;&lt;div align=center&gt;&lt;strong&gt;Hello Pet World&lt;/strong&gt;&lt;/div&gt;&lt;/span&gt;&lt;/p&gt;";

 $user="root";
 $host="localhost";
 $password="";
 $database = 'mysqlphp';
 $query = $_GET['query'];
  $query = stripSlashes($query) ;
 
echo "&lt;h3&gt;$query&lt;/h3&gt;";
   
if (!mysql_connect($host,$user,$password)) {echo "&lt;p&gt;Unable to connect to database&lt;/p&gt;";}
if (!mysql_select_db($database)) {echo "&lt;p&gt;&lt;strong&gt;Unable to select database&lt;/span&gt;&lt;/strong&gt;";}
$r = mysql_query($query);
if (!$r) {echo "&lt;p align=center&gt;&lt;strong&gt;Unable to query to database&lt;/strong&gt;&lt;/p&gt;";}
else {
	
	while ($row = mysql_fetch_array($r)) {
	
		echo "&lt;p align=center&gt;";
		echo $row['Pet_ID']." || ";
		echo $row['Description']." || ";
		echo $row['Price']." || ";
		echo '&lt;img src="/lectures/images/'.$row["pix"].'.jpg"&gt;';
		echo "&lt;/p&gt;";
	}
	
	
}
  
?&gt;

&lt;form action=&lt;?=$_SERVER['PHP_SELF']?&gt; method="get"&gt;
 &lt;table  align="center"&gt;

  &lt;tr&gt;
   &lt;td align="right" valign="top"&gt;&lt;b&gt;&lt;span class=torquoise&gt;Type in SQL query&lt;/span&gt;&lt;/b&gt;&lt;/td&gt;
   &lt;td&gt;&lt;textarea name="query" cols="60" rows="10" value=''&gt;&lt;?php echo $query ?&gt;&lt;/textarea&gt;
   &lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
   &lt;td colspan="2" align="center"&gt;&lt;input type="submit" value="Submit Query"&gt;&lt;/td&gt;
  &lt;/tr&gt;
 &lt;/table&gt;
&lt;/form&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>
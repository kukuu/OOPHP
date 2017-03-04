<pre>
&lt;!-- Program Name:  department.php
     Description: PHP program that sends an SQL query to the
                  MySQL server and displays the results.
--&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Members Only&lt;/title&gt;
&lt;style&gt;
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

&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;form action=&lt;?=$_SERVER['PHP_SELF']?&gt; method="get"&gt;
 	&lt;table  align="center" width="100%"&gt;
		&lt;tr&gt;
			&lt;td colspan="2"&gt;
 				&lt;span class="gold"&gt;
						&lt;strong&gt;Hello! This is the Department Table&lt;/strong&gt;
				&lt;/span&gt;
			&lt;/td&gt;
		&lt;/tr&gt;
  		&lt;tr&gt;
			&lt;td align="right" valign="top"&gt;
				&lt;div class="torquoise" align="center"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type in SQL query&lt;/div&gt;
			&lt;/td&gt;
			&lt;td&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;textarea name="query" cols="60" rows="10" value=''&gt;&lt;?php echo $query ?&gt;&lt;/textarea&gt;&lt;/td&gt;&lt;/tr&gt;
  		&lt;tr&gt;
			&lt;td colspan="2" align="center"&gt;&lt;input type="submit" value="Submit Query"&gt;&lt;/td&gt;
		&lt;/tr&gt;
 &lt;/table&gt;
&lt;/form&gt;
&lt;?php
echo "&lt;p&gt;&lt;/p&gt;";

 $user="root";
 $host="localhost";
 $password="";

 
 
 $database = 'citylit1';
 $query = $_GET['query'];
 $query = stripSlashes($query) ;
 $query = strip_tags($query) ;
 
echo "&lt;h4 align=center&gt;$query&lt;/h4&gt;";
  
if (!mysql_connect($host,$user,$password)) {echo "&lt;p&gt;Unable to connect to database&lt;/p&gt;";}
if (!mysql_select_db($database)) {echo "&lt;p&gt;&lt;strong&gt;Unable to select database&lt;/span&gt;&lt;/strong&gt;";}
$r = mysql_query($query);
if (!$r) {echo "&lt;p align=center&gt;&lt;strong&gt;Unable to query to database&lt;/strong&gt;&lt;/p&gt;";}
else {
	
	while ($row = mysql_fetch_array($r)) {

	
		echo "&lt;table align=center width=650 border=2 noshade bgcolor=#ffcc33&gt;";
		echo "&lt;tr&gt;&lt;th bgcolor=#808080&gt;Department Number&lt;/th&gt;&lt;th bgcolor=#cccccc&gt;Department Name&lt;/th&gt;&lt;th bgcolor=#808080&gt;Location&lt;/th&gt;&lt;th bgcolor=#cccccc&gt;Manager&lt;/th&gt;&lt;/tr&gt;";
		
		echo "&lt;tr&gt;&lt;td bgcolor=#cccccc align=center&gt;".$row['deptno']."&lt;/td&gt;&lt;td bgcolor=#cccccc align=center&gt;".$row['deptname']."&lt;/td&gt;&lt;td bgcolor=#cccccc align=center&gt;".$row['loc']."&lt;/td&gt;&lt;td bgcolor=#cccccc align=center&gt;".$row['mgr']."&lt;/td&gt;&lt;/tr&gt;";
		echo "&lt;/table&gt;&lt;br /&gt;";
	}
}
include_once('./xinclude.php');  
?&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
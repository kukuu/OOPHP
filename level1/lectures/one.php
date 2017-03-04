<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>php1</title>
	<style>
	.red {
		color:#ff0000;
	}
	.gold{
		color:#ff9933;
	}
	.torquoise {
		color:#ff00ff;
	}
	a:link {
		text-decoration:underline;
	}
	a:link,a:hover{
	color:#ff00ff;
	}
	a:hover{
	text-decoration:none;
	}
	.dg {
	color:#ffcc33;
	}
	</style>
</head>
<body>



<?php
 $user="root";
 
 $host="localhost";
 
 $country="United Kingdom";
 
  $password="";
 
 
  
  
define("ADDRESS","<strong><span class=torquoise>11 Brading Terrace London, W12 8ES</span></strong>");

define("RESPONSE","\"No one knows what the future holds.\"<br />");//scalar quantity

$string1='This happens to be the dog\'s saddest moment <strong>:</strong> ';

$string2='his real moment of thruth!!';

$stringa=$string1. "" .$string2;/* output of 2 strings.A space is created between the strings with 2 double quotes*/

$price="30";

$f_price=sprintf("%01.2f",$price);//creating a php function for price format  10's and 2dp

$dog="bulldog";

$name="Terrier";

$age="";
$animals = array("parrot", "cat" ,"rabbit"); /*Compact arrays are very useful for holding and  storing data into a database repository */

$animals[0] = "parrot,";  /*Literal array - When the square brackets are empty then it loops n-1 times*/
$animals[1] = " cat";
$animals[2] = " and a rabbit";
echo "<h1 align=center><span class=gold>Hello PHP World</span></h1>";

echo "<p><strong><div align=center><!-- <a href=\"department.php\"> -->(Using PHP to write Webpages)<!-- </a> --></div></strong></p>";



include_once('./xinclude.php');//includes it only once.File in parent folder = ./


echo " <br /><strong>Chunky!!</strong><br />";

echo " <br /><strong>The statement below uses string interpolation or variable replacement</strong><br />";
echo "I have a <span class=torquoise>$dog</span> by name <span class=red><strong> $name </strong></span>. The kids like to call him <strong>\"Chunky\"</strong> because he is massive!. It cost me<span class=torquoise> £$f_price</span> at the kennel shop.<br /> You are welcome to visit <span class=red><strong> $name </strong></span>  at the address below <strong>:</strong> <br /><br />";


echo " <br /><strong>Using constants</strong><br />";
echo  ADDRESS;/*A constant has been used here */

echo " <br /><br /><strong>The statements below uses loops,conditional statements and functions (for, foreach,do,while,arrays,multi-dimensional arrays),count,heredoc</strong>";
echo "<br />The dog can bark these numbers when in anger";

//looping.Note it is staring at 1 so will ron 9 tiimes

for($i=1;$i<10;$i++) {
	echo "<span class=torquoise> $i</span>";
	}
	
	/* will display numbers which are only close..*/
	$i=4;
	do {
		echo " <br />When it's sad it barks only <span class=torquoise>$i</span> times!<br>";
//$i++;
} 
while ($i == 5);


echo  $stringa;
echo "<br />On my way back yesterday, the kids asked if I had any intentions of having in future ";
for($i=0;$i<count($animals);$i++) {
echo "<span class=torquoise>$animals[$i]</span>";
/*echo "<br />";*/ /* This break tag will put each animal on one line in the loop if uncommented*/
}
echo  " .I replied, ";
echo  RESPONSE;

$links = array("O'reilly"  =>  "www.oreilly.com", "BBC"  => "www.bbc.co.uk","The PHP scripting Language" => "www.php.net");
	echo "<strong><br />...and these are my favourite websites: Using foreach in an  array declaration<br /></strong>";
	foreach($links as $title  => $link) {
		echo "<a href=\"http://$link\"><span class=torquoise>$title</span></a><br />"; 
	}
	
	$capitals= array ("Paris","London","New York");
	echo "<strong><br />These states are sorted in alphabetical order(sort). It uses the count function for listing<br /></strong>";
	sort($capitals);
	for($i=0;$i<count($capitals);$i++) {
	echo "<span class=torquoise>$capitals[$i] </span><br />";	
}
	
	
		$capitals =  array("CA" => "Saccramento", "TX" => "Austin", "OR" => "Salem");
		echo "<strong><br />These states are sorted by keys(ksort)<br /></strong>";
		ksort($capitals); //sort by key
		foreach($capitals as $state => $city) {	
		echo "<span class=torquoise>$city ,  $state </span><br />";
}

$capitals= array ("Paris","London","New York");
	echo "<strong><br />These states are sorted by reverse order(rsort)<br /></strong>";
	rsort($capitals);
	for($i=0;$i<count($capitals);$i++) {
	echo "<span class=torquoise>$capitals[$i]</span> <br />";	
}
	
$capitals= array ("Paris","London","New York");
	echo "<strong><br />These states are sorted just in value as they appear in the data order<br /></strong>";
	foreach($capitals as $city) {
	echo "<span class=torquoise>$city </span><br />"; 

	
}

echo  "<br /><strong>The values of this data set is  from a multi-dimensional (2) array<br /></strong>";
$productPrices['clothing']['shirt'] = 20.00;
$productPrices['clothing']['pants'] = 22.50;
$productPrices['linens']['blanket'] = 25.00;
$productPrices['linens']['bedspread'] = 50.00;
$productPrices['furniture']['lamp'] = 44.00;
$productPrices['furniture']['rug'] = 75.00;
 

//Note the curly braces used to encapsulate call to the array instance.
 print "The price of a shirt is <span class=torquoise>£ {$productPrices['clothing']['shirt']}</span><br />";

  print "Below is the full data set from the multi-dimensional array<br />";
  
  //Number of for each loop statement equals the number of dimensional arrays.
  //In this case there will be 2.The second  nested in the first
 print "<table border=1>";
foreach($productPrices as $category) {
	foreach ($category as $product => $price){
		$f_price = sprintf("%01.2f",$price);
		echo  "<tr><td><span class=torquoise>$product</span> : </td> <td><span class=torquoise>£ $f_price </span></td></tr>";
	}

}
echo "</table>";


?>


<form action=<?=$_SERVER['PHP_SELF']?> method="get">
 	<table>
		
  		<tr>
			<td  valign="top">
				<br /><strong>Querying records records from MySQL<br /> students database</strong>
			</td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="query" cols="30" rows="10" value=''><?php echo $query ?></textarea></td></tr>
  		<tr>
			<td><span style="margin-left:180px;"><input type="submit" value="Submit Query"></span></td>
		</tr>
 	</table>
</form>
<?php

$database = 'mysqlphp';
 $query = $_GET['query'];
 $query = stripSlashes($query) ;
 $query = strip_tags($query) ;
 
  
  
echo "<strong>$query</strong>";
  
if (!mysql_connect($host,$user,$password)) {echo "<p>Unable to connect to database</p>";}
if (!mysql_select_db($database)) {echo "<p><strong>Unable to select database</span></strong>";}
$r = mysql_query($query);
if (!$r) {echo "<p align=center><strong><!-- Unable to query to database --></strong></p>";}
else {
	
	while ($row = mysql_fetch_array($r)) {
	
	echo "<table  width=650 border=2 noshade bgcolor=#ffcc33>";
		echo "<tr><th bgcolor=#cccccc>ID</th>
				<th bgcolor=#808080>Name</th>
				<th bgcolor=#cccccc>Surname</th>
				<th bgcolor=#cccccc>Gender</th>
				<th bgcolor=#808080>Email</th><th bgcolor=#cccccc>Phone</th>
				<th bgcolor=#808080>Mobile</th><th bgcolor=#cccccc>Pet</th></tr>";
		
		echo "<tr><td bgcolor=#cccccc align=center>".$row['ID']."</td>
				<td bgcolor=#cccccc align=center>".$row['Name']."</td>
				<td bgcolor=#cccccc align=center>".$row['Surname']."</td>
				<td bgcolor=#cccccc align=center>".$row['gender']."</td>
				<td bgcolor=#cccccc align=center>".$row['email']."</td>
				<td bgcolor=#cccccc align=center>".$row['phone']."</td>
				<td bgcolor=#cccccc align=center>".$row['mobile'];
		echo "</td><td bgcolor=#cccccc align=center>";
		echo '<img width="100" height="100" src="/lectures/images/'.$row["pet"].'.jpg">';
		echo "</td></tr>";
		echo "</table><br />";
	}
}
  



echo "<strong>The statement below uses heredoc for string interpolation.Eliminating the use of quotes where appropriate.</strong>";
	 $website = "http://www.codeunique.com";
    echo <<<EXCERPT
	<br />Oh and by the way! amongst the latest IT consultancy firms in London is  <a href=" $website "><span class=torquoise>codeunique.com</span></a>  in Hammersmith, West London.<br />
EXCERPT;

  echo "<br /><strong>Processing FORMS</strong><br /><form action=43_forms_REQUEST.php method=post><br />
	Name: <input type=text name=fname /><br /><br />
	Age: &nbsp;&nbsp;&nbsp;<input type=text name=age /><br /><br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit />
</form>";



	echo "<br /><strong>The statement below uses require_once method for interpolation</strong>";
require_once('./xrequire.php');
$today=date(M.d.yyy);/*This is UNIX format  */
?>


</body>
</html>

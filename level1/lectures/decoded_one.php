<pre>&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;php1&lt;/title&gt;
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
 $user="root";
 
 $host="localhost";
 
 $country="United Kingdom";
 
  $password="";
  
define("ADDRESS","&lt;strong&gt;&lt;span class=torquoise&gt;11 Brading Terrace London, W12 8ES&lt;/span&gt;&lt;/strong&gt;");

define("RESPONSE","\"No one knows what the future holds.\"&lt;br /&gt;");//scalar quantity

$string1='This hapens to be the dog\'s saddest moment &lt;strong&gt;:&lt;/strong&gt; ';

$string2='his real moment of thruth!!';

$stringa=$string1. "" .$string2;/* output of 2 strings.A space is created between the strings with 2 double quotes*/

$price="30";

$f_price=sprintf("%01.2f",$price);//creating a php function for price format  100 and 2dp

$dog="bulldog";

$name="Terrier";

$age="";
$animals = array("parrot", "cat" ,"rabbit"); /*Arrays are very useful in storing data into a database repository */

$animals[0] = "parrot,";  /*When the square brackets are empty then it loops n-1 times*/
$animals[1] = " cat";
$animals[2] = " and a rabbit";

echo "&lt;p&gt;&lt;strong&gt;&lt;div align=center&gt;&lt;span class=gold&gt;&lt;a href=\"pet.php\"&gt;Hello PHP World&lt;/a&gt;&lt;/span&gt;&lt;/div&gt;&lt;/strong&gt;&lt;/p&gt;";

include_once('./xinclude.php');//includes it only once


echo " &lt;br /&gt;How are you ?&lt;br /&gt;";

echo "I have a $dog by name &lt;span class=red&gt;&lt;strong&gt; $name &lt;/strong&gt;&lt;/span&gt;. The kids like to call him &lt;strong&gt;\"Chunky\"&lt;/strong&gt; because he is massive!. It cost me £$f_price at the kennel shop.&lt;br /&gt; You are welcome to visit &lt;span class=red&gt;&lt;strong&gt; $name &lt;/strong&gt;&lt;/span&gt;  at the address below &lt;strong&gt;:&lt;/strong&gt; &lt;br /&gt;&lt;br /&gt;";

echo  ADDRESS;/*A constant has been used here */
echo "&lt;br /&gt;&lt;br /&gt;The dog can bark these numbers when in anger";

for($i=1;$i&lt;10;$i++) //looping.Note it is staring at 1 so will ron 9 tiimes
	{
	echo " $i";
	}
	
	
	$i=4;/* will display numbers which are only close..*/
	do {
		echo " &lt;br /&gt;When it's sad it barks only $i times!&lt;br&gt;";
$i++;
} 
while ($i == 5);


echo  $stringa;
echo "&lt;br /&gt;On my way back yesterday, the kids asked if I had any intentions of having in future ";
for($i=0;$i&lt;count($animals);$i++) 
{
echo $animals[$i];
/*echo "&lt;br /&gt;";*/ /* This break tag will put each animal on one line in the loop if uncommented*/
}
echo  " .I replied, ";
echo  RESPONSE;
require_once('./xrequire.php');
$today=date(M.d.yyy);/*This is UNIX format  */
?&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
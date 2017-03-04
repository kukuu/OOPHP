<?php
//returning multiple values in an array from a database
	function retrieveSubjectsList() {
		$subject[]="English";
		$subject[]="Maths";
		$subject[]="History";
		$subject[]="Geography";
		$subject[]="Science";
		$subject[]="http://www.eng.com";
		$subject[]="http://www.maths.com";
		$subject[]="http://www.hist.com";
		$subject[]="http://www.geography.com";
		$subject[]="http://www.science.com";
		return $subject;
	}
	list($english,$maths,$history,$geography,$science,$englishURL,$mathsURL,$historyURL,$geographyURL,$scienceURL)=retrieveSubjectsList();
	echo "<a href=\"$englishURL\">$english </a><br /><a href=\"$mathsURL\"> $maths </a><br /> <a href=\"$historyURL\">$history</a> <br /> <a href=\"$geographyURL\">$geography</a> <br /><a href=\"$scienceURL\">$science</a>";
?>

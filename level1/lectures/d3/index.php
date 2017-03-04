<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="http://mbostock.github.com/d3/d3.js"></script>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
	<script type="text/javascript">
		d3.text("ncc.csv", function(datasetText) {//text() to load

		var parsedCSV = d3.csv.parseRows(datasetText);//call to a helper function parseRows
		
		var sampleHTML = d3.select("#result")// Now construct a table and append  to the selecto
		    .append("table")
		    .style("border-collapse", "collapse")
		    .style("border", "2px black solid")
		
		    .selectAll("tr")
		    .data(parsedCSV)
		    .enter().append("tr")
		
		    .selectAll("td")
		    .data(function(d){return d;})
		    .enter().append("td")
		    .style("border", "1px black solid")
		    .style("padding", "3px")
			//add events calllback for mouseover and mouseout
		    .on("mouseover", function(){d3.select(this).style("background-color", "aliceblue")})
		    .on("mouseout", function(){d3.select(this).style("background-color", "white")})
		    .text(function(d){return d;})//load csv
		    .style("font-size", "12px");
		});
    </script>
	
</head>
<body>
	<h1><a href="http://www.goldhawk-college.com/istudio/index.html" class="portfolio">Alexander Adu-Sarkodie</a>
	<br /><span>CSV Upload and Calculator</span><a href="ncc.csv" class="csv"><small><small>CSV</small></small></a> </h1>

	
	<p>
		
	</p>
		
    <div class="content">
		<div id="result"></div><!--This is the container for the CSV-->
	    <div id="exampleSimple"></div><!--This is the container for the graph-->
	    <div class="csv">
		    <?php
				function calculateExpectedNumber($value) {
						$magicNums = array(3, 4, 8, 7, 12);
						$magicNums[0] = 3;
						$magicNums[1] = 4;
						$magicNums[2] = 8;
						$magicNums[3] = 7;
						$magicNums[4] = 12;
						$finalValue = $value  * (($magicNums[3]+$magicNums[1])*$magicNums[1]) + $magicNums[1];

				return $finalValue;

				}
					print calculateExpectedNumber(12);
			?>
			</div>
	</div>	
	   
	
</body>
</html>

<html>
	<head>
		<title>constructors</title>
		<style>
		.label-name {
			padding:0 0 0 10px;
		}
			
		.label-other,
		label-summary {
			padding:0 0 0 90px;
		}
		
		p {margin-top:-5px;}
		
		p.fname {
			margin:-110px 0 0 80px;
		}
		
		.content {
			margin-top:10px;
			width:50%;
		}
		
		img {
			margin-bottom:10px;
		}
		
		
		</style>
	</head>
	<body>
	<?php
	
		class Customer {
			private $first_name;
			private $last_name;
			private $summary;
			private $image;
			
			
			//Once object is created it checks for the existence of the constructor function
			//the object then inherits all the properties of the constructor.
			//its method and argument
			public function __construct($first_name, $last_name, $summary,$image) {
				$this->setData($first_name, $last_name, $summary,$image);
				$this->printData();
			}
			
			//an interface (public function) provides access to the private properties
			//using method from the constructor
			
			public function setData($first_name, $last_name, $summary,$image) {
				$this->first_name = $first_name;
				$this->last_name = $last_name;
				$this->summary = $summary;
				$this->image = $image;
			}
			
			// an interface (public function) to pass data to the private properties and print.It also serves as template for reading different object data into the page.
			public function printData(){
			echo '<div class="content">';
				echo '<img width="80" height="100"src="/lectures/images/'.$this->image.'.jpg">';
				echo "<p class='label-name fname'><strong>Owner</strong> <br /> Name:  " . $this->first_name."</p>"."<p class='label-other'>Surname: " . $this->last_name . "</p>";	
				echo "<p class='label-other'><strong>Profile</strong> <br />". $this->summary. "</p><br />";
		echo '</div>';
				
			}	
		}
	
	include('data.php');
		
	?>

</body>
</html>
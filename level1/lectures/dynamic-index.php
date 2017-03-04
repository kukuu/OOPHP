<?php
	
	#dynamic web page
	$page_title = 'Welcome to alex\'s website';
	#include('includes/header.html');
?>
<title><?php echo $page_title; ?></title>
<h1>Content Header</h1>
<p>This is where page specific content goes. The content here and the corresponding header will change from page to page</p>

<?php
		include('includes/footer.html');

?>

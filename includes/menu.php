<?php
	$page = "";
	$page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);

	echo "<ul>";
	
	if(strtolower($page) == "index.php" || $page == ""){
		echo "<li><a href='index.php' class='current'>Home</a></li>";
	}
	else{
		echo "<li><a href='index.php'>Home</a></li>";
	}
	
	if(strtolower($page) == "services.php"){
		echo "<li><a href='services.php' class='current'>Services</a></li>";
	}
	else{
		echo "<li><a href='services.php'>Services</a></li>";
	}
	
	if(strtolower($page) == 'news.php'){
		echo "<li><a href='news.php' class='current'>News</a></li>";
	}
	else{
		echo "<li><a href='news.php'>News</a></li>";
	}
	
	if(strtolower($page) == 'about.php'){
		echo "<li><a href='about.php' class='current'>About</a></li>";
	}
	else{
		echo "<li><a href='about.php'>About</a></li>";
	}
	
	if(strtolower($page) == "contact.php" || strtolower($page) == "thankyou.php"){
		echo "<li><a href='contact.php' class='current'>Contact</a></li>";
	}
	else{
		echo "<li><a href='contact.php'>Contact</a></li>";
	}
    
	echo "</ul>";
?>
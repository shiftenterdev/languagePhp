<?php
	$str = addcslashes("Hello World!","W");
	echo($str);
	
	echo '<br/>';
	
	$str = addslashes('What does "yolo" mean?');
	echo($str);
	
	echo '<br/>';
	
	$str = "Hello World!";
	echo $str . "<br>";
	echo chop($str,"World!");
	
	echo '<br/>';
	
	$str = "Hello world!";
	echo chunk_split($str,2,".");
	
	echo '<br/>';
	
	$str = "Hello World!";
	echo count_chars($str,3);
	
	echo '<br/>';
	
	$str = "Hello world. It's a beautiful day.";
	print_r (explode(" ",$str));
	
	echo '<br/>';
	
	$arr = array('Hello','World!','Beautiful','Day!');
	echo implode(" ",$arr);
	
	echo '<br/>';
	
	$str = "Hello";
	echo md5($str);
	
	echo '<br/>';
	
	echo nl2br("One line.\nAnother line.");
	
	echo '<br/>';
	
	print "Hello world!";
	
	echo '<br/>';
	
	$number = 9;
	$str = "Beijing";
	printf("There are %u million bicycles in %s.",$number,$str);
	
	echo '<br/>';
	
	$str = "Hello Hi World!";
	echo $str . "<br>";
	echo trim($str,"H ld!");
	
	echo '<br/>';
	
	echo similar_text("Hello World","Hello Peter");
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
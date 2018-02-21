<?php


		echo print_r($_POST, 1);

?>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="handler.php" method="POST">
		<div> Name: <input type= "text" name="name"></div>
		<div><input type="submit" value= "Add Comment"> </div>

	</form>

	<?php 
		$comments = trim(file_get_contents("comments.dat"));
		$lines = explode("\n", $comments);
		foreach($lines as $line){
			$items = explode("|", $line)
			print "$line[0] $line[1]<br/>"
		}
		echo "string";
	 ?>
</body>
</html>
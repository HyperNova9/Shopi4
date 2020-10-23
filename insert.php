<?php					
		$connect = mysqli_connect("127.0.0.1", "root", "", "Shop");

		$text_query_insert = "INSERT INTO Items(title, info, img, price)
								VALUES ('{$_GET["title"]}', '{$_GET["info"]}','{$_GET["img"]}','{$_GET["price"]}')";

		$query_insert = mysqli_query($connect, $text_query_insert);

		header("Location: index.php");
?> 
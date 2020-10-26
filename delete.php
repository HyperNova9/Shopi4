<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "Shop");
	$text_query = "DELETE FROM items WHERE id = '9' ";
	$query = mysqli_query($connect, $text_query)

 ?>
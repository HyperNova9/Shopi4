<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<?php					
		$connect = mysqli_connect("127.0.0.1", "root", "", "Shop");

		$text_query = "SELECT * FROM items";
		
		$query=mysqli_query($connect, $text_query);

		$result = $query->fetch_assoc();
		$result2 = $query->fetch_assoc();
		$result3 = $query->fetch_assoc();
		$result4 = $query->fetch_assoc();
		$result5 = $query->fetch_assoc();
		$result6 = $query->fetch_assoc();
	?> 
<div class="" style="height:100px">
	<div class="col-10 mx-auto border-bottom border-dark shadow-lg" style="height:100px">
		<div class="row">
			<div class="col-1 mx-auto pr-0 pl-0" style="height:90px">
				<img src="img/logo.png" class="w-100">

			</div>
			<div class="col-8 mx-auto" style="height:70px">
				<div class="row">
					<div class="col-3">
						<h2 class="text-danger font-weight-normal" style="margin-top:16%">SHOPI4</h2>
					</div>
					<div class="col-9" style="margin-top:4%">
						<a href="">Бесплатная доставка</a>
						<a href="" class="ml-5">Только электроника</a>
						<a href="" class="ml-5">Самое хорошее качество</a>
					</div>
				</div>			
			</div>
			<div class="col-3 mx-auto" style="height:70px">
				<div class="row">
					<div>
						<a href="admin.php" ><img src="img/case.png" style="width:50px" class="mt-4"></a>
					</div>
					<div style="margin-top:10%">
						<p class="font-weight-bold ml-2">Добавить новый товар</p>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>
<div class="mt-5" style="height:500px; background-image:url(img/electro.jpg); background-size: 100%; background-attachment: fixed">
	<div class="col-5 mx-auto" style="height:500px; padding-top:200px">
		<h3 class="font-weight-bold text-white text-center">Добро пожаловать в мой магазин</h3>
		<h2 class="font-weight-bold text-white text-center">Электронной техники</h2>
		<h1 class="font-weight-bold text-white text-center">SHOPI4</h1>
	</div>
</div>
<h1 class="text-center mt-4 fobt-weight-bolder">Товары:</h1>
<div class="mt-5 mx-auto col-10 pb-4 border shadow pb-3">
	<div class="pb-2" style="margin-left:10%">
		<div class="row">	
			<div class="col-3">
				<h2><?php echo $result["title"]; ?></h2>
				<img <?php echo "src='".$result["img"]."'"; ?> class="w-100">
				<p><?php echo $result["info"]; ?></p>					
				<?php
					if ($result["title"] <> "") {
						echo "<p>".$result["price"]."р</p>";
						echo "<button class='btn btn-success mt-2'>Купить</button>";
					}
				?>
			</div>
			<div class="col-3 ml-5 border-dark border-left" >
				<h2><?php echo $result2["title"]; ?></h2>
				<img <?php echo "src='".$result2["img"]."'"; ?> class="w-100">
				<p><?php echo $result2["info"]; ?></p>	
				<?php
					if ($result2["title"] <> "") {
						echo "<p>".$result2["price"]."р</p>";
						echo "<button class='btn btn-success mt-2'>Купить</button>";
					}
				?>
			</div>
			<div class="col-3 ml-5 border-dark border-left">
				<h2><?php echo $result3["title"]; ?></h2>
				<img <?php echo "src='".$result3["img"]."'"; ?>  class="w-100">
				<p><?php echo $result3["info"]; ?></p>
				<?php
					if ($result3["title"] <> "") {
						echo "<p>".$result3["price"]."р</p>";
						echo "<button class='btn btn-success mt-2'>Купить</button>";
					}
				?>
			</div>
		</div>
	</div>
	<div class="mt-5 pb-2" style="margin-left:10%">
		<div class="row">	
			<div class="col-3">
				<h2><?php echo $result4["title"]; ?></h2>
				<img <?php echo "src='".$result4["img"]."'"; ?>  class="w-100">
				<p><?php echo $result4["info"]; ?></p>
				<?php
					if ($result4["title"] <> "") {
						echo "<p>".$result4["price"]."р</p>";
						echo "<button class='btn btn-success mt-2'>Купить</button>";
					}
				?>
			</div>
			<div class="col-3 ml-5 border-dark border-left">
				<h2><?php echo $result5["title"]; ?></h2>
				<img <?php echo "src='".$result5["img"]."'"; ?>  class="w-100">
				<p><?php echo $result5["info"]; ?></p>
				<?php
					if ($result5["title"] <> "") {
						echo "<p>".$result5["price"]."р</p>";
						echo "<button class='btn btn-success mt-2'>Купить</button>";
					}
				?>
			</div>
			<div class="col-3 ml-5 border-dark border-left">
				<h2><?php echo $result6["title"]; ?></h2>
				<img <?php echo "src='".$result6["img"]."'"; ?>  class="w-100">
				<p><?php echo $result6["info"]; ?></p>
				<?php
					if ($result6["title"] <> "") {
						echo "<p>".$result6["price"]."р</p>";
						echo "<button class='btn btn-success mt-2'>Купить</button>";
					}
				?>
				
			</div>
		</div>
	</div>
</div>

<div class="bg-dark col-12 mt-4" style="height:200px">
	<div class="mx-auto col-9 pt-2">
		<h1 class="text-secondary">Обратиться в техподдержку можно по номеру</h1>
		<p class="text-secondary">89XX-XXXX-XXX</p>
		<h1 class="text-secondary text-right">Или же на почту</h1>
		<p class="text-secondary text-right">artem.lyubchenko41@gmail.com</p>
	</div>
</div>
</body>
</html>
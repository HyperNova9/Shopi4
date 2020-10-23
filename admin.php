<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
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
						<a href="index.php" ><img src="img/case.png" style="width:50px" class="mt-4"></a>
					</div>
					<div style="margin-top:10%">
						<p class="font-weight-bold ml-2">Вернуться</p>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>
<div class="mt-5 ">
	<div class="col-10 mx-auto" style="height:500px">
		<div class="col-3 mx-auto border shadow pb-5 pr-4 pl-2">
		<h3 class="font-weight-bold">Заполните форму:</h3>
		<form action="insert.php" method="GET">
			<p>Название</p>
			<p><input type="" name="title" class="col-12" placeholder="Название товара" maxlength="300"></p>
			<p>О товаре</p>
			<p><textarea type="" name="info" class="col-12" placeholder="Информация о товаре" maxlength="1000"></textarea></p>
			<p>Картинка</p>
			<p><input type="" name="img" class="col-12" placeholder="Путь к картинке" maxlength="100"></p>
			<p>Цена</p>
			<p><input type="" name="price" class="col-12" placeholder="Цена в рублях" maxlength="100"></p>
			<button class="btn btn-success mt-2">Добавить товар</button>
		</form>	
		</div>
	</div>
</div>
<div class="bg-dark col-12" style="height:200px; margin-top:125px" >
	<div class="mx-auto col-9 pt-2">
		<h1 class="text-secondary">Обратиться в техподдержку можно по номеру</h1>
		<p class="text-secondary">89XX-XXXX-XXX</p>
		<h1 class="text-secondary text-right">Или же на почту</h1>
		<p class="text-secondary text-right">artem.lyubchenko41@gmail.com</p>
	</div>
</div>
</body>
</html>
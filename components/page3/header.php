<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title><?= $title ?></title>
</head>
<body class="page3">
	<header class="page1-header">
		<div style="display: flex; flex-direction: row;">
			<div style="width: 100px; height: 100px; background-image: url(img/circle_white.png); margin-left: 10px; margin-top: 10px">
				<img src="<?= $image ?>" width="90" height="90" alt="<?= $name ?>" style='margin-left: 5px; margin-top: 7px';>
			</div>
			<h1 class="page2-title" style="margin-top: 30px""><?= $title ?></h1>
		</div>
		<div style="margin-left: 10px;">
			<button onclick="location.href='index.php'" class="page1-button" type="button">Главная страница</button>
			<button onclick="location.href='index2.php'" class="page1-button" type="button">Диаграммы</button>
			<button onclick="location.href='index3.php'" class="page1-button" type="button">Табличные значения</button>
			<button onclick="location.href='index4.php'" class="page1-button" type="button">Подрядчики</button>
		</div>
	</header>
	<main class="main3">

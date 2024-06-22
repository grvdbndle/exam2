<?php
session_start();


if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $product_price = $_POST['product_price'];

    // Формируем массив данных о товаре
    $new_product = [
        'id' => $product_id,
        'name' => $product_name,
        'description' => $product_description,
        'price' => $product_price
    ];

    // Добавляем товар в массив $_SESSION['products']
    $_SESSION['products'][] = $new_product;


    $success = "Товар успешно добавлен в корзину.";
}
?>
<html>
    <head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Main-page</title>
	</head>

	<body>
		<header>
				<div class="title">
				<center>
				<h1><img src="img/product.png">Copy Star</h1>
				<h2>Девиз компании!</h2>
				</center>
			    </div>
 
            <div class="border"></div>
            <nav>
            	<a href="index.php">О нас</a>
            	<a href="catalog.php">Каталог</a>
            	<a href="cart.php">Корзина</a>
            	<a href="orders.php">Заказы</a>
            	<a href="..">Где нас найти?</a>
            	<a href="..">Выход</a>
            	<input type="button" value="Вход" name="">
            	<input type="button" value="Регистр" name="">
            </nav>
            <div class="border"></div>

		</header>

            <div class="content">
              <center><p>Новинки компании</p></center>
              <center><div class="border1"></div></center>

 
          <center>
             <div class="cart-product ">
                 <h2>Корзина</h2>
            </div>

            <section class="catal">
                <table>
                 <tr>
                    <th>ID</th>
                    <th>Название товара</th>
                    <th>Описание</th>
                    <th>Цена</th>
                 </tr>
                <?php foreach ($_SESSION['products'] as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['description'] ?></td>
                        <td><?= $product['price'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>

            </center>
         


		 <div class="border"></div>

         <nav>
            	<a href="..">О нас</a>
            	<a href="..">Каталог</a>
            	<a href="..">Корзина</a>
            	<a href="..">Заказы</a>
            	<a href="..">Где нас найти?</a>
            	<a href="..">Выход</a>
            	<input type="button" value="Вход" name="">
            	<input type="button" value="Регистр" name="">
            </nav>
	</body>
</html>
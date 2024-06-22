<html>
    <head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Catalog</title>
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
            	<a href="location.php">Где нас найти?</a>
            	<a href="..">Выход</a>
            	<input type="button" value="Вход" name="">
            	<input type="button" value="Регистр" name="">
            </nav>
            <div class="border"></div>

		</header>

 
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

         <div class="content">
         	<center><p>Название товара</p></center>
           <center><div class="border1"></div></center>

         	<center>
            <div class="range">   
            	<div class="img"><img src="img/product.png"></div>
            	<div class="product">
                <h3>Характеристики:</h3><br>
                <p>Страна: Казахстан</p><br>
                <p>Год выпуска: 2024</p><br>
                <p>Модель: Да</p><br>
                <div class="border2"></div>
                <div class="price">
                    <p>Цена: <b>400$</b></p>
                </div>


         <div class="information">
                    <a href="product.php" class="edit">Редактировать</a>
                    <form method="POST" action="">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="product_name" value="Название товара">
                        <input type="hidden" name="product_description" value="Страна: Казахстан, Год выпуска: 2024, Модель: Да">
                        <input type="hidden" name="product_price" value="400">
                        <button type="submit" class="cart">В корзину</button>
                    </form>
                     <form method="POST" action=""> 
                                <input type="hidden" name="delete_product" value="<?= $product['id'] ?>"> 
                                <button type="submit" class="delete-button">Удалить</button> 
                         </form>         
                    <?php 
session_start(); 
 
 
if (!isset($_SESSION['products'])) { 
    $_SESSION['products'] = []; 
} 
 
// Если данные отправлены методом POST, добавляем товар в корзину 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    // Проверяем, была ли нажата кнопка удаления 
    if (isset($_POST['delete_product'])) { 
        $product_id = $_POST['delete_product']; 
         
        // Ищем товар с данным ID и удаляем его из массива $_SESSION['products'] 
        foreach ($_SESSION['products'] as $key => $product) { 
            if ($product['id'] == $product_id) { 
                unset($_SESSION['products'][$key]); 
                break; 
            } 
        } 
         
    
        $_SESSION['products'] = array_values($_SESSION['products']); 
        $success = "Товар успешно удален из корзины."; 
    } 
} 
?>
                           
                </div> 
 
              </div>
            </div>

                   

         	<center>
            <div class="range">   
            	<div class="img"><img src="img/product.png"></div>
            	<div class="product">
                <h3>Характеристики:</h3><br>
                <p>Страна: Казахстан</p><br>
                <p>Год выпуска: 2024</p><br>
                <p>Модель: Да</p><br>
                <div class="border2"></div>
                <div class="price">
                    <p>Цена: <b>400$</b></p>
                </div>

     <div class="information">
                    <a href="product.php" class="edit">Редактировать</a>
                    <form method="POST" action="">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="product_name" value="Название товара">
                        <input type="hidden" name="product_description" value="Страна: Казахстан, Год выпуска: 2024, Модель: Да">
                        <input type="hidden" name="product_price" value="400">
                        <button type="submit" class="cart">В корзину</button>                    
                    </form>

                    <?php 
session_start(); 
 
 
if (!isset($_SESSION['products'])) { 
    $_SESSION['products'] = []; 
} 
 
// Если данные отправлены методом POST, добавляем товар в корзину 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    // Проверяем, была ли нажата кнопка удаления 
    if (isset($_POST['delete_product'])) { 
        $product_id = $_POST['delete_product']; 
         
        // Ищем товар с данным ID и удаляем его из массива $_SESSION['products'] 
        foreach ($_SESSION['products'] as $key => $product) { 
            if ($product['id'] == $product_id) { 
                unset($_SESSION['products'][$key]); 
                break; 
            } 
        } 
         
    
        $_SESSION['products'] = array_values($_SESSION['products']); 
        $success = "Товар успешно удален из корзины."; 
    } 
} 
?>
 
                            <form method="POST" action=""> 
                                <input type="hidden" name="delete_product" value="<?= $product['id'] ?>"> 
                                <button type="submit" class="delete-button">Удалить</button> 
                            </form> 
                        
                    
              
         
              
                </div> 
 
              </div>
            </div>
 
        


         	<center>
            <div class="range">   
            	<div class="img"><img src="img/product.png"></div>
            	<div class="product">
                <h3>Характеристики:</h3><br>
                <p>Страна: Казахстан</p><br>
                <p>Год выпуска: 2024</p><br>
                <p>Модель: Да</p><br>
                <div class="border2"></div>
                <div class="price">
                    <p>Цена: <b>400$</b></p>
                </div>


         <div class="information">
                    <a href="product.php" class="edit">Редактировать</a>
                    <form method="POST" action="">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="product_name" value="Название товара">
                        <input type="hidden" name="product_description" value="Страна: Казахстан, Год выпуска: 2024, Модель: Да">
                        <input type="hidden" name="product_price" value="400">
                        <button type="submit" class="cart">В корзину</button>
                    </form>
                </div> 
 
              </div>
            </div>
         	
            </div>



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
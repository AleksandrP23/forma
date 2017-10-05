<?php
	$name = $_POST['user-name'];
	$phone = $_POST['user-phone'];
	$message = $_POST['user-message'];
	$menu = $_POST['user-menu'];


    $disturb = isset($_POST['user-disturb']) ? 'Да' : 'Нет';

	$mail_message = '
    <html>
        <head>
            <title>Заявка</title>
        </head>
        <body>
            <h2>Заказ</h2>
            <ul>
                <li>Имя: ' . $name . '</li>
                <li>Телефон: ' . $phone . '</li>
                <li>Услуги: ' . $menu . '</li>
                <li>Комментарии к заказу: ' . $message . '</li>
                <li>Нужно ли получать рассылку: ' . $disturb . '</li>
            </ul>
        </body>
    </html>    
    ';

    echo "$mail_message";
?>
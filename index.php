<?php

$host = 'localhost';
$user = 'root';
$password = '1234';
$database_name = 'mysqli_name';

$conn = new mysqli(
        $host, // хост
        $user, // пользователь
        $password, // пароль
        $database_name // имя базы
);

// выполнить sql запрос
$result = $conn->query('SELECT * FROM `users`');

// теперь нужно закрывать соединение с базой данных
$conn->close();

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Mysqli</title>
</head>
<body>
    <table border="1" cellpadding="10px" style="border-collapse: collapse; width: 300px; margin: 0 auto;">
        <tr>
            <th>id</th>
            <th>name</th>
        </tr>
        <!--если таблица пустая, то foreach не будет работать, если таблица не пуста, то foreach отобразит данные-->
        <?php if ($result->num_rows > 0): ?>
            <?php foreach ($result as $row): ?>
                <tr style="text-align: center">
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</body>
</html>
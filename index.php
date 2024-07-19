<?php

// ошибки которые отправляются в вывод
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header></header>
    <main>
        <form action="" method='Post'>
            <label>login
                <input type="text" name='login' placeholder="name"></label>
            <label>password
                <input type="text" name='password' placeholder="name"></label>
            <button>send</button>
        </form>
    </main>
    <footer></footer>
</body>

</html>
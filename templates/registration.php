<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php var_dump($_POST); 
        
        ?>
        <fieldset>
            <legend>registration</legend>
            <form action="" method="post">
                <label>your username<input type="text" name="username" required></input></label>
                <label>your email<input type="text" name="email" required></input></label>
                <label>your password<input type="text" name="password" required></input></label>
                <button type="submit">submit</button>
            </form>
        </fieldset>
    </div>
</body>
</html>
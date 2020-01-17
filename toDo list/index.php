<!DOCTYPE html>
<html lang ="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ToDo list</title>
        <link rel="stylesheet" href="style.css"> <!--Не подключается из папки. Почему? -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>

    <div class="container">
        <h1>ToDo list</h1>
        <!--Переделать с использованием ajax!-->
        <form action="logic.php" method="post">
            <input type="text" name="task" id="task" placeholder="Must to do..." class="form-control">
            <button type="submit" name="sendTask" class ="btn btn-success">Send</button>

        </form>
    </div>


    </body>


</html>
<!DOCTYPE html>
<html lang ="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, instal-scale=1.0">
        <title>ToDo list</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>

    <div calss="container">
        <h1>ToDo list</h1>
        <!--Переделать с использованием ajax!-->
        <form action="/add.php" method="post">
            <input type="text" name="task" id="task" placeholder="Must to do..." class="form-control">
            <button type="submit" name="sendTask" class ="btn btn-success">Send</button>

        </form>
    </div>


    </body>


</html>
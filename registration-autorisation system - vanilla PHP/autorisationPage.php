<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Do Androids Dream of Electric Sheep?</title>
</head>
<body>
<h2>Авторизация</h2>
<form action = 'content.php' method = 'post' name="autForm" id="autForm">
    <p>Login <input type="text" name="log" id="log" required ></p>
    <p>Password <input type="text" name="pass" id="pass"required ></p>
    <p><input type="submit" id="btn" value="Войти"></p>

    <script src="libs/jquery.js"></script>
    <script type="text/javascript">

        $( document ).ready(function() {
            $('#autForm').submit(function(event){
                console.log('Отправка отработала');
                event.preventDefault();
                //Берем значение форм
                let formData = $( this ).serialize();
                console.log(formData);
                // Вставляем пост-запрос
                $.post(
                        "autorLogic.php",
                        formData,
                        onAjaxSuccess
                    );
            function onAjaxSuccess(data) {
                if (data=="True"){
                    $(location).attr('href','content.php');
                }
            }
            }
            );
        });
    </script>

    <nav>
    <p><a href="registrationPage.php">Зарегистрироваться</a></p>
    <p><a href="index.php">На главную</a></p>
    <nav>
</form>
</body>
</html>
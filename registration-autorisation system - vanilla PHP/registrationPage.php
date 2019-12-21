<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Do Androids Dream of Electric Sheep?</title>
</head>
<body>
<h2>Регистрация</h2>
<form action = 'content.php' method = 'post' name="autForm" id="autForm">
    <p>Login <input type="text" name="log" id="log" required ></p>
    <p>Input password <input type="text" name="pass" id="pass"required ></p>
    <p>Repeat password <input type="text" name="repPass" id="repPass"required ></p>
    <p><input type="submit" id="btn" value="Зарегистрироваться"></p>

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
                        "registrationLogic.php",
                        formData,
                        onAjaxSuccess
                    );
                function onAjaxSuccess (data){
                    alert(data);
                    if (data=="True"){
                        $(location).attr('href','content.php');
                    }
                }
                }
            );
        });
    </script>

</form>
    <nav>
    <a href="autorisationPage.php">Войти</a>
    <p><a href="index.php">На главную</a></p>
    </nav>
</body>
</html>
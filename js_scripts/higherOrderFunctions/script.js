const SCRIPTS = require("./scripts");

window.addEventListener ("load", function (){
    
    // Делаем просмотр результатов наглядным
    // Цепляясь к полю просмотра результатов скрипта
    // Да, это лучше, чем скучный консоль лог на пустой странице
    let field = document.getElementById("view");
    field.innerHTML = "Я текст, добавленный скриптом js!";

    // Разбираемся с функциями высшего порядка
    // Задача № 1. Как в этом файле получить данные из другого скрипта(примера из книги)
    import {SCRIPTS} from "scripts.js";

    console.dir(SCRIPTS[0]);
});
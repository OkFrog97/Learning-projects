window.addEventListener("load", function(){
    // Тайная жизнь объектов! Ууууу!
    // Погружаемся в Объектный джаваскрипт!

    //Инкапсуляция

    //simple rabbit object
    let rabbit = {};
    rabbit.speak = function (line){
        console.log(`Кролик говорит: ${line}!`);
    };
    rabbit.speak("Я живой");

    //this указывает на объект, функция которого была вызвана. Т.е. на себя
    function speak (line) {
        console.log(`${this.type} кролик говорит: ${line}!`);
    };

    let whiteRabbit = {type: "Белый", speak}; //speak написана как отдельная функция и передана в js
    whiteRabbit.speak("БаксБанни просто сосунок");

    // this и стрелочная функция: стрел.функ. не имеют своей th но могут видеть 
    // привязку внутри области видимости в которой они находятся

    function normalize () {
        console.log(this.coords.map(n => n / this.lenght));
    }
    normalize.call({coords: [0, 2, 5], lenght: 5});

    /*  call явно указывает на объект
     *  В ф. normalize указали на поле кордс передаваемого объекта
     *  и задали мап с анонимной функцией
     */

    // ПРОТОТИПЫ
    // Прототип - запасной объект-источник свойств, родитель объекта;
    // Object.prototype - Всеотец всех объектов.

    let protoRabbit = {
        speak (line) {
            console.log(`${this.type} кролик говорит: ${line}!`);
        }        
    };

    let killerRabbit = Object.create(protoRabbit); //явно указали прототип кролика
    killerRabbit.type = "Зайка-Убивайка";
    killerRabbit.speak("(л)Убить всех человеков, кроме Мазая!"); //метод из прототипа;


    
});
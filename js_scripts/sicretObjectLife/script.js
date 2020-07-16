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

    //Классы
    
    function makeRabbit (type){
        let rabbit = Object.create(protoRabbit);
        rabbit.type = type;
        return rabbit;
    }

    let bloodyRabbit = makeRabbit("Ангел кровавый");
    bloodyRabbit.speak("Я пожру ваши сны!");

    //конструктор
    function Rabbit(type){
        this.type = type;
    }

    Rabbit.prototype.speak = function (line){
        console.log(`${this.type} кролик говорит: ${line}!`);
    }

    let wierdRabbit = new Rabbit ("Странный");
    wierdRabbit.speak("Никто не видел Шалтая-Болтая?");

    class uRabbit {
        constructor (type){
            this.type = type;
        }
        speak (line){
            console.log(`${this.type} кролик говорит: ${line}!`);
        }
    }

    let blackRabbit = new uRabbit("Черный");
    blackRabbit.speak("А это не расизм?");

    // Итераторы в js

    class Matrix {
        constructor (width, height, element = (x, y) => undefined) {
            this.width = width;
            this.height = height;
            this.content = [];


            for (let y = 0; y < height; y++){
                for (let x = 0; x < height; x++){
                    this.content[y * width + x] = element(x, y); 
                }
            }
        }

        get (x, y) {
            return this.content[y * width + x];
        }

        set (x, y) {
            this.content[y * width + x] = value; 
        }
    }



    
});
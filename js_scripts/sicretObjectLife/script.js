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
    
    
});
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //1. Создать функцию, которая возвращает сумму двух чисел;

        function calculate ($number1,$number2) {
            $sum = $number1 + $number2;
            return $sum;
        }


        ?>


    <?php
   // 2. Создать функцию, которая выводит на экран сумму двух чисел;
        function calculates ($number1,$number2) {
            $sum = $number1 + $number2;
            return $sum;
        }

echo calculates(3,8);

        ?>

        <?php
        //3. Создать функцию приветствия;
        function hello ($name) {
            $text = 'Hello';
            return $text .$name;
        }
        echo hello ('Vasiliy');
        echo hello ('Vanya');
        ?>

        <?php
        //5. ФункциЯ, принимающаЯ массив строк и выводЯщаЯ каждую строку в отдельном параграфе.
    function fruits ($frut) {
         foreach ($frut as $frut2){
             echo $frut2."<br>";
         };
    };
        fruits(['lemon','orange','banana','apple']);

        ?>


    </body>
    </html>
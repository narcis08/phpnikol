<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php 
    //1. При помощи цикла for выведите все нечетные числа от 1 до 50;
    for ($i = 1;$i <=50; $i+=2):
    echo $i ."<br>";
    endfor;
    ?>

    <!--   
    2. При помощи цикла while вывести список категорий. Результат Категория 1, Категория 2, и т.д.;
-->
    <?php
    	$pages_count = 5; 
    	$cur_page = 1; 
    ?>
    <ul class="categories">
        <?php 
        while ($cur_page <= $pages_count) {
        ?>
        <li class="category">
            <h1 <?=$cur_page; ?>>
                Category
                <?=$cur_page; ?>
            </h1>
        </li>
        <?php
    	$cur_page++; } ?>
    </ul>

    <?php
//3. Написать скрипт, который выведет Заголовок, Дату и Имя автора, Картину поста (цикл while);
    ?>
    <?php 
        while ($cur_page=1) {
        ?>

    <h1>
        Two captains
    </h1>
    <h2>
        1940y.
    </h2>
    <h3>
        Veniamin Kaverin
    </h3>
    <img src=" <?= '../660.jpg' ?>" alt="...">
    <?php
            
    	break; } ?>

    <?php
   // 4. При помощи цикла foreach вывести список категорий. Результат Категория 1, Категория 2, и т.д.;
    ?> 
     <?php
        $categories = [
            0 => [
                'title' => 'Category 1',
                 'text' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad labore ducimus perferendis, odit, eum ut unde iure aspernatur voluptatibus sit.'
              
            ],
            1 => [
                'title' => 'Category 2',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad labore ducimus perferendis, odit, eum ut unde iure aspernatur voluptatibus sit.'
               
            ],
            2 => [
                'title' => 'Category 3',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad labore ducimus perferendis, odit, eum ut unde iure aspernatur voluptatibus sit.'
               
            ]
        ];
            
        ?>
    <?php 
        foreach ($categories as $category) { ?>
  <div class="card-body" >
    <h5 class="card-title" > <?= $category['title'] ?></h5>  
    <p class="card-text" ><?= $category['text'] ?></p> 
</div>
 <?php } ?>
 
<!--5.Написать скрипт вывода формы,в котором задействовать подключение конструкци require_once;-->

 <?php /*6. Задача. Переменная $lang может принимать два значения: 'ru' и 'en'. Если она имеет значение 'ru',
 то в переменную $arr запишем массив дней недели на русском языке, а если имеет значение 'en' – то на английском.
  Решите задачу через 2 if, через switch-case.*/?>
 
    <?php
    
   

   
$arr = ["понедельник","вторник","среда","четверг","пятница","суббота","воскресенье"]; 
$arr1 =["monday","tuesday","wednesday","thursday","friday","saturday","sunday"];



   
    switch($lang){
    case 'ru':
    if($lang='ru'){
     echo $arr;
          }
          break;
      case "en":
       if($lang = 'en') {
           echo $arr1;
       }
          break;
     
      default:
      echo "Ошибка!";
  }
   

echo "<br>";
    ?>




</body>

</html>

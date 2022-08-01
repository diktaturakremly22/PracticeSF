<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
        <select>
            <option value="books">КВАЛИФИКАЦИЯ</option>
                <option value="py">Python</option>
                    <option value=""></option>
                        <option value="html">HTML</option>
                            <option value="css">CSS</option>
                            <option value="js">JavaScript</option>
                        <option value=""></option>
                    <option value="php">PHP</option>
                <option value=""></option>
            <option value="sql">SQL</option>
        </select>  <br>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="./img/Söder.jpg">'; ?>
                    <?php  echo '<img src="./img/Markus-soeder-csu-weiss-eine-mass-bier-offenbar-zu-schaetzen.jpg">'; ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут: 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'Дата рождения:', ' ', $birth . '<br>';
                          echo 'Сфера деятельности:', ' ', $scope . '<br>';
                          echo 'Должность:', ' ', $post; 
                    ?> </p> 

            <p> Мы научились создавать переменные и константы </p>
                    <select>
                        <option>ВИДЫ ПЕРЕМЕННЫХ И КОНСТАНТОВ</option>
                            <option>$this</option>
                                <option>Суперглобальные</option>
                                <option>$GLOBALS...</option>
                                    <option></option>
                                        <option>const MAX_VALUE = 5.0;</option>
                                        <option>define('EXAMPLE', $var );</option>
                                    <option>Волшебные константы</option>
                                <option>__FILE__...</option>
                            <option></option>
                        <option>Переменные переменных</option>
                    </select>    
            <p> Изучили простые операции </p>
                    <select>
                        <option>ВИДЫ ОПЕРАЦИЙ</option>
                            <option>Арифметические</option>
                                <option>Логические</option>
                                    <option>Сравнения</option>
                                    <option>Объединение строк</option>
                                    <option>Инкремент и декремент</option>
                                <option>Приоритет</option>
                            <option>Присваивания</option>
                        <option>Поразрядные</option>
                    </select>
                </div>
            </div>

            <div class="knowledge">
                                   
                <?php  include 'knowledge.inc.php'; ?>
                <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 9;
                        $b = 8;
                        $c = "Trick " . $a + $b . " (гуглить!)";
                        echo $c;
                    ?>   <br> 

                        <?php
                            echo $d;
                        ?>  <br> 

                            <?php
                                echo $result;
                            ?>  <br>

                        <?php
                            echo $x;
                        ?>  <br>

                <?php 
                    echo '<br>';
                    echo 'Время выполнения скрипта: ' . (microtime(true) - $start) . ' sec.';
                ?>
        </div>

            <div class="article">
                <p class="text">
                "Тот, кто обслуживает тупые антисемитские клише, оказывается вне нашего порядка." - Маркус Зёдер&#8482;  <br>
                "Сейчас нам нужен обязательный, пропорциональный и надежный свод правил на зиму." - Маркус Зёдер&trade;  <br>
                "Вся жизнь - это большой компромисс, который начинается с брака и заканчивается политикой." - Маркус Зёдер&reg;  <br>
                "Если мы хотим провести реформы, нам нужен командный дух. И этот командный дух - патриотизм." - Маркус Зёдер&#174;  <br>
                "Ислам не является идентификационным и формирующим культуру для нашей страны, даже если он является реальностью во многих немецких городах." - Маркус Зёдер™
                </p>
            </div>
    </div>

        <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
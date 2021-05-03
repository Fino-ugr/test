<?php
//setcookie('login', 'Vasya123', time() + 86400);

if (isset($_COOKIE['counter'])){
    $counter = ++$_COOKIE['counter'];
}
    else {
        $counter = 1;
    }
setcookie('counter', $counter, time() + 86400);

session_start(); // Стартует новую сессию, либо возобновляет существующую

if ($_SESSION['login'] != 'Василий' AND $_SESSION['login'] != 'Петр'){
    echo "Вы не авторизованы";
    $new_url = 'http://localhost/i/i.php';
            header('Location: '.$new_url);
}

?>
Посещений: <?php echo $counter; ?>
<!DOCTYPE html>
<html>
    <head>
<title>  Сайт </title>
<meta charset="utf-8">
<meta name="PROBA">
<meta http-equiv="Content-Type" content="text/html">
    </head>
<body>    
<br>    
<br>
    Здравствуйте <?php echo $_SESSION['login'] . "!"; echo "<br>";?>
    Ваш ID = <?php echo $_COOKIE['PHPSESSID']?>
<h1>КУЛИНАРИЯ</h1>

<h2> Рецепт супа </h2>  
  <ul>
    <li>Купите мясо в магазине.</li>
    <li>Помойте мясо и положите в кастрюлю.</li>
        <ul>
            <li> Обрежьте шкуру</li>
            <li> Порежьте на небольшие кусочки</li>
        </ul>
    <li>Налейте в кастрюлю воды и варите до готовности</li>
</ul>
<hr />
<a href="1.html"> Вариант 1 </a> <br>
<a href="index.php"> Вариант 2 </a> <br>
<a href="3.html"> Вариант 3 </a> <br>
<a href="https://adm-saransk.ru"> Администрация города </a> <br>
<br>
<?php echo "Текущее время:" . time();  
?>
<br>
<?php
$ss_id = $_COOKIE['PHPSESSID'];
echo "это номер сессии из КУК:" . $ss_id;
echo "<br>";
echo "это массив КУКИ:";
var_dump($_COOKIE); // Выводит все КУКИ, установленные для этого пользователя
echo "<br>";
echo "это массив СЕССИИ:";
var_dump($_SESSION); // Выводит все СЕССИИ, открытые для этого пользователя

/*if (isset($_COOKIE['login'])){
    echo "Я установил тебе КУКИ:";
    echo $_COOKIE['login']; 
    echo ", ";
    echo $_COOKIE['counter'];    

}
    else {
    echo "скоро поставлю тебе КУКУ";    
    }
*/
?>
</body>
</html>

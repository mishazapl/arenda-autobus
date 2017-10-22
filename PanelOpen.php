<?php if ($_COOKIE['login'] == 'SuperAdmin' && $_COOKIE['password'] == '123456'): ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/panel.css">
</head>
<body>

<a href="index.php">На главную</a>

<div class="changeCity">

<h1>Изменение времени поездки.</h1>

    <?php

    if (!empty($time)) {

        for ($i = 0; $i < count($time); $i++) {
            print $time[$i]['Times'];
            print '<br><br>';
        }
    }

    ?>

<br>

<h2>Добавить время</h2>

<form id="cityForm" action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <input type="text" name="timeChange" placeholder="Введите время">
    <input type="submit" name="timeAdd" value="Добавить время поездки">
</form>

<br>

<h2>Удалить время</h2>

<form id="cityForm" action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <input type="text" name="timeDel" placeholder="Время поездки">
    <input type="submit" name="timeDell" value="Удалить временной промежуток">
</form>



<br>

</div>

<div class="changeCity">

<h1>Изменение основных городов.</h1>

    <?php

    if (!empty($city)) {

        for ($i = 0; $i < count($city); $i++) {
            print $city[$i]['city'];
            print '<br><br>';
        }
    }

    ?>

<br>

<h2>Добавить город</h2>

<form id="cityForm" action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <input type="text" name="cityChange" placeholder="Название города">
    <input type="submit" name="CityAdd" value="Добавить город">
</form>

<br>

<h2>Удалить город</h2>

<form id="cityForm" action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <input type="text" name="cityDel" placeholder="Название города">
    <input type="submit" name="CityDell" value="Удалить город">
</form>



<br>

<br>

<h1>Изменение записей.</h1>

</div>

<p id="wheres" style="text-align: center;">Изменить город откуда поездка.</p>
<form id="cityForm" action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <input type="number" name="id1" placeholder="id-записи">
    <input type="text" name="city1" placeholder="Сменить город">
    <input type="submit" name="sub1" value="Изменить">
</form>
<br>
<p id="wherever" style="text-align: center;">Изменить город куда поездка.</p>
<form id="cityForm" action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <input type="number" name="id2" placeholder="id-записи">
    <input type="text" name="city2" placeholder="Сменить город">
    <input type="submit" name="sub2" value="Изменить">
</form>
<br>
<p id="data" style="text-align: center;">Изменить дату поездки.</p>
<form id="cityForm" action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <input type="number" name="id3" placeholder="id-записи">
    <input type="date" name="city3" placeholder="Сменить дату">
    <input type="submit" name="sub3" value="Изменить">
</form>
<br>
<p id="person" style="text-align: center;">Изменить кол-во человек в поездку.</p>
<form id="cityForm" action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <input type="number" name="id4" placeholder="id-записи">
    <input type="text" name="city4" placeholder="Кол-во людей">
    <input type="submit" name="sub4" value="Изменить">
</form>
<br>
<p id="name" style="text-align: center;">Изменить имя человека.</p>
<form id="cityForm" action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <input type="number" name="id5" placeholder="id-записи">
    <input type="text" name="city5" placeholder="Сменить имя человека.">
    <input type="submit" name="sub5" value="Изменить">
</form>
<br>
<p id="number" style="text-align: center;">Изменить номер человека.</p>
<form id="cityForm" action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <input type="number" name="id6" placeholder="id-записи">
    <input type="text" name="city6" placeholder="Сменить номер.">
    <input type="submit" name="sub6" value="Изменить">
</form>
<br>
<p id="number" style="text-align: center;">Изменить время человека.</p>
<form id="cityForm" action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <input type="number" name="id7" placeholder="id-записи">
    <input type="text" name="city7" placeholder="Сменить время.">
    <input type="submit" name="sub7" value="Изменить">
</form>
<br>
<p id="delete" style="text-align: center;">Удалить запись</p>
<form id="cityForm" action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <input type="number" name="id8" placeholder="id-записи">
    <input type="submit" name="sub8" value="Удалить">
</form>

<?php

for ($i = 0; $i < count($dataUser); $i++) {

print '<div class="infoPanel">';
    

print '<span id="idZ">id-записи - </span>'
      .

      '<span id="idZN">' . $dataUser[$i]['id'] . '</span>';

print '<span id="idZ">Время поездки:</span>'
      .

      '<span id="idT">' . $dataUser[$i]['time'] . '<span id="idTT"> Дата поездки:</span> '
      .
      $dataUser[$i]['data'] . '</span><br>';


print '<span id="idZ">Откуда поездка - </span>'
      .
      '<span id="idT">' . $dataUser[$i]['wheres'] . '</span>';

print '<span id="idZ">Куда поездка</span>'
      .
      '<span id="idT">' . $dataUser[$i]['wherever'] . '</span>';

print '<br><span id="idZ">Имя заказчика - </span>'
      .
      '<span id="idT">' . $dataUser[$i]['name'] . '</span>';

print '<span <span id="idZ">Номер заказчика - </span>'
      .
      '<span id="idT">' . $dataUser[$i]['number'] . '</span>';


print '</div>';

}

?>

</body>
</html>
<?php else:
    die("У вас нету доступа.");
    endif;
    ?>
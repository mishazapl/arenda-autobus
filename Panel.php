<?php
ob_start();

// Подключение файлов.
error_reporting(E_ALL);
ini_set('display_errors',1);

require_once __DIR__ . '/AdminPanel.php';
require_once __DIR__ . '/AdminOpen.php';
require_once __DIR__ . '/Travel.php';
require_once __DIR__ . '/City.php';
require_once __DIR__ . '/Time.php';

// Controller

$autolog = null;

if (@$_COOKIE['login'] && @$_COOKIE['password']) {
    $panel = new AdminPanel();
    $autolog = $panel->checkCookie($_COOKIE['login'], $_COOKIE['password']);
}

if (
    isset($_POST['submit'])
    &&
    !empty($_POST['login'])
    &&
    !empty($_POST['pass'])
) {
    $panel = new AdminPanel();
    $panel->checkedPass($_POST['login'], $_POST['pass']);
}

/**
 * Обновление заявок, изменение данных.
 */

switch (
    !isset($_POST['sub1'])
        ||
    !isset($_POST['sub2'])
        ||
    !isset($_POST['sub3'])
        ||
    !isset($_POST['sub4'])
        ||
    !isset($_POST['sub5'])
        ||
    !isset($_POST['sub6'])
        ||
    !isset($_POST['sub7'])
        ||
    !isset($_POST['sub8'])
) {
    case @$_POST['sub1']:
        $travel = new Travel();
        $travel->connectBD();
        @$travel->updateWheres($_POST['id1'], $_POST['city1']);
        break;
    case @$_POST['sub2']:
        $travel = new Travel();
        $travel->connectBD();
        @$travel->updateWherever($_POST['id2'], $_POST['city2']);
        break;
    case @$_POST['sub3']:
        $travel = new Travel();
        $travel->connectBD();
        @$travel->updateDate($_POST['id3'], $_POST['city3']);
        break;
    case @$_POST['sub4']:
        $travel = new Travel();
        $travel->connectBD();
        @$travel->updatePerson($_POST['id4'], $_POST['city4']);
        break;
    case @$_POST['sub5']:
        $travel = new Travel();
        $travel->connectBD();
        @$travel->updateName($_POST['id5'], $_POST['city5']);
        break;
    case @$_POST['sub6']:
        $travel = new Travel();
        $travel->connectBD();
        @$travel->updateDate($_POST['id6'], $_POST['city6']);
        break;
    case @$_POST['sub7']:
        $travel = new Travel();
        $travel->connectBD();
        @$travel->updateTime($_POST['id7'], $_POST['city7']);
        break;
    case @$_POST['sub8']:
        $travel = new Travel();
        $travel->connectBD();
        @$travel->deleteDate($_POST['id8']);
        break;
}

/**
 * Добавить/удалить город.
 */

if (!isset($_POST['cityAdd']) && !empty($_POST['cityChange'])) {
    $addCity = new City();
    $addCity->connectBD();
    $addCity->addCity($_POST['cityChange']);
}

if (isset($_POST['CityDell']) && !empty($_POST['cityDel'])) {
    $addCity = new City();
    $addCity->connectBD();
    $addCity->deleteCity($_POST['cityDel']);

}


if (isset($_POST['timeAdd']) && !empty($_POST['timeChange'])) {
    $addCity = new Time();
    $addCity->connectBD();
    $addCity->addTime($_POST['timeChange']);
}

if (isset($_POST['timeDell']) && !empty($_POST['timeDel'])) {
    $addCity = new Time();
    $addCity->connectBD();
    $addCity->deleteTime($_POST['timeDel']);

}


/**
 * Вывод шаблонов.
 */

if ($autolog === true) {

    $adminOpen = new AdminOpen();
    $dataUser = $adminOpen->getTravel($_COOKIE['login'], $_COOKIE['password']);

    $time = new Time();
    $time->connectBD();
    $time = $time->getTime();

    $city = new City();
    $city->connectBD();
    $city = $city->getCity();

    require_once __DIR__ . '/panelOpen.php';

} else {
    require_once __DIR__ . '/panelHTML.php';
}

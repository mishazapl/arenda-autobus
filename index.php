<?php

// Подключение файлов.
error_reporting(E_ALL);
ini_set('display_errors',1);

require_once __DIR__ . '/MainPage.php';
require_once __DIR__ . '/Travel.php';
require_once __DIR__ . '/City.php';
require_once __DIR__ . '/Time.php';

// Controller

$sendData = new MainPage();
$city = $sendData->getTravelData();

$getTime = new Time();
$getTime->connectBD();
$time = $getTime->getTime();

if (
    isset($_POST['submit'])
) {
    if (
            !empty($_POST['where'])
             &&
            !empty($_POST['wherever'])
             &&
            !empty($_POST['date'])
             &&
            !empty($_POST['person'])
             &&
            !empty($_POST['name'])
             &&
            !empty($_POST['number'])
             &&
            !empty($_POST['times'])
    ) {
        $sendData->sendData
        (
            $_POST['where'],
            $_POST['wherever'],
            $_POST['date'],
            $_POST['person'],
            $_POST['name'],
            $_POST['number'],
            $_POST['times']
        );
    } else {
        print 'Заполните все поля!';
    }
}

// View

require_once __DIR__ . '/Manage.php';

<?php

class AdminOpen
{
    private $login    = 'SuperAdmin';
    private $password = '123456';

    public function getTravel($login, $password)
    {
        if ($login == $this->login && $password == $this->password) {
            $city = new Travel();
            $city->connectBD();
            $travel = $city->getTravel();
            return $travel;
        } else {
            die("Войдите заново на сайт!");
        }
    }

}
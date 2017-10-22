<?php

class MainPage
{

    public function sendData($where, $wherever, $data, $person, $name, $number, $time)
    {
        $travel = new Travel();
        $travel->connectBD();
        $travel->prepareData($where[0], $wherever[0], $data, $person[0], $name, $number, $time[0]);
    }

    public function getTravelData()
    {
        $city = new City();
        $city->connectBD();
        $city = $city->getCity();
        return $city;
    }
}
<?php

class City
{
    private $host = 'localhost';
    private $user = 'Main';
    private $pass = '';
    private $bd = 'Main';
    private $mysqli;
    private $table = 'City';
    private $where;
    private $wherever;
    private $data;
    private $person;
    private $name;
    private $number;
    private $city;
    private $cityGet;
    private $time;

    public function connectBD()
    {
        @$this->mysqli = new \mysqli($this->host, $this->user, $this->pass, $this->bd);

        if (mysqli_connect_errno()) {
            print 'Неизвестная ошибка на сайте.';
            exit();
        }
    }

    public function getCity()
    {
        $this->city = $this->mysqli->query
        (
            "SELECT `city` FROM `$this->table` ORDER BY `id` DESC LIMIT 100"
        );

        $this->cityGet = $this->city->fetch_all(MYSQLI_ASSOC);
        $this->mysqli->close();
        return $this->cityGet;
    }

    public function addCity($city)
    {
        $this->city = $this->mysqli->real_escape_string($city);

        $this->city = $this->mysqli->query
        (
            "INSERT INTO `$this->table` 
        (
        `city`
        )
        VALUES
        (
        \"$this->city\"
        )"
        );

        if ($this->mysqli->affected_rows != 0) {
            print 'Данные сохранены';
            $this->mysqli->close();
        } else {
            print 'Произошла ошибка, попробуйте еще раз!';
            $this->mysqli->close();
        }
    }

    public function deleteCity($city) {

        $this->city = $this->mysqli->real_escape_string((string)$city);

        $this->mysqli->query
        (
          "DELETE FROM `$this->table` WHERE `city`=\"$this->city\""
        );
    }
}
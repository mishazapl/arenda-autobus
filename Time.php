<?php

class Time
{
    private $host  = 'localhost';
    private $user  = 'Main';
    private $pass  = '';
    private $bd    = 'Main';
    private $mysqli;
    private $table = 'Time';
    private $time;

    public function connectBD()
    {
        @$this->mysqli = new \mysqli($this->host,$this->user,$this->pass,$this->bd);

        if (mysqli_connect_errno()) {
            print 'Неизвестная ошибка на сайте.';
            exit();
        }
    }

    public function getTime()
    {
        $this->time = $this->mysqli->query
        (
            "SELECT `Times` FROM `$this->table` ORDER BY `id` DESC LIMIT 100"
        );

        $res = $this->time->fetch_all(MYSQLI_ASSOC);
        $this->mysqli->close();
        return $res;
    }


    public function addTime($time)
    {
        $this->time = $this->mysqli->real_escape_string($time);

        $this->time = $this->mysqli->query
        (
            "INSERT INTO `$this->table` 
        (
        `Times`
        )
        VALUES
        (
        \"$this->time\"
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

    public function deleteTime($time) {

        $this->time = $this->mysqli->real_escape_string((string)$time);

        $this->mysqli->query
        (
            "DELETE FROM `$this->table` WHERE `Times`=\"$this->time\""
        );
    }

}
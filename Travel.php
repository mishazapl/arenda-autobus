<?php

class Travel
{
    private $host  = 'localhost';
    private $user  = 'Main';
    private $pass  = '';
    private $bd    = 'Main';
    private $mysqli;
    private $table = 'Travel';
    private $where;
    private $wherever;
    private $data;
    private $person;
    private $name;
    private $number;
    private $time;
    private $id;

    public function connectBD()
    {
        @$this->mysqli = new \mysqli($this->host,$this->user,$this->pass,$this->bd);

        if (mysqli_connect_errno()) {
            print 'Неизвестная ошибка на сайте.';
            exit();
        }
    }

    public function prepareData($where, $wherever, $data, $person, $name, $number, $time)
    {
        $this->where    = $this->mysqli->real_escape_string($where);
        $this->wherever = $this->mysqli->real_escape_string($wherever);
        $this->data     = $this->mysqli->real_escape_string($data);
        $this->person   = $this->mysqli->real_escape_string($person);
        $this->name     = $this->mysqli->real_escape_string($name);
        $this->number   = $this->mysqli->real_escape_string($number);
        $this->time     = $this->mysqli->real_escape_string($time);

        $this->sendDataMain();
    }

    private function sendDataMain()
    {
        $this->mysqli->query
        (
            "INSERT INTO `$this->table` 
        (
        wheres,
        wherever,
        data,
        person,
        name,
        number,
        time
        ) 
        VALUES 
        (
        \"$this->where\",
        \"$this->wherever\",
        \"$this->data\",
        \"$this->person\",
        \"$this->name\",
        \"$this->number\",
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


    public function getTravel()
    {
        $this->city = $this->mysqli->query
        (
            "SELECT `id`, `wheres`, `wherever`, `data`, `person`, `name`, `number`, time
             FROM `$this->table` ORDER BY `id` DESC LIMIT 100"
        );

        $this->cityGet = $this->city->fetch_all(MYSQLI_ASSOC);
        $this->mysqli->close();
        return $this->cityGet;
    }


    /**
     * Изменения данных.
     */

    /**
     * @param $id
     * @param $data
     *
     * Обновление откуда.
     */

    public function updateWheres($id, $data)
    {

        if ($_COOKIE['login'] != 'SuperAdmin' && $_COOKIE['password'] != '123456') {
            die("Вы не имеете доступа для таких действий!");
        }

        $this->id    = $this->mysqli->real_escape_string($id);
        $this->where = $this->mysqli->real_escape_string($data);

        $check = $this->mysqli->query
        (
            "UPDATE `$this->table` SET `wheres`=\"$this->where\"
             WHERE `id`=\"$this->id\" "
        );

        if ($this->mysqli->affected_rows != 0) {
            $this->mysqli->close();
            print 'Данные изменены.';
        } else {
            print 'Попробуйте еще раз.';
        }
    }

    /**
     * @param $id
     * @param $data
     *
     * Обновление куда
     */

    public function updateWherever($id, $data)
    {

        if ($_COOKIE['login'] != 'SuperAdmin' && $_COOKIE['password'] != '123456') {
            die("Вы не имеете доступа для таких действий!");
        }

        $this->id    = $this->mysqli->real_escape_string($id);
        $this->where = $this->mysqli->real_escape_string($data);

        $check = $this->mysqli->query
        (
            "UPDATE `$this->table` SET `wherever`=\"$this->where\"
             WHERE `id`=\"$this->id\" "
        );

        if ($this->mysqli->affected_rows != 0) {
            $this->mysqli->close();
            print 'Данные изменены.';
        } else {
            print 'Попробуйте еще раз.';
        }
    }

    /**
     * @param $id
     * @param $data
     *
     * Обновление даты поездки
     */

    public function updateDate($id, $data)
    {

        if ($_COOKIE['login'] != 'SuperAdmin' && $_COOKIE['password'] != '123456') {
            die("Вы не имеете доступа для таких действий!");
        }

        $this->id    = $this->mysqli->real_escape_string($id);
        $this->where = $this->mysqli->real_escape_string((string)$data);

        $check = $this->mysqli->query
        (
            "UPDATE `$this->table` SET `data`=\"$this->where\"
             WHERE `id`=\"$this->id\" "
        );

        if ($this->mysqli->affected_rows != 0) {
            $this->mysqli->close();
            print 'Данные изменены.';
        } else {
            print 'Попробуйте еще раз.';
        }
    }


    /**
     * @param $id
     * @param $data
     *
     * Обновление человек в поездку
     */
    public function updatePerson($id, $data)
    {

        if ($_COOKIE['login'] != 'SuperAdmin' && $_COOKIE['password'] != '123456') {
            die("Вы не имеете доступа для таких действий!");
        }

        $this->id    = $this->mysqli->real_escape_string($id);
        $this->where = $this->mysqli->real_escape_string((string)$data);

        $check = $this->mysqli->query
        (
            "UPDATE `$this->table` SET `person`=\"$this->where\"
             WHERE `id`=\"$this->id\" "
        );

        if ($this->mysqli->affected_rows != 0) {
            $this->mysqli->close();
            print 'Данные изменены.';
        } else {
            print 'Попробуйте еще раз.';
        }
    }

    /**
     * @param $id
     * @param $data
     *
     * Обновление имени человека
     */

    public function updateName($id, $data)
    {

        if ($_COOKIE['login'] != 'SuperAdmin' && $_COOKIE['password'] != '123456') {
            die("Вы не имеете доступа для таких действий!");
        }

        $this->id    = $this->mysqli->real_escape_string($id);
        $this->where = $this->mysqli->real_escape_string((string)$data);

        $check = $this->mysqli->query
        (
            "UPDATE `$this->table` SET `name`=\"$this->where\"
             WHERE `id`=\"$this->id\" "
        );

        if ($this->mysqli->affected_rows != 0) {
            $this->mysqli->close();
            print 'Данные изменены.';
        } else {
            print 'Попробуйте еще раз.';
        }
    }

    /**
     * @param $id
     * @param $data
     *
     * Обновление номера человека
     */

    public function updateNumber($id, $data)
    {

        if ($_COOKIE['login'] != 'SuperAdmin' && $_COOKIE['password'] != '123456') {
            die("Вы не имеете доступа для таких действий!");
        }

        $this->id    = $this->mysqli->real_escape_string($id);
        $this->where = $this->mysqli->real_escape_string((string)$data);

        $check = $this->mysqli->query
        (
            "UPDATE `$this->table` SET `number`=\"$this->where\"
             WHERE `id`=\"$this->id\" "
        );

        if ($this->mysqli->affected_rows != 0) {
            $this->mysqli->close();
            print 'Данные изменены.';
        } else {
            print 'Попробуйте еще раз.';
        }
    }


     public function updateTime($id, $data)
    {

        if ($_COOKIE['login'] != 'SuperAdmin' && $_COOKIE['password'] != '123456') {
            die("Вы не имеете доступа для таких действий!");
        }

        $this->id    = $this->mysqli->real_escape_string($id);
        $this->where = $this->mysqli->real_escape_string((string)$data);

        $check = $this->mysqli->query
        (
            "UPDATE `$this->table` SET `time`=\"$this->where\"
             WHERE `id`=\"$this->id\" "
        );

        if ($this->mysqli->affected_rows != 0) {
            $this->mysqli->close();
            print 'Данные изменены.';
        } else {
            print 'Попробуйте еще раз.';
        }
    }

    /**
     * @param $id
     *
     * Удаленние записей.
     */

    public function deleteDate($id)
    {

        if ($_COOKIE['login'] != 'SuperAdmin' && $_COOKIE['password'] != '123456') {
            die("Вы не имеете доступа для таких действий!");
        }

        $this->id    = $this->mysqli->real_escape_string($id);

        $check = $this->mysqli->query
        (
            "DELETE FROM `$this->table` WHERE `id`=\"$this->id\" "
        );

        if ($this->mysqli->affected_rows != 0) {
            $this->mysqli->close();
            print 'Данные удаленны..';
        } else {
            print 'Попробуйте еще раз.';
        }
    }
}

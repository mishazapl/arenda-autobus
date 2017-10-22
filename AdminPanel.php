<?php


class AdminPanel
{
    private $login = 'SuperAdmin';
    private $password = '123456';

    public function checkedPass($login, $password)
    {
        if ($login == $this->login && $password == $this->password) {
            $this->setCookie();
        } else {
            print 'Неверные данные';
        }
    }

    private function setCookie()
    {
        setcookie(
            "login",
            "$this->login",
            time()+10680
        );

        setcookie(
            "password",
            "$this->password",
            time()+10680
        );
        print 'Вы успешно вошли!';
        header('Location: http://project/panel.php');
    }

    public function checkCookie($login, $password)
    {
        if ($login == $this->login && $password == $this->password) {
           return true;
        } else {
            print 'Войдите заново в систему!';
            return false;
        }
    }

}
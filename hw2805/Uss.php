<?php
class Uss {
public $name;
public $login;
public $password;


public function __construct($name, $login, $password)
{
    $this->name=$name;
    $this->login=$login;
    $this->password=$password;
}
}
<?php

class Kategoria
{
public $connect;
public $sName = "localhost";
public $uName = "root";
public $password = "";
public $db_nazwa = "automat";

    public function run()
    {
        $menu = new Menu();
        $menu->choosingMenu();
    }
}



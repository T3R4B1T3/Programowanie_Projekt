<?php

namespace src;

use PDO;
use PDOException;

class Polaczenie
{
    public $connect;
    public $sName = "localhost";
    public $uName = "root";
    public $password = "";
    public $db_nazwa = "automat";
    public $cat;

    public function __construct($category)
    {
        $this->cat = $category;
    }

    public function Connect()
    {
        try {
            $this->connect = new PDO("mysql:host=$this->sName; dbname=$this->db_nazwa", $this->uName,$this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pytanie = $this->connect->prepare("Select * From {$this->cat}");
            $pytanie->execute();

            while($row = $pytanie->fetch()){
                print $row['ID']." ".$row['Marka']." ".$row['Pojemność']." ".$row['Cena']."zł".PHP_EOL;
            }
        }catch (PDOException $a)
        {
            print 'Błąd połączenia1: '.$a->getMessage().PHP_EOL;
        }
        $this->connect = null;
    }

}
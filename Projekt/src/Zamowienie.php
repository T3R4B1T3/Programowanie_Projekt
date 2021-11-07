<?php

namespace src;

use PDO;
use PDOException;

class Zamowienie
{
    public $money1;
    public $sum;
    public $produkt;
    public $connect;
    public $sName = "localhost";
    public $uName = "root";
    public $password = "";
    public $db_nazwa = "automat";
    public $category;


    public function __construct($cat)
    {
        $this->category = $cat;
    }


    public function odczyt_Zamowienia()
    {
        echo "\033[35mWrzuć pieniądze:\033[0m" . PHP_EOL;
        $this->sum = readline();
        if (!is_numeric($this->sum)) {
            exit("\033[31mERROR! Wrzuć monete\033[0m");
        }
        echo "\033[35mWybierz produkt wpisując numer:\033[0m" . PHP_EOL;
        $this->produkt = readline();
        echo "\033[35mWybrałes:\033[0m" . PHP_EOL;
    }

    public function calculations()
    {
        (float)($rest = ($this->sum - $this->money1));


        if ($rest == 0) {
            echo "\033[35mBrak reszty\033[0m" . PHP_EOL;
            echo "\033[35mDo widzenia :)\033[0m" . PHP_EOL;
        } elseif ($rest > 0) {
            echo "\033[35mReszta: {$rest} zl" . PHP_EOL;
        } else {
            echo "\033[31mZbyt mała kwota na ten produkt\033[0m" . PHP_EOL;
            echo "\033[35mWybierz jescze raz:\033[0m" . PHP_EOL;

            $poloacznie = new Polaczenie($this->category);
            $poloacznie->Connect();
            $this->odczyt_Zamowienia();
            $this->querry();
            $this->calculations();
        }


    }

    public function querry()
    {
        try {
            $this->connect = new PDO("mysql:host=$this->sName; dbname=$this->db_nazwa", $this->uName, $this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pytanie = $this->connect->prepare("Select * From {$this->category} WHERE {$this->category}.id = {$this->produkt}");
            $pytanie->execute();

            while ($row = $pytanie->fetch()) {
                echo "\033[36m{$row['ID']} {$row['Marka']} {$row['Pojemność']} {$row['Cena']} zł\033[0m" . PHP_EOL;
                $this->money1 = $row['Cena'];
            }
        } catch (PDOException $a) {
            echo "\033[31mBłąd połączenia2:\033[0m" . $a->getMessage() . PHP_EOL;
        }
        $this->connect = null;
    }
}
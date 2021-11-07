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
        print 'Wrzuć pieniądze:  ' . PHP_EOL;
        $this->sum = readline();
        if (!is_numeric($this->sum)) {
            exit(print 'ERROR! Wrzuć monete');
        }
        print 'Wybierz produkt wpisując numer: ' . PHP_EOL;
        $this->produkt = readline();
        print 'Wybrałes: ' . PHP_EOL;
    }

    public function calculations()
    {
        $rest = ($this->sum - $this->money1);

        if ($rest == 0) {
            print 'Brak reszty' . PHP_EOL;
            print 'Do widzenia :) ' . PHP_EOL;
        } elseif ($rest > 0) {
            print 'Reszta: ' . $rest . 'zl' . PHP_EOL;
        } else {
            print'Zbyt mała kwota na ten produkt' . PHP_EOL;
            print 'Wybierz jescze raz: ' . PHP_EOL . PHP_EOL;

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
                print $row['ID'] . " " . $row['Marka'] . " " . $row['Pojemność'] . " " . $row['Cena'] . "zł" . PHP_EOL;
                $this->money1 = $row['Cena'];
            }
        } catch (PDOException $a) {
            print 'Błąd połączenia2: ' . $a->getMessage() . PHP_EOL;
        }
        $this->connect = null;
    }
}
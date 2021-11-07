<?php

namespace src;

use PDO;
use PDOException;

class Polaczenie
{
    public $connect;
    /**
     * @var string
     */
    public string $sName = "localhost";
    /**
     * @var string
     */
    public string $uName = "root";
    /**
     * @var string
     */
    public string $password = "";
    /**
     * @var string
     */
    public string $db_nazwa = "automat";
    /**
     * @var string
     */
    public string $cat;

    public function __construct($category)
    {
        $this->cat = $category;
    }

    public function Connect()
    {
        try {
            $this->connect = new PDO("mysql:host=$this->sName; dbname=$this->db_nazwa", $this->uName, $this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pytanie = $this->connect->prepare("Select * From {$this->cat}");
            $pytanie->execute();

            while ($row = $pytanie->fetch()) {
                echo "\033[36m{$row['ID']} {$row['Marka']} {$row['Pojemność']} {$row['Cena']} zł\033[0m" . PHP_EOL;
            }
        } catch (PDOException $a) {
            echo "\033[31mBłąd połączenia1:\033[0m"  . $a->getMessage() . PHP_EOL;
        }
        $this->connect = null;
    }

}
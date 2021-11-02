<?php

class Zamowienie extends Menu
{
    public $money;
    public $sum;
    public $produkt;

    public function odczyt_Zamowienia()
    {
        print 'Wrzuć pieniądze:  '.PHP_EOL;
        $this->sum = readline();
        if(!is_numeric($this->sum))
        {
            exit(print 'ERROR! Wrzuć monete');
        }
        print 'Wybierz produkt wpisując numer: '.PHP_EOL;
        $this->produkt = readline();
        print 'Wybrałes: '.PHP_EOL;

        $menu = new Menu();
        var_dump($menu->category);


    }
    public function querry()
    {
        try {
            $this->connect = new PDO("mysql:host=$this->sName; dbname=$this->db_nazwa", $this->uName,$this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pytanie = $this->connect->prepare("Select * From napoje WHERE napoje.id =".$this->produkt);
            $pytanie->execute();

            while($row = $pytanie->fetch()){
                print $row['ID']." ".$row['Marka']." ".$row['Pojemność']." ".$row['cena']."zł".PHP_EOL;
                $this->money = $row['cena'];
            }
        }catch (PDOException $a)
        {
            print 'Błąd połączenia: '.$a->getMessage().PHP_EOL;
        }
        $this->connect = null;
    }
    public function calculations()
    {
        $rest = ($this->sum - $this->money);
        if($rest == 0)
        {
            Print 'Brak reszty'.PHP_EOL;
            print 'Do widzenia :) '.PHP_EOL;
        }
        elseif ($rest > 0 )
        {
            print 'Reszta: '.$rest.'zl'.PHP_EOL;
        }
        else{
            print'Zbyt mała kwota na ten produkt'.PHP_EOL;
            print 'Wybierz jescze raz: '.PHP_EOL.PHP_EOL;
            $napoje = new Napoje();
            $napoje->Connect();
            $this->odczyt_Zamowienia();
            $this->querry();
            $this->calculations();
        }


    }
}
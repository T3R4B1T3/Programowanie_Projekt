<?php

namespace src;

class Menu
{
    /**
     * @var int
     */
     private int $wybor;
     public $category;

    public function choosingMenu()
    {
        print 'Cześć, wybierz kategorie produktu: ' . PHP_EOL;
        print '1) Napoje' . PHP_EOL;
        print '2) Słodycze' . PHP_EOL;
        print '3) Przekąski' . PHP_EOL;
        print '4) Art_Medyczne' . PHP_EOL;

        $this->wybor = readline();
        if(!is_numeric($this->wybor))
        {
           exit('Wpisz liczbe od 1-4');
        }
        switch ($this->wybor) {

            case 1:
                print 'Wybrałeś napoje' . PHP_EOL.PHP_EOL;
                print'[Numer,Marka,Pojemność,Cena]' . PHP_EOL;
                $this->category = "napoje";
                $zamowienie = new Zamowienie($this->category);
                $con = new Polaczenie($this->category);
                break;
            case 2:
                print 'Wybrałeś Słodycze' . PHP_EOL.PHP_EOL;
                print'[Numer,Marka,Pojemność,Cena]' . PHP_EOL;
                $this->category = "slodycze";
                $zamowienie = new Zamowienie($this->category);
                $con = new Polaczenie($this->category);
                break;
            case 3:
                print 'Wybrałeś Przekąski' . PHP_EOL.PHP_EOL;
                print'[Numer,Marka,Pojemność,Cena]' . PHP_EOL;
                $this->category = "przekaski";
                $zamowienie = new Zamowienie($this->category);
                $con = new Polaczenie($this->category);
                break;
            case 4:
                print 'Wybrałeś Art_Medyczne' . PHP_EOL.PHP_EOL;
                print'[Numer,Marka,Pojemność,Cena]' . PHP_EOL;
                $this->category = "art_medyczne";
                $zamowienie = new Zamowienie($this->category);
                $con = new Polaczenie($this->category);
                break;
            default: print 'Wpisałeś zły numer spróbuj jescze raz :)'.PHP_EOL;
                exit($this->choosingMenu());
        }
        $con->Connect();
        $zamowienie->odczyt_Zamowienia();
        $zamowienie->querry();
        $zamowienie->calculations();
    }


}
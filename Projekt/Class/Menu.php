<?php

class Menu extends Kategoria
{
    /**
     * @var int
     */
     private int $wybor;
     public $category='';

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
                $napoje = new Napoje();
                $napoje->connect();
                $zamowienie = new Zamowienie();
                $zamowienie->odczyt_Zamowienia();
                $zamowienie->querry();
                $zamowienie->calculations();
                $this->category = "napoje";
                break;
            case 2:
                print 'Wybrałeś Słodycze' . PHP_EOL.PHP_EOL;
                print'[Numer,Marka,Pojemność,Cena]' . PHP_EOL;
                $slodycze = new Słodycze();
                $slodycze->Connect();
                $zamowienie = new ZamowienieS();
                $zamowienie->odczyt_Zamowienia();
                $zamowienie->querry();
                $zamowienie->calculations();
                $this->category = 'slodycze';
                break;
            case 3:
                print 'Wybrałeś Przekąski' . PHP_EOL.PHP_EOL;
                print'[Numer,Marka,Pojemność,Cena]' . PHP_EOL;
                $przekaski = new Przekąski();
                $przekaski->Connect();
                $zamowienie = new ZamowienieP();
                $zamowienie->odczyt_Zamowienia();
                $zamowienie->querry();
                $zamowienie->calculations();
                $this->category = 'przekaski';
                break;
            case 4:
                print 'Wybrałeś Art_Medyczne' . PHP_EOL.PHP_EOL;
                print'[Numer,Marka,Pojemność,Cena]' . PHP_EOL;
                $art = new Art_Medyczne();
                $art->Connect();
                $zamowienie = new ZamowienieA();
                $zamowienie->odczyt_Zamowienia();
                $zamowienie->querry();
                $zamowienie->calculations();
                $this->category = 'art_medyczne';
                break;
            default: print 'Wpisałeś zły numer spróbuj jescze raz :)'.PHP_EOL;
                exit($this->run());
        }
    }


}
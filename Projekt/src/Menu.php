<?php

namespace src;

class Menu
{
    /**
     * @var int
     */
    private $wybor;
    /**
     * @var string
     */
    public $category;

    public function choosingMenu()
    {
        echo  "\033[35mCześć, wybierz kategorie produktu: \033[0m" . PHP_EOL;
        print '1) Napoje' . PHP_EOL;
        print '2) Słodycze' . PHP_EOL;
        print '3) Przekąski' . PHP_EOL;
        print '4) Art_Medyczne' . PHP_EOL;

        $this->wybor = readline();
        if (!is_numeric($this->wybor)) {
            exit("\033[31mBłąd! Prosze wpisac liczbe od 1-4\033[0m");
        }
        switch ($this->wybor) {

            case 1:
                echo "\033[35mWybrałeś napoje\033[0m" . PHP_EOL;
                echo "\033[92m[Numer,Marka,Pojemność,Cena]\033[0m" . PHP_EOL;
                $this->category = "napoje";
                $zamowienie = new Zamowienie($this->category);
                $con = new Polaczenie($this->category);
                break;
            case 2:
                echo "\033[32mWybrałeś Słodycze\033[0m" . PHP_EOL;
                echo "\033[92m[Numer,Marka,Pojemność,Cena]\033[0m" . PHP_EOL;
                $this->category = "slodycze";
                $zamowienie = new Zamowienie($this->category);
                $con = new Polaczenie($this->category);
                break;
            case 3:
                echo "\033[32mWybrałeś Przekąski\033[0m" . PHP_EOL;
                echo "\033[92m[Numer,Marka,Pojemność,Cena]\033[0m" . PHP_EOL;
                $this->category = "przekaski";
                $zamowienie = new Zamowienie($this->category);
                $con = new Polaczenie($this->category);
                break;
            case 4:
                echo "\033[32mWybrałeś Art_Medyczne\033[0m" . PHP_EOL;
                echo "\033[92m[Numer,Marka,Pojemność,Cena]\033[0m" . PHP_EOL;
                $this->category = "art_medyczne";
                $zamowienie = new Zamowienie($this->category);
                $con = new Polaczenie($this->category);
                break;
            default:
                echo "\033[31mWpisałeś zły numer spróbuj jescze raz (1-4) :)\033[0m" . PHP_EOL;
                exit($this->choosingMenu());
        }
        $con->Connect();
        $zamowienie->odczyt_Zamowienia();
        $zamowienie->querry();
        $zamowienie->calculations();
    }


}
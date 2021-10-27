<?php

class Art_Medyczne extends Kategoria
{
    public function Connect()
    {

        try {
            $this->connect = new PDO("mysql:host=$this->sName; dbname=$this->db_nazwa", $this->uName,$this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pytanie = $this->connect->prepare("Select * From art_medyczne");
            $pytanie->execute();

            while($row = $pytanie->fetch()){
                print $row['ID']." ".$row['Nazwa']." ".$row['Pojemność']." ".$row['Cena']."zł".PHP_EOL;
            }
        }catch (PDOException $a)
        {
            print 'Błąd połączenia: '.$a->getMessage().PHP_EOL;
        }
        $this->connect = null;
    }

}
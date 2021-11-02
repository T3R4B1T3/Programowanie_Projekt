<?php
require_once 'Class/Kategoria.php';
require_once 'Class/Menu.php';
require_once 'Class/Napoje.php';
require_once 'Class/Słodycze.php';
require_once 'Class/Przekąski.php';
require_once 'Class/Art_Medyczne.php';
require_once 'Class/Zamowienie.php';
require_once 'Class/ZamowienieA.php';
require_once 'Class/ZamowienieS.php';
require_once 'Class/ZamowienieP.php';


$run = new Kategoria();
$run->run();
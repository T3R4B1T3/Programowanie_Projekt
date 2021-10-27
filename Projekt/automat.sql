-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Paź 2021, 07:48
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `automat`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `art_medyczne`
--

CREATE TABLE `art_medyczne` (
  `ID` int(11) NOT NULL,
  `Nazwa` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL,
  `Pojemność` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL,
  `Cena` float(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `art_medyczne`
--

INSERT INTO `art_medyczne` (`ID`, `Nazwa`, `Pojemność`, `Cena`) VALUES
(1, 'Maseczki jednorazowe', '10szt', 10.00),
(2, 'Maseczka jednorazowa', '1szt', 1.00),
(3, 'Płyn dezynfekujący', '200ml', 4.00),
(4, 'Płyn dezynfekujący', '500ml', 8.00);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `napoje`
--

CREATE TABLE `napoje` (
  `ID` int(11) NOT NULL,
  `Marka` varchar(15) COLLATE utf8_polish_ci DEFAULT NULL,
  `Smak` varchar(15) COLLATE utf8_polish_ci DEFAULT NULL,
  `Pojemność` varchar(5) COLLATE utf8_polish_ci DEFAULT NULL,
  `cena` float(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `napoje`
--

INSERT INTO `napoje` (`ID`, `Marka`, `Smak`, `Pojemność`, `cena`) VALUES
(1, 'Coca-Cola', 'Orginal', '330ml', 2.20),
(2, 'Coca-Cola', 'Orginal', '500ml', 3.20),
(3, 'Coca-Cola', 'Orginal', '1l', 5.00),
(4, 'Coca-Cola', 'Zero', '330ml', 2.20),
(5, 'Coca-Cola', 'Zero', '500ml', 3.50),
(6, 'Coca-Cola', 'Zero', '1l', 5.00),
(7, 'Coca-Cola', 'Cherry', '330ml', 2.20),
(8, 'Coca-Cola', 'Cherry', '500ml', 3.50),
(9, 'Coca-Cola', 'Cherry', '1l', 5.00),
(10, 'Coca-Cola', 'Lime', '330ml', 2.30),
(11, 'Coca-Cola', 'Lime', '500ml', 3.30),
(12, 'Coca-Cola', 'Lime', '1l', 5.00),
(13, 'Pepsi', 'Pepsi', '330ml', 2.10),
(14, 'Pepsi', 'Pepsi', '500ml', 3.10),
(15, 'Pepsi', 'Pepsi', '1l', 4.00),
(16, 'Pepsi', 'Max', '330ml', 2.10),
(17, 'Pepsi', ' Max', '500ml', 3.10),
(18, 'Pepsi', 'Max', '1l', 4.00),
(19, 'Pepsi', 'Lime', '330ml', 2.10),
(20, 'Pepsi', 'Lime', '500ml', 3.00),
(21, 'Pepsi', 'Lime', '1l', 4.00),
(22, 'Pepsi', 'Wild Cherry', '330ml', 2.30),
(23, 'Pepsi', 'Wild Cherry', '500ml', 3.30),
(24, 'Pepsi', 'Wild Cherry', '1l', 4.00),
(25, 'Lipton', 'Lemon', '330ml', 2.50),
(26, 'Lipton', 'Lemon', '500ml', 2.45),
(27, 'Lipton', 'Lemon', '1l', 5.00),
(28, 'Lipton', 'Peach', '330m', 2.00),
(29, 'Lipton', 'Peach', '500m', 4.00),
(30, 'Lipton', 'Peach', '1l', 5.00),
(31, 'Lipton', 'Green', '330m', 2.25),
(32, 'Kropla Beskidu', 'Niegaz', '500m', 2.55),
(33, 'Kropla Beskidu', 'Gaz', '500m', 2.60),
(34, 'Cisowianka', 'Niegaz', '500m', 2.55),
(35, 'Cisowianka', 'Gaz', '500m', 2.75);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przekaski`
--

CREATE TABLE `przekaski` (
  `ID` int(11) NOT NULL,
  `Marka` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL,
  `Smak` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL,
  `Pojemność` varchar(5) COLLATE utf8_polish_ci DEFAULT NULL,
  `Cena` float(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `przekaski`
--

INSERT INTO `przekaski` (`ID`, `Marka`, `Smak`, `Pojemność`, `Cena`) VALUES
(1, 'Lay\'s', 'Green Onion', '40g', 2.20),
(2, 'Lay\'s', 'Green Onion', '150g', 4.00),
(3, 'Lay\'s', 'Paprika', '40g', 2.20),
(4, 'Lay\'s', 'Paprika', '150g', 4.00),
(5, 'Lay\'s', 'Salted', '40g', 2.20),
(6, 'Lay\'s', 'Salted', '150g', 4.00),
(7, 'Lay\'s', 'Fromage', '40g', 2.50),
(8, 'Lay\'s', 'Fromage', '150g', 4.00),
(9, 'Lay\'s', 'Spicy Paprika', '40g', 2.50),
(10, 'Lay\'s', 'Spicy Paprika', '150g', 4.00),
(11, 'Crunchips', 'Papryka', '140g', 5.00),
(12, 'Crunchips', 'Zielona Cebulka', '140g', 5.00),
(13, 'Crunchips', 'Fromage', '140g', 5.00),
(14, 'Crunchips', 'Pieczone Żeberka', '140g', 5.00),
(15, 'Crunchips', 'Sticks Ketchup', '100g', 3.50),
(16, 'Crunchips', 'Sticks Papryka', '100g', 3.50),
(17, 'Zupka Amino', 'Pomidorowa', '60g', 1.99),
(18, 'Zupka Amino', 'Barszcz Czerwony', '60g', 1.99),
(19, 'Zupka Amino', 'Rosół', '60g', 1.99),
(20, 'Zupka Amino', 'Rosół Pikantny', '60g', 1.99),
(21, 'Zupka Amino', 'Ogórkowa', '60g', 1.99),
(22, 'Zupka Amino', 'Gulaszowa', '60g', 1.99),
(23, 'Zupka Knor', 'Pomidorowa Łagodna', '60g', 2.20),
(24, 'Zupka Knor', 'Pomidorowa Ostra', '60g', 2.20),
(25, 'Zupka Knor', 'Serowa', '60g', 2.20),
(26, 'Zupka Knor', 'Rosół', '60g', 2.20),
(27, 'Zupka Knor', 'Gulaszowa', '60g', 2.20),
(28, 'Zupka Knor', 'Curry', '60g', 2.20),
(29, 'Zupka Knor', 'Rosół Pikantny', '60g', 2.20),
(30, 'Zupka Vifon', 'Złoty Kurczak', '60g', 0.99),
(31, 'Zupka Vifon', 'Pikantny Pomiodr', '60g', 0.99),
(32, 'Zupka Vifon', 'Kurczak Curry', '60g', 0.99),
(33, 'Zupka Vifon', 'Pikantna Krewetka', '60g', 0.99),
(34, 'Zupka Vifon', 'Kurczak Pieczony', '60g', 0.99),
(35, 'Zupka Vifon', 'Pięć Smaków', '60g', 0.99);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `slodycze`
--

CREATE TABLE `slodycze` (
  `ID` int(11) NOT NULL,
  `Marka` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL,
  `Smak` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL,
  `Pojemność` varchar(5) COLLATE utf8_polish_ci DEFAULT NULL,
  `Cena` float(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `slodycze`
--

INSERT INTO `slodycze` (`ID`, `Marka`, `Smak`, `Pojemność`, `Cena`) VALUES
(1, 'Baton Prince Polo', 'Czekolada Mleczna', '60g', 2.20),
(2, 'Baton Prince Polo', 'Orzechowy', '60g', 2.20),
(3, 'Baton Prince Polo', 'Bez Czekolady', '60g', 2.20),
(4, 'Baton Prince Polo', 'Kokosowy', '60g', 2.20),
(5, 'Baton Prince Polo', 'Classic', '60g', 2.20),
(6, 'Baton 3Bit', 'Czekolada', '60g', 3.00),
(7, 'Baton 3Bit', 'Orzechowy', '60g', 3.00),
(8, 'Baton Kinder Bueno', 'Czekolada', '100g', 3.50),
(9, 'Baton Kinder Bueno', 'Kokosowa', '100g', 3.50),
(10, 'Baton Kinder Bueno', 'Biała Czekolada', '100g', 3.50),
(11, 'Wafelek Góralki', 'Mleczne', '60g', 1.99),
(12, 'Wafelek Góralki', 'Orzechowy', '60g ', 1.99),
(13, 'Wafelek Góralki', 'Penut Butter', '60g', 1.99),
(14, 'Wafelek Góralki', 'Czekoladowy', '60g', 1.99),
(15, 'Wafelek Góralki', 'Extra Kakaowe', '60g', 1.99),
(16, 'Wafelek Góralki', 'Waniliowe', '60g', 1.99),
(17, 'Wafelek Góralki', 'Kokosowe', '60g', 1.99),
(18, 'Wafelek Góralki', 'Nugatowe', '60g', 1.99),
(19, 'Czekolada Milka', 'Mleczna', '120g', 3.20),
(20, 'Czekolada Milka', 'Gorzka', '120g', 3.50),
(21, 'Czekolada Milka', 'Orzechowa', '120g', 3.20),
(22, 'Czekolada Milka', 'Kokosowa', '120g', 3.20),
(23, 'Czekolada Milka', 'Malinowa', '120g', 3.20),
(24, 'Czekolada Milka', 'Truskawkowa', '120g', 3.20),
(25, 'Czekolada Milka', 'Biała Czekolada', '120g', 3.20),
(26, 'Czekolada Milka', 'Happy Cow', '120g', 3.20),
(27, 'Czekolada Milka', 'Karmelowa', '120g', 3.20),
(28, 'Czekolada Wedel', 'Mleczna', '150g', 4.00),
(29, 'Czekolada Wedel', 'Gorzka', '150g', 4.00),
(30, 'Czekolada Wedel', 'Karmelowa', '150g', 4.00);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `art_medyczne`
--
ALTER TABLE `art_medyczne`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `napoje`
--
ALTER TABLE `napoje`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `przekaski`
--
ALTER TABLE `przekaski`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `slodycze`
--
ALTER TABLE `slodycze`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `art_medyczne`
--
ALTER TABLE `art_medyczne`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `napoje`
--
ALTER TABLE `napoje`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT dla tabeli `przekaski`
--
ALTER TABLE `przekaski`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT dla tabeli `slodycze`
--
ALTER TABLE `slodycze`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

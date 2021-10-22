-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Lug 23, 2021 alle 17:37
-- Versione del server: 10.4.19-MariaDB
-- Versione PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `eventplannertest`
--
CREATE DATABASE IF NOT EXISTS `eventplannertest` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `eventplannertest`;

-- --------------------------------------------------------

--
-- Struttura della tabella `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
                             `id` int(10) UNSIGNED NOT NULL,
                             `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(5, 'Concert'),
(6, 'Sport'),
(7, 'Conference'),
(8, 'Festival'),
(9, 'Food & Drink'),
(10, 'Business');

-- --------------------------------------------------------

--
-- Struttura della tabella `email_ricevute`
--

DROP TABLE IF EXISTS `email_ricevute`;
CREATE TABLE `email_ricevute` (
                                  `id` int(10) NOT NULL,
                                  `nome` varchar(50) NOT NULL,
                                  `email` varchar(50) NOT NULL,
                                  `messaggio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `email_ricevute`
--

INSERT INTO `email_ricevute` (`id`, `nome`, `email`, `messaggio`) VALUES
(3, 'Alessandro Pio', 'ale.pio@libero.it', 'Bel sito');

-- --------------------------------------------------------

--
-- Struttura della tabella `evento`
--

DROP TABLE IF EXISTS `evento`;
CREATE TABLE `evento` (
                          `id` int(10) UNSIGNED NOT NULL,
                          `codice` varchar(50) DEFAULT NULL,
                          `nome` varchar(50) DEFAULT NULL,
                          `descrizione` text NOT NULL,
                          `costo` float NOT NULL,
                          `costo_vip` float DEFAULT NULL,
                          `stato` varchar(50) NOT NULL,
                          `luogo` text NOT NULL,
                          `via` varchar(50) NOT NULL,
                          `data_inizio` date NOT NULL,
                          `data_fine` date NOT NULL,
                          `orario` time NOT NULL,
                          `numero_biglietti` int(10) NOT NULL,
                          `numero_biglietti_vip` int(10) DEFAULT NULL,
                          `id_categoria` int(10) UNSIGNED DEFAULT NULL,
                          `id_tipologia` int(10) UNSIGNED DEFAULT NULL,
                          `id_sconto` int(10) DEFAULT NULL,
                          `giorno1` date NOT NULL,
                          `giorno2` date DEFAULT NULL,
                          `giorno3` date DEFAULT NULL,
                          `giorno4` date DEFAULT NULL,
                          `giorno5` date DEFAULT NULL,
                          `giorno6` date DEFAULT NULL,
                          `giorno7` date DEFAULT NULL,
                          `giorno8` date DEFAULT NULL,
                          `giorno9` date DEFAULT NULL,
                          `giorno10` date DEFAULT NULL,
                          `giorno11` date DEFAULT NULL,
                          `giorno12` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `evento`
--

INSERT INTO `evento` (`id`, `codice`, `nome`, `descrizione`, `costo`, `costo_vip`, `stato`, `luogo`, `via`, `data_inizio`, `data_fine`, `orario`, `numero_biglietti`, `numero_biglietti_vip`, `id_categoria`, `id_tipologia`, `id_sconto`, `giorno1`, `giorno2`, `giorno3`, `giorno4`, `giorno5`, `giorno6`, `giorno7`, `giorno8`, `giorno9`, `giorno10`, `giorno11`, `giorno12`) VALUES
(14, 'HKLYERBT', 'Cibo italiano', 'In questo festival assaggerai le più buone delizie del cibo italiano\r\n', 20, 30, 'Italia', 'Roma', 'Via spezia 33', '2021-08-22', '2021-08-22', '20:00:00', 55, 30, 9, 3, 3, '2021-08-22', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(15, 'BS45DHL', 'Concerto San Lorenzo', 'Nella notte di san Lorenzo ci sarà un evento più unico che raro, con i grandi cantati italiani', 50, 60, 'Italia', 'Milano', 'via san severo', '2021-08-10', '2021-08-20', '21:00:00', 100, 30, 5, 3, NULL, '2021-08-10', '2021-08-12', '2021-08-16', '2021-08-20', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(16, 'L67HEQT1', 'Musica Classica', 'Con i più grandi violinisti di tutta Italia!', 40, 0, 'Italia', 'Roma', 'via Garibaldi 20', '2021-08-15', '2021-08-30', '20:00:00', 70, 0, 5, 3, 4, '2021-09-15', '2021-09-17', '2021-08-19', '2021-09-21', '2021-08-26', '2021-08-30', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(17, '1GHKUET2', 'Conferenza tecnologie', 'In questa conferenza vi mostreremo le nuove invenzioni di questo 2021', 30, 0, 'Italia', 'Napoli', 'via antica', '2021-12-17', '2021-12-20', '17:00:00', 40, 0, 7, 3, NULL, '2021-12-17', '2021-12-19', '2021-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'HETQ76B', 'Cibo tropicale', 'In questo pranzo troverai cibo tropicale', 20, 0, 'Italia', 'Spezia', 'Via maldova10', '2021-11-19', '2021-11-19', '20:30:00', 55, 0, 9, 3, NULL, '2021-11-19', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(20, 'AMU6G4D', 'Gara nuoto', 'Gara di nuoto tra i nuotatori', 10, 0, 'Italia', 'Milano', 'via Montona', '2021-08-01', '2021-08-01', '16:30:00', 30, 0, 6, 3, NULL, '2021-08-01', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(21, 'LOLMA65G', 'The Etiquette', 'Evento di business', 10, 0, 'Italia', 'Padova', 'via Ramen', '2021-10-22', '2021-10-22', '10:00:00', 50, 0, 10, 3, 3, '2021-10-22', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(22, 'LMAGT54', 'Festival del vino', 'Festival del vino', 30, 40, 'Italia', 'Milano', 'Via loricosa 33', '2021-08-20', '2021-08-25', '20:00:00', 50, 60, 8, 3, 4, '2021-08-20', '2021-08-22', '2021-08-24', '2021-08-25', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struttura della tabella `evento_wishlist`
--

DROP TABLE IF EXISTS `evento_wishlist`;
CREATE TABLE `evento_wishlist` (
                                   `id_evento` int(10) UNSIGNED NOT NULL,
                                   `id_wishlist` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `evento_wishlist`
--

INSERT INTO `evento_wishlist` (`id_evento`, `id_wishlist`) VALUES
(9, 2),
(12, 1),
(14, 1),
(15, 1),
(16, 1),
(16, 6),
(17, 1),
(18, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `gruppo`
--

DROP TABLE IF EXISTS `gruppo`;
CREATE TABLE `gruppo` (
                          `id` int(10) UNSIGNED NOT NULL,
                          `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `gruppo`
--

INSERT INTO `gruppo` (`id`, `nome`) VALUES
(1, 'Proprietario'),
(2, 'Cliente'),
(3, 'Amministratore');

-- --------------------------------------------------------

--
-- Struttura della tabella `immagine`
--

DROP TABLE IF EXISTS `immagine`;
CREATE TABLE `immagine` (
                            `id` int(10) NOT NULL,
                            `nome` varchar(50) NOT NULL,
                            `tipo` varchar(50) NOT NULL,
                            `id_evento` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `immagine`
--

INSERT INTO `immagine` (`id`, `nome`, `tipo`, `id_evento`) VALUES
(26, 'evento1.jpg', 'principale', 14),
(27, 'evento2.jpg', 'principale', 15),
(29, 'ev3.jpg', 'principale', 15),
(30, 'ev3.jpg', 'principale', 16),
(31, 'ev4.jpg', 'principale', 17),
(32, 'ev5.jpg', 'principale', 18),
(33, '1.jpg', 'galleria1', 14),
(34, '2.jpg', 'galleria2', 14),
(35, '3.jpg', 'galleria3', 14),
(36, '4.jpg', 'galleria4', 14),
(37, 'C840C650-2002-42A0-B66F-431A79CE4A08_1_201_a.jpeg', 'principale', 18),
(56, 'ev6.jpg', 'principale', 20),
(57, 'ev7.jpg', 'principale', 21),
(58, 'ev8.jpg', 'principale', 22);

-- --------------------------------------------------------

--
-- Struttura della tabella `messaggi`
--

DROP TABLE IF EXISTS `messaggi`;
CREATE TABLE `messaggi` (
                            `msg_id` int(11) NOT NULL,
                            `incoming_msg_id` int(255) NOT NULL,
                            `outgoing_msg_id` int(255) NOT NULL,
                            `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `messaggi`
--

INSERT INTO `messaggi` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 8, 2, 'ciao'),
(2, 1, 2, 'hey'),
(3, 2, 1, 'oi'),
(4, 2, 1, 'come va?'),
(5, 8, 1, 'Ci sei andrai all\'evento del cibo tropicale?'),
(6, 1, 2, 'male');

-- --------------------------------------------------------

--
-- Struttura della tabella `ordine`
--

DROP TABLE IF EXISTS `ordine`;
CREATE TABLE `ordine` (
                          `id` int(10) NOT NULL,
                          `id_utente` int(10) UNSIGNED DEFAULT NULL,
                          `id_evento` int(10) UNSIGNED DEFAULT NULL,
                          `codice_ticket` varchar(50) NOT NULL,
                          `codice_evento` varchar(50) NOT NULL,
                          `nome_evento` varchar(50) NOT NULL,
                          `data` date NOT NULL,
                          `orario` time NOT NULL,
                          `biglietti` int(10) NOT NULL,
                          `biglietti_vip` int(10) NOT NULL,
                          `costo` float NOT NULL,
                          `via` varchar(100) NOT NULL,
                          `nome` varchar(50) NOT NULL,
                          `email` varchar(100) NOT NULL,
                          `cap` bigint(20) NOT NULL,
                          `stato` varchar(50) NOT NULL,
                          `città` varchar(50) NOT NULL,
                          `spedizione` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `ordine`
--

INSERT INTO `ordine` (`id`, `id_utente`, `id_evento`, `codice_ticket`, `codice_evento`, `nome_evento`, `data`, `orario`, `biglietti`, `biglietti_vip`, `costo`, `via`, `nome`, `email`, `cap`, `stato`, `città`, `spedizione`) VALUES
(16, 1, 15, 'VP08XAXX', 'BS45DHL', 'Concerto San Lorenzo', '2021-08-20', '21:00:00', 2, 1, 170, 'Antica Arischia 32', 'Lorenzo Tucceri Cimini', 'lorenzo.tuccericimini@live.it', 67100, 'L&ap;Aquila', 'L&ap;Aquila', 'si'),
(20, 2, 17, '6XCIFAZT', '1GHKUET2', 'Conferenza tecnologie', '2021-12-20', '17:00:00', 1, 0, 40, 'Via Spezia', 'Alessandro Pio', 'ales@lib.it', 67100, 'Italia', 'Roma', 'si'),
(22, 6, 16, 'AVDKZ5KJ', 'L67HEQT1', 'Musica Classica', '2021-09-15', '20:00:00', 1, 0, 29, 'Via Roma', 'Lorenzo Negro', 'lore.negr@lib.it', 67999, 'Italia', 'Roma', 'no'),
(24, 2, 15, 'HIPFSAH6', 'BS45DHL', 'Concerto San Lorenzo', '2021-08-20', '21:00:00', 3, 0, 160, 'Antica Arischia 32', 'Alessandro Pio', 'ale@pio.libero.it', 67100, 'Italia', 'L&ap;Aquila', 'si'),
(26, 1, 20, 'QCPBNCMP', 'AMU6G4D', 'Gara nuoto', '2021-08-01', '16:30:00', 1, 0, 15, 'Antica Arischia 32', 'Lorenzo Tucceri Cimini', 'lorenzo.tuccericimini@live.it', 67100, 'Italia', 'L&ap;Aquila', 'no');

-- --------------------------------------------------------

--
-- Struttura della tabella `recensione`
--

DROP TABLE IF EXISTS `recensione`;
CREATE TABLE `recensione` (
                              `id` int(10) NOT NULL,
                              `rating` int(10) NOT NULL,
                              `descrizione` text NOT NULL,
                              `id_evento` int(10) UNSIGNED DEFAULT NULL,
                              `id_utente` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `recensione`
--

INSERT INTO `recensione` (`id`, `rating`, `descrizione`, `id_evento`, `id_utente`) VALUES
(11, 4, 'Buonissimo', 14, 2),
(12, 5, 'Veramente buono', 14, 2),
(13, 3, 'Divertente', 20, 1),
(14, 5, 'Molto Buono!', 22, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `sconto`
--

DROP TABLE IF EXISTS `sconto`;
CREATE TABLE `sconto` (
                          `id` int(10) NOT NULL,
                          `codice_sconto` varchar(100) NOT NULL,
                          `percentuale_sconto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `sconto`
--

INSERT INTO `sconto` (`id`, `codice_sconto`, `percentuale_sconto`) VALUES
(3, 'sconto del 20%', 20),
(4, 'sconto del 40%', 40);

-- --------------------------------------------------------

--
-- Struttura della tabella `tipologia`
--

DROP TABLE IF EXISTS `tipologia`;
CREATE TABLE `tipologia` (
                             `id` int(10) UNSIGNED NOT NULL,
                             `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `tipologia`
--

INSERT INTO `tipologia` (`id`, `nome`) VALUES
(2, 'Online'),
(3, 'Fisico');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

DROP TABLE IF EXISTS `utente`;
CREATE TABLE `utente` (
                          `id` int(10) UNSIGNED NOT NULL,
                          `username` varchar(50) NOT NULL,
                          `nome` varchar(50) NOT NULL,
                          `cognome` varchar(50) NOT NULL,
                          `email` varchar(50) DEFAULT NULL,
                          `telefono` bigint(20) NOT NULL,
                          `indirizzo` text NOT NULL,
                          `password` varchar(50) DEFAULT NULL,
                          `id_gruppo` int(10) UNSIGNED DEFAULT NULL,
                          `id_wishlist` int(10) UNSIGNED DEFAULT NULL,
                          `status` varchar(50) DEFAULT NULL,
                          `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`id`, `username`, `nome`, `cognome`, `email`, `telefono`, `indirizzo`, `password`, `id_gruppo`, `id_wishlist`, `status`, `foto`) VALUES
(1, 'loretuc', 'Lorenzo', 'Tucceri', 'lore@lib.it', 3934589228, 'Roma via antica arischia', '123', 3, 1, 'Online Now', ''),
(2, 'alepio', 'Alessandro', 'Pio', 'ale.pio@libero.it', 3393921666, ' Via spezia', '12345', 2, 2, 'Offlline Now', ''),
(6, 'lorneg', 'Lorenzo', 'Negro', 'lore.negr@lib.it', 3935178277, ' Via Roma', '1234', 3, 6, 'Offlline Now', ''),
(8, 'FiliRemo', 'Filippo', 'Remotti', 'fili@lib.it', 3394455123, 'Via Milano', '123', 2, 8, '', ''),
(9, 'FrancoTinari', 'Franco', 'Tinari', 'Franco.tinari@libero.it', 3334576272, 'Via Montona', '123', 2, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE `wishlist` (
    `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `wishlist`
--

INSERT INTO `wishlist` (`id`) VALUES
(1),
(2),
(6),
(8),
(9);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `categoria`
--
ALTER TABLE `categoria`
    ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `email_ricevute`
--
ALTER TABLE `email_ricevute`
    ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `evento`
--
ALTER TABLE `evento`
    ADD PRIMARY KEY (`id`),
    ADD KEY `id_categoria` (`id_categoria`),
    ADD KEY `id_tipologia` (`id_tipologia`),
    ADD KEY `id_sconto` (`id_sconto`);

--
-- Indici per le tabelle `evento_wishlist`
--
ALTER TABLE `evento_wishlist`
    ADD PRIMARY KEY (`id_evento`,`id_wishlist`),
    ADD KEY `id_evento` (`id_evento`,`id_wishlist`);

--
-- Indici per le tabelle `gruppo`
--
ALTER TABLE `gruppo`
    ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `immagine`
--
ALTER TABLE `immagine`
    ADD PRIMARY KEY (`id`),
    ADD KEY `id_evento` (`id_evento`);

--
-- Indici per le tabelle `messaggi`
--
ALTER TABLE `messaggi`
    ADD PRIMARY KEY (`msg_id`);

--
-- Indici per le tabelle `ordine`
--
ALTER TABLE `ordine`
    ADD PRIMARY KEY (`id`),
    ADD KEY `id_utente` (`id_utente`),
    ADD KEY `id_evento` (`id_evento`);

--
-- Indici per le tabelle `recensione`
--
ALTER TABLE `recensione`
    ADD PRIMARY KEY (`id`),
    ADD KEY `evento` (`id_evento`),
    ADD KEY `id_utente` (`id_utente`);

--
-- Indici per le tabelle `sconto`
--
ALTER TABLE `sconto`
    ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `tipologia`
--
ALTER TABLE `tipologia`
    ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
    ADD PRIMARY KEY (`id`),
    ADD KEY `id_gruppo` (`id_gruppo`),
    ADD KEY `id_wishlist` (`id_wishlist`);

--
-- Indici per le tabelle `wishlist`
--
ALTER TABLE `wishlist`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `categoria`
--
ALTER TABLE `categoria`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT per la tabella `email_ricevute`
--
ALTER TABLE `email_ricevute`
    MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `evento`
--
ALTER TABLE `evento`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT per la tabella `gruppo`
--
ALTER TABLE `gruppo`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `immagine`
--
ALTER TABLE `immagine`
    MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT per la tabella `messaggi`
--
ALTER TABLE `messaggi`
    MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `ordine`
--
ALTER TABLE `ordine`
    MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT per la tabella `recensione`
--
ALTER TABLE `recensione`
    MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT per la tabella `sconto`
--
ALTER TABLE `sconto`
    MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `tipologia`
--
ALTER TABLE `tipologia`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT per la tabella `wishlist`
--
ALTER TABLE `wishlist`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `evento`
--
ALTER TABLE `evento`
    ADD CONSTRAINT `categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
    ADD CONSTRAINT `sconto` FOREIGN KEY (`id_sconto`) REFERENCES `sconto` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
    ADD CONSTRAINT `tipologia` FOREIGN KEY (`id_tipologia`) REFERENCES `tipologia` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Limiti per la tabella `immagine`
--
ALTER TABLE `immagine`
    ADD CONSTRAINT `evento` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `ordine`
--
ALTER TABLE `ordine`
    ADD CONSTRAINT `utente` FOREIGN KEY (`id_utente`) REFERENCES `utente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `utente`
--
ALTER TABLE `utente`
    ADD CONSTRAINT `relazione gruppo a utente` FOREIGN KEY (`id_gruppo`) REFERENCES `gruppo` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
    ADD CONSTRAINT `wishlist` FOREIGN KEY (`id_wishlist`) REFERENCES `wishlist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

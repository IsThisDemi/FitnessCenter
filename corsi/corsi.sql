--
-- Struttura della tabella `categorie`
--

CREATE TABLE `categorie` (
  `nome_categoria` varchar(256) NOT NULL,
  `descrizione` text NOT NULL,
  `immagine` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`nome_categoria`);
COMMIT;

-----------------------------------------------
--
-- Struttura della tabella `corsi`
--

CREATE TABLE `corsi` (
  `nome_corso` varchar(256) NOT NULL,
  `nome_cat` varchar(256) NOT NULL,
  `descrizione` text NOT NULL,
  `immagine` text NOT NULL,
  `forza` tinyint(1) NOT NULL DEFAULT 0,
  `equilibrio` tinyint(1) NOT NULL DEFAULT 0,
  `resistenza` tinyint(1) NOT NULL DEFAULT 0,
  `stabilità` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `corsi`
--
ALTER TABLE `corsi`
  ADD PRIMARY KEY (`nome_corso`);
COMMIT;

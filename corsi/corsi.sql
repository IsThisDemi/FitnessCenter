--
-- Struttura della tabella `categorie`
--

CREATE TABLE `categorie` (
  `id_categoria` int(5) NOT NULL,
  `nome_cat` varchar(256) NOT NULL,
  `descrizione` text NOT NULL,
  `immagine` text NOT NULL,
  `alt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `categorie`
--

INSERT INTO `categorie` (`id_categoria`, `nome_cat`, `descrizione`, `immagine`, `alt`) VALUES
(1, 'Balance', 'Stai cercando un programma di allenamento dove equilibrio, flessibilità e mobilità sono le parole chiave? Scegli tra i corsi Balance quello più adatto a te.', 'balance-main.jpg', 'equilibrio'),
(2, 'Cycle', 'FitnessCenter ha studiato un innovativo programma fitness & cycling che unisce esercizi ad alta intensità a musica e ritmo incalzante. Scegli tra i corsi Cycle quello più adatto a te.', 'cycle-main.jpg', 'ciclismo'),
(3, 'Dance', 'Per coniugare divertimento, musica e forma fisica e rilassarti scaricando le tensioni giornaliere. Scegli tra i corsi Dance quello più adatto a te.', 'dance-main.jpg', 'danza'),
(4, 'Functional', 'Programmi di allenamento studiati per rendere il tuo corpo più forte, agile, scattante e coordinato. Scegli tra i corsi Functional quello più adatto a te.', 'functional-main.jpg', 'funzionale'),
(5, 'Running', 'Corri libero all’aria aperta durante le nostre classi stagionali in alcune delle città più belle d’Italia.', 'running-main.jpg', 'corsa'),
(6, 'Strenght', 'Scolpisci il tuo corpo donandogli tonicità e flessibilità con dei programmi di allenamento specifici per ogni esigenza. Scegli tra i corsi Strength quello più adatto a te.', 'strength-main.jpg', 'forza'),
(7, 'Water', 'Metti il turbo alla tua voglia di movimento, caricati e sprigiona le energie in acqua. Scegli tra i corsi Water quello che fa per te, per un\'esperienza di allenamento completa.', 'water-main.jpg', 'acquatici'),
(8, 'Yoga', 'Sincronizza le tue posizioni al ritmo del tuo respiro e scegli la pratica della disciplina millenaria più adatta a te per vivere un\'esperienza irrinunciabile. Scegli tra i corsi Yoga quello più adatto a te.', 'yoga-main.jpg', 'yoga');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categoria`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categoria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

-----------------------------------------------
--
-- Struttura della tabella `corsi`
--

CREATE TABLE `corsi` (
  `nome_corso` varchar(256) NOT NULL,
  `id_categoria` varchar(256) NOT NULL,
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

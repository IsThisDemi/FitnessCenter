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

-- --------------------------------------------------------

--
-- Struttura della tabella `corsi`
--

CREATE TABLE `corsi` (
  `id_corso` int(5) NOT NULL,
  `nome_corso` varchar(256) NOT NULL,
  `id_categoria` int(5) NOT NULL,
  `descrizione` text NOT NULL,
  `immagine` text NOT NULL,
  `alt` text NOT NULL,
  `forza` tinyint(1) NOT NULL DEFAULT 0,
  `equilibrio` tinyint(1) NOT NULL DEFAULT 0,
  `resistenza` tinyint(1) NOT NULL DEFAULT 0,
  `stabilità` tinyint(1) NOT NULL DEFAULT 0,
  `intensita` int(1) NOT NULL,
  `durata` varchar(15) NOT NULL,
  `calorie` varchar(15) NOT NULL,
  `asciugamano` tinyint(1) NOT NULL DEFAULT 0,
  `borraccia` tinyint(1) NOT NULL DEFAULT 0,
  `calzini` tinyint(1) NOT NULL DEFAULT 0,
  `tappetino` tinyint(1) NOT NULL DEFAULT 0,
  `scarpe_sportive` tinyint(1) NOT NULL DEFAULT 0,
  `guantoni` tinyint(1) DEFAULT 0,
  `capelli_raccolti` tinyint(1) NOT NULL DEFAULT 0,
  `abbigliamento_outdoor` tinyint(1) NOT NULL DEFAULT 0,
  `scarpe_outdoor` tinyint(1) NOT NULL DEFAULT 0,
  `accappatoio` tinyint(1) NOT NULL DEFAULT 0,
  `cuffia` tinyint(1) NOT NULL DEFAULT 0,
  `costume` tinyint(1) NOT NULL DEFAULT 0,
  `ciabatte` tinyint(1) NOT NULL DEFAULT 0,
  `piedi_nudi` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `corsi`
--

INSERT INTO `corsi` (`id_corso`, `nome_corso`, `id_categoria`, `descrizione`, `immagine`, `alt`, `forza`, `equilibrio`, `resistenza`, `stabilità`, `intensita`, `durata`, `calorie`, `asciugamano`, `borraccia`, `calzini`, `tappetino`, `scarpe_sportive`, `guantoni`, `capelli_raccolti`, `abbigliamento_outdoor`, `scarpe_outdoor`, `accappatoio`, `cuffia`, `costume`, `ciabatte`, `piedi_nudi`) VALUES
(1, 'Flexability', 1, 'Migliora flessibilità, elasticità e mobilità con esercizi di stretching statico e dinamico, yoga, Pilates e movimenti di mobilità articolare, per migliorare postura e respirazione.', 'flexability-main.jpg', 'esercizi di flessibilità', 1, 0, 0, 1, 2, '30 - 45', '150 / 200', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Pancafit', 1, 'Riequilibra e riallinea la tua postura in modo semplice e naturale. La panca è l’attrezzo principale per eseguire una serie di esercizi di forza e condizionamento.', 'panca-fit-main.jpg', 'esercizi alla panca', 0, 1, 0, 1, 1, '45', '150 / 200', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Postural', 1, 'Allunga e rafforza i muscoli legati alla respirazione e preparati a dire addio al mal di schiena con la ginnastica posturale. Migliora la meccanica del movimento e la stabilità.', 'postural-main.jpg', 'posturale', 0, 1, 0, 1, 1, '45 - 60', '150 / 200', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Cycle Body', 2, 'Allenamento che prevede l\'alternanza di esercizi funzionali a terra a intervalli di lavoro sulla bike, migliora la capacità aerobica e il tono muscolare per un corpo sempre in forma.', 'cycle-body-main.jpg', 'ciclismo per il corpo', 1, 0, 1, 0, 3, '60', '300 / 450', 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Cycle Race', 2, 'Sfida i tuoi limiti e cerca la migliore performance. Lasciati travolgere da un allenamento dal ritmo adrenalinico e da nuove tecniche da sperimentare sulla tua bike.', 'cycle-race-main.jpg', 'ciclismo corsa', 1, 0, 1, 0, 3, '50 - 90', '300 / 450', 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Cycle Spirit', 2, 'Divertiti e lasciati travolgere dalla musica e dal nuovo allenamento cycle, con l’utilizzo alternato di piccoli tools per sviluppare forza e coordinazione.', 'cycle-spirit-main.jpg', 'ciclismo musica e strumenti', 0, 1, 1, 0, 3, '45 - 60', '300 / 450', 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Aero Dance', 3, 'Migliora il sistema cardiovascolare con un mix di esercizi ispirati alla tradizionale ginnastica aerobica integrata alla danza coreografica.', 'aero-dance-main.jpg', 'danza aerobica', 0, 1, 1, 0, 2, '30 - 60', '200 / 300', 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'Step', 3, 'Lavora sulla resistenza cardiovascolare e sulla coordinazione. In gruppo e a ritmo di musica con un mix di movimenti aerobici e sequenze coreografiche.', 'step-main.jpg', 'musica aerobica coreografica', 1, 0, 1, 0, 3, '45 - 60', '200 / 300', 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'Zumba', 3, 'Togli la noia dal tuo allenamento e brucia più calorie possibili. Fatti travolgere dal dinamismo delle danze latine a ritmo di salsa, merengue, cumbia, reggaeton e samba.', 'zumba-main.jpg', 'danza latina', 0, 1, 1, 0, 2, '45 - 60', '200 / 300', 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'Boxe', 4, 'Scarica la tensione e tonifica tutto il corpo con un programma che utilizza le sequenze base della boxe al sacco tradizionale, ma senza contatto fisico.', 'boxe-main.jpg', 'pugilato', 1, 0, 1, 0, 3, '45 - 60', '200 / 300', 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'Calisthenics', 4, 'Inizia con movimenti dinamici, isometrici e di mobilità che aiutano a migliorare la forza muscolare, la flessibilità, la coordinazione e la resistenza cardiovascolare.', 'calisthenics-main.jpg', 'calistenici', 1, 1, 0, 1, 3, '45 - 60', '300 / 400', 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'Grid', 4, 'Migliora la tua forma fisica con un training aerobico che utilizza macchinari cardio ad alta intensità alternato all’allenamento funzionale, per resistenza e potenza.', 'grid-main.jpg', 'cardio e allenamento funzionale', 1, 1, 1, 1, 2, '45', '400 / 450', 1, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(13, 'Long Run', 5, 'Migliora le tue performance nella corsa con un programma disegnato su misura per chi ha già esperienza e gambe allenate, anche sulle lunghe distanze.', 'performance-long-run-main.jpg', 'corsa sulla distanza', 1, 0, 1, 0, 3, '45', '400 / 600', 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0),
(14, 'Speed Run', 5, 'Allena potenza, velocità e agilità con un programma di corsa dedicato a chi si sta preparando per una competizione o vuole migliorare i tempi e la resistenza.', 'running-speed-main.jpg', 'corsa di velocità', 1, 0, 1, 1, 2, '45', '300 / 500', 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0),
(15, 'Walking', 5, 'Tonifica la muscolatura e apprendi tutti i benefici psicofisici della camminata. Avvicinati passo dopo passo alla corsa o prova un\'attività cardiovascolare a basso impatto.', 'walking-main.jpg', 'camminata', 0, 1, 1, 1, 1, '45', '200 / 400', 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0),
(16, 'Barre', 6, 'Un allenamento che combina danza, Pilates e yoga regalandoti un corpo più tonico e armonioso.', 'barre-main.jpg', 'barre', 1, 1, 0, 0, 3, '45', '250 / 350', 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'Full Body', 6, 'Tonifica tutto il corpo con l’utilizzo di piccoli attrezzi per migliorare il sistema cardiovascolare. Un total body workout che saprà regalarti grandi emozioni.', 'full-body-main.jpg', 'allenamento corpo completo', 1, 0, 1, 0, 2, '45 - 60', '250 / 350', 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 'Sculpt', 6, 'Dona al tuo fisico un aspetto asciutto, ma forte e in forma. Lavora sulla tonificazione del corpo con una serie di esercizi e movimenti total body abbinati all\'utilizzo di attrezzi.', 'sculpt-main.jpg', 'scultura del corpo', 1, 0, 0, 1, 2, '45 - 60', '200 / 300', 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'Water Endurance', 7, 'Migliora la capacità aerobica con un total body workout intenso e a ritmo di musica. Un mix di discipline per la resistenza in acqua e il coordinamento aerobico.', 'water-endurance-main.jpg', 'resistenza in acqua', 1, 0, 0, 1, 2, '45', '200 / 300', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0),
(20, 'Water Hydrobike', 7, 'Esegui movimenti coordinati in acqua pedalando a ritmo di musica. Migliora la tua capacità aerobica e muscolare e tonifica il corpo con una divertente lezione in gruppo.', 'water-hydrobike-main.jpg', 'ciclismo in acqua', 1, 0, 1, 0, 2, '45 - 60', '200 / 300', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0),
(21, 'Water Reax Raft', 7, 'Ricerca il giusto equilibrio con un workout efficace e divertente che sfrutta l’instabilità del materassino appoggiato sull’acqua per amplificare l’intensità degli esercizi.', 'water-reax-rafting-main.jpg', 'equilibrio in acqua', 0, 1, 0, 1, 2, '45', '300 / 400', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0),
(22, 'Water Tone', 7, 'Coordina i tuoi movimenti in acqua e tonifica tutto il corpo con esercizi di difficoltà crescente che si concentrano su specifici gruppi muscolari.', 'water-tone-main.jpg', 'tonicità in acqua', 1, 0, 0, 1, 2, '45', '200 / 300', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0),
(23, 'Yoga Align', 8, 'Allinea il tuo spirito con sforzi semplici ed equilibrati. Rafforza il corpo e aumenta flessibilità, equilibrio, capacità di rilassarti e concentrarti.', 'yoga-align-main.jpg', 'yoga di allineamento', 0, 1, 0, 1, 3, '60 - 90', '200 / 300', 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(24, 'Yoga Calm', 8, 'Ristabilisci l’equilibrio con posture rilassanti che si concentrano su stretching, recupero e respiro. Allevia il dolore, stimola la tua energia vitale e aumenta la mobilità.', 'yoga-calm-main.jpg', 'yoga di rilassamento', 0, 1, 0, 1, 2, '60 - 90', '200 / 300', 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(25, 'Yoga Strength', 8, 'Muovi il corpo collegando il respiro a una serie di posture dal ritmo incalzante. L’allenamento stimola il sistema cardiovascolare e la coordinazione grazie a elementi di diversi stili di yoga.', 'yoga-strength-main.jpg', 'yoga forza', 0, 1, 1, 0, 3, '45 - 60', '200 /300', 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `corsi`
--
ALTER TABLE `corsi`
  ADD PRIMARY KEY (`id_corso`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `corsi`
--
ALTER TABLE `corsi`
  MODIFY `id_corso` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;


--
-- Struttura della tabella `costumer`
--

CREATE TABLE `costumer` (
    `nome` varchar(100) NOT NULL,
    `cognome` varchar(100) NOT NULL,
    `sesso` varchar(10) NOT NULL,
    `dataNascita` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `telefono` varchar(100) NOT NULL,
    `note` varchar(100)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

CREATE TABLE `user` (
    `username` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    `type` varchar(10) NOT NULL,
)  ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
<?php

class Connection{
    //Variabili di connessione al database
    const HOST = "localhost";
    const USERNAME = "root";
    const PASS = "";
    const DATABASE = "palestra";

    public $conn = null;

    //Apre la connessione restituendo true se è andata a buon fine altrimenti false
    public function apriConnessione(){
        $this->conn = new mysqli(Connection::HOST, Connection::USERNAME, Connection::PASS, Connection::DATABASE);
        if(!$this->conn->connect_errno)
            return true; //Connessione avvenuta con successo
        else
            return false; //Connessione fallita
    }

    public function getList(){
        $query = "SELECT * FROM clubs ORDER BY id_club ASC";
        $queryResult=mysqli_query($this->conn, $query) or die("Errore in apriConnessione: ".mysqli_error($this->conn)); //esegue la query e se fallisce ritorna un errore
        if (mysqli_num_rows($queryResult) == 0){ //se non ci sono righe di qualche risultato
            return null; //ritorna null
        }
        else{
            $result = array(); //altrimenti crea un array
            while($row = mysqli_fetch_assoc($queryResult)){ //mentre ci sono righe nel risultato
                array_push($result, $row); //aggiungi la riga all'array result
            }
            $queryResult->free(); //libero la memoria
            return $result; //ritorna la lista contenente tutti i risultati
        }
    }

    //Funzione che restituisce il valore della prima query
    public function query_singolaDB($stringaQuery)
    {
        $result = $this->conn->query($stringaQuery);
        $row = $result->fetch_array(MYSQLI_NUM);
        return $row;
    }

    //Funzione che ottiene le informazioni di una query
    public function interrogaDB($stringaQuery)
    {
        $risultatoQuery = $this->conn->query($stringaQuery);
        $ris = array();
        if ($risultatoQuery && ($risultatoQuery->num_rows > 0)) {
            while ($row = $risultatoQuery->fetch_array(MYSQLI_ASSOC)) {
                array_push($ris, $row);
            }
            $risultatoQuery->close();
            return $ris;
        } else
            return false;
    }

    /*
    public function openDBConnection(){
        // mysqli_report(MYSQLI_REPORT_ERROR); qui disabilita errori 
        // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); qui disabilita errori e lancia eccezioni
        $this->conn = mysqli_connect(Connection::HOST, Connection::USERNAME, Connection::PASS, Connection::DATABASE); //crea una connessione con tutti i dati sopra
        
        if(mysqli_connect_errno()){ //se la connessione fallisce
            return false;  //ritorna false
        }
        else{
            return true; //altrimenti ritorna true
        }
    }
    */

    public function closeDBConnection(){
        if($this->conn != null){
            $this->conn->close();
        }
    }

    public function editCorso($id_corso,$nome_corso,$id_categoria,$descrizione,$immagine,$alt,$forza,$equilibrio,$resistenza,$stabilita,$intensita,$durata,$calorie,$calzature,$asciugamano,$borraccia,$tappetino,$guantoni,$capelli_raccolti,$abbigliamento_outdoor,$accappatoio,$cuffia,$costume){
        $connessione1 = new Connection();
        $connOK = $connessione1->apriConnessione();
        if(!$connOK) {
            return "errore di connessione";
        }
        if ($calzature == 1) {
            $scarpe_sportive = 0;
            $calzini = 1;
            $scarpe_outdoor = 0;
            $ciabatte = 0;
            $piedi_nudi = 0;
        } elseif ($calzature == 2) {
            $scarpe_sportive = 1;
            $calzini = 0;
            $scarpe_outdoor = 0;
            $ciabatte = 0;
            $piedi_nudi = 0;
        } elseif ($calzature == 3) {
            $scarpe_sportive = 0;
            $calzini = 0;
            $scarpe_outdoor = 1;
            $ciabatte = 0;
            $piedi_nudi = 0;
        } elseif ($calzature == 4) {
            $scarpe_sportive = 0;
            $calzini = 0;
            $scarpe_outdoor = 0;
            $ciabatte = 1;
            $piedi_nudi = 0;
        } elseif ($calzature == 5) {
            $scarpe_sportive = 0;
            $calzini = 0;
            $scarpe_outdoor = 0;
            $ciabatte = 0;
            $piedi_nudi = 1;
        }
        $query = "UPDATE corsi 
        SET nome_corso = '$nome_corso', id_categoria = '$id_categoria', descrizione = '$descrizione', immagine = '$immagine', alt = '$alt', forza = '$forza', equilibrio = '$equilibrio', resistenza = '$resistenza', stabilità = '$stabilita', intensita = '$intensita', durata = '$durata', calorie = '$calorie', asciugamano = '$asciugamano', borraccia = '$borraccia', calzini = '$calzini', tappetino = '$tappetino', scarpe_sportive = '$scarpe_sportive', guantoni = '$guantoni', capelli_raccolti = '$capelli_raccolti', abbigliamento_outdoor = '$abbigliamento_outdoor', scarpe_outdoor = '$scarpe_outdoor', accappatoio = '$accappatoio', cuffia = '$cuffia', costume = '$costume', ciabatte = '$ciabatte', piedi_nudi = '$piedi_nudi'
        WHERE id_corso = '$id_corso';";
        $queryResult=mysqli_query($this->conn, $query) or die("Errore in apriConnessione: ".mysqli_error($this->conn)); //esegue la query e se fallisce ritorna un errore
    }
    
    public function insertNewCostumer($nome, $cognome, $sesso, $dataNascita, $email, $telefono, $note){
        //le virgolette servono per evitare errori di sintassi e la query non compilerebbe (non riconoscerebbe le variabili)
        $query = "INSERT INTO costumer (nome, cognome, sesso, dataNascita, email, telefono, note) 
        VALUES(\"$nome\", \"$cognome\", \"$sesso\", \"$dataNascita\", \"$email\", \"$telefono\", \"$note\")";
       
        //alternativamente si sceglie tra questo modo e mysqli_affected_rows
        $queryResult=mysqli_query($this->conn, $query) or die("Errore in openDBConnection: ".mysqli_error($this->conn));
        
        if(mysqli_affected_rows($this->conn) > 0){ //se ci sono dei dati da ritornare
            return true;
        }
        else{
            return false;
        }
    }
    public function UserExists($username){
        $connection=$this->conn;
        $query='SELECT username FROM user where email=? OR username=?';
        $preparedQuery = $connection->prepare($query);
        $preparedQuery->bind_param(
            'ss',
            $username,
            $username
        );
        $preparedQuery->execute();
        $res=$preparedQuery->get_result();
        $exist= $res->fetch_array();
        if(!$exist){
            $preparedQuery->close();
            return null;
        }
        $preparedQuery->close();
        return $exist[0];
    }
    public function CheckLogin($username,$password){
        $connection=$this->conn;
        $query='SELECT count(*) FROM user where  username=? AND password=?';
        $preparedQuery = $connection->prepare($query);
        $preparedQuery->bind_param(
            'ss',
            $username,
            $password
        );
        $preparedQuery->execute();
        $res=$preparedQuery->get_result();
        $exist= $res->fetch_array(MYSQLI_NUM)[0]>0;
        $preparedQuery->close();
        return $exist;
    }
    public function RegisterNewUser($username,$email,$password){
        $connection=$this->conn;
        $query='INSERT INTO user (username, email, password, type)VALUES(?,?,?,?)';
        $preparedQuery = $connection->prepare($query);
        $usertype="BasicUser";
        $preparedQuery->bind_param(
            'ssss',
            $username,
            $email,
            $password,
            $usertype
        );
        $res=$preparedQuery->execute();
        $preparedQuery->close();
        return $res;
    }    
    public function CheckUserPriviledge($username){
        $connection=$this->conn;
        $query='SELECT type FROM user where username=?';
        $preparedQuery = $connection->prepare($query);
        $preparedQuery->bind_param(
            's',
            $username
        );
        $preparedQuery->execute();
        $res=$preparedQuery->get_result();
        $type= $res->fetch_array(MYSQLI_NUM)[0];
        $preparedQuery->close();
        return $type;
    }
    public function GetCategorie(){
        $connection=$this->conn;
        $query='SELECT id_categoria , nome_cat FROM categorie';
        $preparedQuery = $connection->prepare($query);
        $preparedQuery->execute();
        $res=$preparedQuery->get_result();
        $categorie=[];
        while($row = $res->fetch_assoc()){
            $categorie[$row["id_categoria"]]=$row["nome_cat"];
        }
        $preparedQuery->close();
        return $categorie;
    }
    public function GetCorsi(){
        $connection=$this->conn;
        $query='SELECT * FROM corsi';
        $preparedQuery = $connection->prepare($query);
        $preparedQuery->execute();
        $res=$preparedQuery->get_result();
        $categorie=[];
        $i=0;
        while($row = $res->fetch_assoc()){
            $categorie[$i]=$row;
            $i++;
        }
        $preparedQuery->close();
        return $categorie;
    }
    public function InsertCorso($nome_corso,$id_categoria,$descrizione,$immagine,$alt,$forza,$equilibrio,$resistenza,$stabilità,$intensita,$durata,$calorie,$asciugamano,$borraccia,$calzini,$tappetino,$scarpesportive,$guantoni,$capelli_raccolti,$abbigliamento_outdoor,$scarpeoutdoor,$accappatoio,$cuffia,$costume,$ciabatte,$piedinudi){

        $connection=$this->conn;
        $query='INSERT INTO corsi (`nome_corso`, `id_categoria`, `descrizione`, `immagine`, `alt`, `forza`, `equilibrio`, `resistenza`, `stabilità`, `intensita`, `durata`, `calorie`, `asciugamano`, `borraccia`, `calzini`, `tappetino`, `scarpe_sportive`, `guantoni`, `capelli_raccolti`, `abbigliamento_outdoor`, `scarpe_outdoor`, `accappatoio`, `cuffia`, `costume`, `ciabatte`, `piedi_nudi`)
                        VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $preparedQuery = $connection->prepare($query);
        $usertype="BasicUser";
        $preparedQuery->bind_param(
            'ssssssssssssssssssssssssss',
            $nome_corso,
            $id_categoria,
            $descrizione,
            $immagine,
            $alt,
            $forza,
            $equilibrio,
            $resistenza,
            $stabilità,
            $intensita,
            $durata,
            $calorie,
            $asciugamano,
            $borraccia,
            $calzini,
            $tappetino,
            $scarpesportive,
            $guantoni,
            $capelli_raccolti,
            $abbigliamento_outdoor,
            $scarpeoutdoor,
            $accappatoio,
            $cuffia,
            $costume,
            $ciabatte,
            $piedinudi
        );
        $res=$preparedQuery->execute();
        $preparedQuery->close();
        return $res;
    }
    public function DeleteCorso($id){

        $connection=$this->conn;
        $query='Delete FROM corsi where id_corso=?';
        $preparedQuery = $connection->prepare($query);
        $preparedQuery->bind_param(
            's',
            $id
        );
        $res=$preparedQuery->execute();
        $preparedQuery->close();
        return $res;
    }
}
?>
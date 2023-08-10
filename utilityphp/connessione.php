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
    
    public function insertNewCostumer($nome, $cognome, $sesso, $dataNascita, $email, $telefono, $note){
        //le virgolette servono per evitare errori di sintassi e la query non compilerebbe (non riconoscerebbe le variabili)
        $query = "INSERT INTO costumer (nome, cognome, sesso, dataNascita, email, telefono, note) 
        VALUES(\"$nome\", \"$cognome\", \"$sesso\", \"$dataNascita\", \"$email\", \"$telefono\", \"$note\")";
       
        //alternativamente si sceglie tra questo modo e mysqli_affected_rows
        $queryResult=mysqli_query($this->conn, $query) or die("Errore in openDBConnection: ".mysqli_error($this->connection));
        
        if(mysqli_affected_rows($this->conn) > 0){ //se ci sono dei dati da ritornare
            return true;
        }
        else{
            return false;
        }
    }
    public function UserExists($username){
        $query='SELECT count(*) FROM costumer where email=?';
        $preparedQuery = $connection->prepare($query);
        $preparedQuery->bind_param(
            'ss',
            $email
            $password
        );
        $preparedQuery->execute();
        $res=$preparedQuery->get_result();
        return $res->fetch_array(MYSQLI_NUM)[0]>0;
    }
    public function Checklogin($email,$password){
        $query='SELECT count(*) FROM costumer where email=? AND password=?';
        $preparedQuery = $connection->prepare($query);
        $preparedQuery->bind_param(
            'ss',
            $email
            $password
        );
        $preparedQuery->execute();
        $res=$preparedQuery->get_result();
        return $res->fetch_array(MYSQLI_NUM)[0]>0;
    }
}
?>
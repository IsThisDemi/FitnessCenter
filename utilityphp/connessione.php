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
        $query = "INSERT INTO costumer (nome, cognome, sesso, dataNascita, email, telefono, note) 
        VALUES('?', '?', '?', '?', '?', '?', '?')";
        $preparedQuery = $connection->prepare($query);
        $preparedQuery->bind_param(
            'sssssss',
            $nome, $cognome, $sesso, $dataNascita, $email, $telefono, $note
        );
        $res=$preparedQuery->execute();
        $connection->disconnect();
        $preparedQuery->close();
        return $res;
    }
    public function UserExists($username){
        $query='SELECT username FROM costumer where where email=? OR username=?';
        $preparedQuery = $connection->prepare($query);
        $preparedQuery->bind_param(
            'sss',
            $email,
            $email,
            $password
        );
        $preparedQuery->execute();
        $res=$preparedQuery->get_result();
        $exist= mysqli_num_rows($res)>0;
        if(!$exist){
            $connection->disconnect();
            $preparedQuery->close();
            return "";
        }
        $username=$res -> fetch_row()[0];
        $connection->disconnect();
        $preparedQuery->close();
        return $username;
    }
    public function CheckLogin($username,$password){
        $query='SELECT count(*) FROM costumer where username=? AND password=?';
        $preparedQuery = $connection->prepare($query);
        $preparedQuery->bind_param(
            'ss',
            $username,
            $password,
        );
        $preparedQuery->execute();
        $res=$preparedQuery->get_result();
        $exist= $res->fetch_array(MYSQLI_NUM)[0]>0;
        $connection->disconnect();
        $preparedQuery->close();
        return $exist;
    }
    public function RegisterNewUser($username,$email,$password){
        $query='INSERT INTO costumer (username, email, password, type)VALUES(?,?,?,?)';
        $preparedQuery = $connection->prepare($query);
        $preparedQuery->bind_param(
            'ssss',
            $username,
            $email,
            $password,
            "BasicUser"
        );
        $res=$preparedQuery->execute();
        $connection->disconnect();
        $preparedQuery->close();
        return $res;
    }    
    public function CheckUserPriviledge($username){
        $query='SELECT type FROM costumer where username=?';
        $preparedQuery = $connection->prepare($query);
        $preparedQuery->bind_param(
            's',
            $username
        );
        $preparedQuery->execute();
        $res=$preparedQuery->get_result();
        $type= $res->fetch_array(MYSQLI_NUM)[0];
        $connection->disconnect();
        $preparedQuery->close();
        return $type;
    }
}
?>
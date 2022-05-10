<?php 
 
class DataBase
{
 
    private $host;
    private $usuario;
    private $pass;
    private $db;
 
    private $connection;
 
    function __construct()
    {
        $this->host = "localhost";
        $this->usuario = "root";
        $this->pass = "caravaca";
        $this->db = "cursophp";
    }
 
    function connect(){
         
        $this->connection = mysqli_connect(
            $this->host,
            $this->usuario,
            $this->pass,
            $this->db
        );
 
        $this->connection->set_charset("utf8");
 
        if (mysqli_connect_errno()) {
            print("error al conectarse");
        }
    }
 
    function execute($sql)
    {
        $data = array();
        $result = mysqli_query($this->connection, $sql);
 
        $error = mysqli_error($this->connection);
 
        if (empty($error)) {
            if ( mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    array_push($data, (object)$row);
                }
            }
        } else {
            throw new Exception($error);
        }
        return (object)$data;
    }
 
    function numRows($sql)
    {
        $result = mysqli_query($this->connection, $sql);
        $error = mysqli_error($this->connection);
 
        if (empty($error)) {
            return mysqli_num_rows($result);
        } else {
            throw new Exception($error);
        }
    }
 
    function getDataSingle($sql)
    {
 
        $result = mysqli_query($this->connection, $sql);
 
        $error = mysqli_error($this->connection);
 
        if (empty($error)) {
            if (mysqli_num_rows($result) > 0) {
                return (object)mysqli_fetch_assoc($result);
            }
        } else {
            throw new Exception($error);
        }
        return (object)array();
    }
  
    function close()
    {
        mysqli_close($this->connection);
    }
 
    function getLastId()
    {
        return mysqli_insert_id($this->connection);
    }
}
<?php

class Pokemon
{
    private $conn;

    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = ""; 
        $dbname = "pokemon_db";
        

        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getAllPokemons()
    {
        $sql = "SELECT id, name, type FROM pokemons";
        $result = $this->conn->query($sql);

        $pokemons = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $pokemons[] = $row;
            }
        }
        return $pokemons;
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}

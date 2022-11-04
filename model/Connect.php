<?php

class Connect {
    private $server = 'localhost';
    private $user = "root";
    private $password = "";
    private $database = "myshop";

    private function cnt() {
        $connect = mysqli_connect($this->server, $this->user, $this->password, $this->database);
        mysqli_set_charset($connect, 'utf8');
        
        return $connect;
    }

    public function query($sql) {
        $connect = $this->cnt();
        $result = mysqli_query($connect, $sql);

        mysqli_close($connect);
        return $result;
    }
}
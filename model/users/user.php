<?php
require "model/Connect.php";
require "model/users/userObject.php";

class User {
    public function all() {
        $sql = "SELECT * FROM users";
        $result = (new Connect())->query($sql); 

        $arr = [];
        foreach( $result as $row ) {
            $arr[] = new UserObject($row);
        }
        return $arr;
    }

}
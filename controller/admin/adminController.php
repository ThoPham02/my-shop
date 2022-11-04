<?php 

class AdminController {
    public function index() {
        require "model/users/user.php";

        $users  = (new User)->all();

        require 'view/admin/admin.php';

    }
}
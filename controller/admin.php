<?php

class admin extends Controller
{
    public function index()
    {
        parent::loadView(array('admin/login'));
    }

    public function login()
    {
        // global $helper;
        echo 'login';
        require('views/admin/login.php');

    }
}
?>
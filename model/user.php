<?php
class user
{

    private $username;
    private $password;

    public function __construct()
    {
        # code...
    }

    public function login($username,$password)
    {
        global $database;
        global $session;

        $this->username = $username;
        $this->password = $password;
        
        $user = $database->getBy('users',array('column' => 'username,password,level','id' => '1'));

        
        if ($this->username == $user['username'] && $this->password == $user['password'] && $user['level'] == 0) {
            $session->set($username,$user['level']);
        }


    }
    public function logged()
    {
        global $session;
        if (!empty($session->get($this->username))) {
            return $session->get($this->username);
        }
        
    }
    public function logout()
    {
        # code...
    }
    public function changePassword()
    {
        # code...
    }
}
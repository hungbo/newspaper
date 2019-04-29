<?php
class user
{

    private $username;
    private $password;
    private $level;

    public function __construct()
    {
       
    }

    public function login($username,$password)
    {
        global $database, $session;

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
        global $session;
        foreach ($session->get($this->username) as $key => $value) {
            $this->username = $key;
        }
        if (isset($this->username)) {
              $session->remove($this->username);
        }
    }
    public function changePassword()
    {
        # code...
    }
}
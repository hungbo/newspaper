<?php

class admin extends Controller
{
    protected $username = '';
    protected $level = '';


    public function dashboard()
    {
        global $helper;
        $user = new user();

        if ($user->logged() == null) {
            $helper->redirect('?controller=admin&action=login');
        }    
        
        parent::loadView(['admin/dashboard']);

    }

    public function login()
    {
        global $session, $input, $helper;
        $user = new user();

        if (($session->get() != null)) {
            $helper->redirect('?controller=admin&action=dashboard');
        }
        if ($input->post('login') != null) {
            $this->username = $input->post('username');
            $password = $input->post('password');
            $user->login($this->username,$password);
            $helper->redirect('?controller=admin&action=dashboard');
        }

        
        parent::loadView(['admin/login']);
    }

    public function logout()
    {
        global $helper;
        $user = new user();
        $user->logout();
        $helper->redirect('?controller=admin&action=dashboard');
    }

    public function getValue($value)
    {
        global $session;
        foreach ($session->get() as $username => $level) {
             $this->username = $username;
             $this->level = $level;
        }
        return $this->$value;
    }
}
?>
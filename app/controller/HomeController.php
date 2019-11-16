<?php 

class home extends Controller
{
    public function index()
    {
        parent::loadView(array('home'));
    }
}

?>
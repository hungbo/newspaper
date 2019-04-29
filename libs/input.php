<?php
class input
{
    public function post($key)
    {
        return isset($_POST[$key]) ? $_POST[$key] : '';
    }

    public function get($key)
    {
        return isset($_GET[$key]) ? $_GET[$key] : '';
    }
 
}

<?php


try {
    // echo $helper->url('views/admin/login.php');
    // include $helper->url('views/admin/login.php');
    // $user->login('admin','123456');
    $user->logged();
    // if ($user->logged() == false) {
        
    // }else {
    //     // print_r($user->logged());
    // }

} catch (\Throwable $th) {
    echo $th->getMessage();
}






?>
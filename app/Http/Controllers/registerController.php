<?php

namespace App\Http\Controllers;

class RegisterController
{
    private $username = "";
    private $gamecode = 0;

    public function __construct(){
    //This is the constructor of this controller
        //echo 'constructor called.';

        if(isset($_POST['username']) || isset($_POST['gamecode']))
        {
            //echo 'POST detected.';
            
            if($_POST['username'] != '' && $_POST['username'] != null){
                $this->username = $_POST['username'];
            }
            if($_POST['gamecode'] != '' && $_POST['username'] != null){
                $this->gamecode =$_POST['gamecode'];
            }
        }
        $this->echoController();
    }
    public function echoController(){

        //echo "function called.";
        echo $this->username;
        echo $this->gamecode;
    }
}
$obj = new RegisterController();
?>

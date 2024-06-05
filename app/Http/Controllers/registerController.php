<?php

namespace App\Http\Controllers;

abstract class RegisterController
{
    private $username;
    private $gamecode;

    if(isset($_POST['submit']))
    {
        registerController();
    } 
    public function registerController(){
    //This is the constructor of this controller
        if($_POST['username'] != ''){
            $username = $_POST['username'];
        }
        if($_POST['gamecode'] != ''){
            $gamecode =$_POST['gamecode'];
        }
        echo $username;
        echo $gamecode;
    }
}
?>

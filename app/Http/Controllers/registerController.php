<?php

namespace dashboard\Projects\Igame\Igame\app\Http\Controllers;
namespace dashboard\projects\Igame\Igame\app\Models;
include 'C:\xampp2\htdocs\dashboard\Projects\Igame\Igame\app\Models\registerModel.php';

class RegisterController{

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
        $this->initialiseModel($this->username);
    }
    public function echoController()
    {

        //echo "function called.";
        echo $this->username;
        echo $this->gamecode;
    }
    private function initialiseModel(string $name)
    {
        if(class_exists('registerModel'))
        {
            $registerModel = new registerModel($name);

        }else{
            echo "Class does not exist";
        }
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getGamecode()
    {
        return $this->gamecode;
    }
}
$obj = new RegisterController();


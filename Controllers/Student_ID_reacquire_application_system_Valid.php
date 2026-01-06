<?php
require_once("Authenticationcheck.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["date"])){
        $massage="Fill every box";
    }
    else{
        $massage="Submited";
    }
}
?>
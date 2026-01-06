<?php
require_once("Authenticationcheck.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $department=$_POST["S1"];
    
    if($name=="" && $department==""){
        $massage="Fill every box";
    }
    else if($name=="" ){
        $massage="Fill name";
    }
    else if($department=="" ){
        $massage="Fill department";
    }
    else{
        $massage="Submited";
    }
}
?>
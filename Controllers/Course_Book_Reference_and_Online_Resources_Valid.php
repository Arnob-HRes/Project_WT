<?php
require_once("Authenticationcheck.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $course=$_POST["credit"];
    
    if($course==""){
        $massage="Fill course name";
    }
    else{
        $massage="Submited";
    }
}
?>
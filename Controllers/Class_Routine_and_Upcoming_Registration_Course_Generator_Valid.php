<?php
require_once("Authenticationcheck.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $credit=$_POST["credit"];
    $department=$_POST["S1"];
    $id=$_POST["ID"];

    if($credit=="" && $department=="" && $id==""){
        $massage="Fill every box";
    }
    else if($credit=="" && $department==""){
        $massage="Fill credit and department";
    }
    else if($id==""&& $department==""){
        $massage="Fill id and department";
    }
    else if($id==""&& $credit==""){
        $massage="Fill id and credit";
    }
    else if($credit==""){
        $massage="Fill credit";
    }
    else if($id==""){
        $massage="Fill id";
    }
    else if($department==""){
        $massage="Fill depertment";
    }
    else{
        $massage="Submited";
    }
}
?>
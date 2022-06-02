<?php

if(is_numeric($_REQUEST["fname"]))
{
    echo "First name and Last Name should not contain numeric value.<br>";
    if(is_numeric($_REQUEST["lname"]))
    {
        echo "First name and Last Name should not contain numeric value.<br>";
    }
}
else
{
    $fname     =$_REQUEST["fname"];
    $lname     =$_REQUEST["lname"];

    echo "First Name          : ", $fname ,"<br>" ;
    echo "Last Name           : ", $lname ,"<br>" ;
}


if(isset($_REQUEST["designation"]))
{
   if($designation=="Junior Programmer")
    {
        echo "Designation        : ", $designation ,"<br>";
    }
    if($designation=="Senior Programmer")
    {
        echo "designation        : ", $designation ,"<br>";
    }
    if($designation=="Project Lead")
    {
        echo "designation        : ", $designation ,"<br>";
    }
}
else
{
    echo "Designation must be selected <br>";
}

if(isset($_REQUEST["java"]) || isset($_REQUEST["php"]) || isset($_REQUEST["c++"]))
{
    if(isset($java))
    {
        echo "Preferred language          :", $java ,"<br>";
    }
    if(isset($php))
    {
        echo "Preferred language           :", $php ,"<br>";
    }
    if($_REQUEST($c++))
    {
        echo "Preferred language           :", $c++ ,"<br>";
    }
}
else
{
    echo "Preferred language must be selected.<br>";
}

$email = $_REQUEST["email"];
if($email=="")
{
    echo "Email should not be empty.<br>";
}
else
{
    echo "Email             :", $email , "<br>";
}

$password=$_REQUEST["password"];
if(strlen($password)<6)
{
    echo "Password should be more than 6 characters. <br>";
}



?>
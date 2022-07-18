<?php

include ("../model/db.php");

?>



<?php

$nameErr="";
$name1Err="";
$name2Err="";
$designationErr="";
$vvv ="";
$emailErr="";
$passwordSave="";
$passwordErr="";
$plang1= "";
$plang2 = "";

if(isset($_POST["submit"]))
{
    echo "<h3>Previous Submission Informations....</h3> <br> ";
$fname     =$_REQUEST["fname"];
$lname     =$_REQUEST["lname"];

if($fname="" || $lname=="")
{
    $nameErr= "Both First Name and Last Name Required. <br>";
}
else
{
if(is_numeric($_REQUEST["fname"]))
{
    $name1Err=  "First name  should not contain numeric value.<br>";

    if(is_numeric($_REQUEST["lname"]))
    {
        $name2Err=  "Last Name should not contain numeric value.<br>";
    }
    else
    {
        echo "Last Name           : ", $lname ,"<br>" ;
    }
}
else
{
    $fname     =$_REQUEST["fname"];
    $lname     =$_REQUEST["lname"];

    echo "First Name          : ", $fname ,"<br>" ;
    if(is_numeric($_REQUEST["lname"]))
    {
        $name2Err= "Last Name should not contain numeric value.<br>";
    }
    else
    {
        echo "Last Name           : ", $lname ,"<br>" ;
    }
}
}

if(isset($_REQUEST["designation"]))
{
    $designation = $_REQUEST["designation"];
    
    echo "Designation     :", $designation, "<br>";


}
else
{
    $designationErr= "Designation must be selected. <br>";
}



if(!isset($_REQUEST["java"]) && !isset($_REQUEST["php"]) && !isset($_REQUEST["c"]))
{
    $vvv = "Preferred language must be selected.<br>";
    
    
}
else
{
    echo "Preferred language   :  ";
    if(isset($_REQUEST["java"]))
    {
        $plang= $_REQUEST["java"];
        echo $plang, " ";
    }
    if(isset($_REQUEST["php"]))
    { 
        $plang1= $_REQUEST["php"];
        echo $plang1, " ";
    }
    if(isset($_REQUEST["c"]))
    {
        $plang2 = $_REQUEST["c"];
        echo $plang2, " ";
    }
    echo "<br>";
}


$email = $_REQUEST["email"];
if($email=="")
{
    $emailErr= "Email should not be empty.<br>";
}
else
{
    echo "Email             :", $email , "<br>";
}


if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../uploads/".$_FILES["myfile"]["name"]))
{
echo "File Uploaded..<br>";

}
else
{
    echo "File is not uploades..!! <br>";
}

$password=$_REQUEST["password"];
if(strlen($password)<6)
{
    $passwordErr= "Password should be more than 6 characters. <br>";
}
else
{
    $passwordSave= "Password Successfully Saved...!!";
}

$location = "../uploads/";
$comma=", ";
}
{
    if(isset($_POST["submit"]))
    {
        
        $age=$_POST["age"];
        
        $plang= $plang."".$plang1."".$plang2;
        
     
        $mydb=new db();
        $myconn=$mydb->openCon();
        $mydb->insertUser($fname,$lname,$age,$designation,$plang,$email,$password,$location,"employee",$myconn);
    
    
    }
}
?>
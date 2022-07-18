<?php
class db
{
    function openCon()
    {
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="ftlabtask1";
        $conn= new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error){
            echo "error connecting database";
        }
        return $conn;
        }
        function insertUser($fname,$lname,$age, $designation,$plang,$email,$password,$location,$table,$conn){
        $sqlstr="INSERT into $table (fname,lname,age,designation,planguage,email,password,picture) 
        VALUES ('$fname','$lname','$age','$designation','$plang','$email','$password','$location') ";
        if($conn->query($sqlstr)){
            echo "data inserted";
        }
        else
        {
            echo "cant insert".$conn->error;
        }
    }
}
?>
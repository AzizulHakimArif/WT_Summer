<?php

include ("../control/FTLab1c.php");

?>

<html>
<head>
<title>Lab2 - Registatin Form</title>
</head>
<body>

<?php
echo "";
?>
<h1 align="left">Registration Form</h1>
<hr>

<table align="left">

<form action="" method="post" enctype="multipart/form-data">
    
    <tr>
        
    <td>    
    First Name:  
    <br>
    <br>
    </td> 
    
    <td>
    
    <input type="text" name="fname">
    <?php 
    echo $nameErr; 
    echo $name1Err;
    ?>
    <br>
    <br>
</td>

</tr>
    <tr>
        <td>    
    Last Name:  
    <br>
    <br>
    </td> 
    <td>
    <input type="text" name="lname">
    <?php 
    echo $nameErr; 
    echo $name2Err;
    ?>
    <br>
    <br>
    </td>
</tr>
    
<tr>
        
    <td>    
    
    Age:  
    <br>
    <br>
    </td>
     <td>
    <input type="text" name="age">
    <br>
    <br>
</td>

</tr>

    <tr>
        
    <td> 
        
    
    Designation:  
    <br>
    <br>
    </td><td> 
        
    <input type="radio" name="designation" value="Junior Programmer"> Junior Programmer 
     
    <input type="radio" name="designation" value="Senior Programmer"> Senior Programmer
    
    <input type="radio" name="designation" value="Project Lead"> Project Lead
    <br>

    <?php 
    echo $designationErr; 
    ?>
    <br>
</td>
</tr>

<tr> 
    
<td> 
        
Preferred languages:  
<br>
<br>
    </td>
    <td>
    
    <input type="checkbox"  name="java" value="JAVA"> JAVA
    
    <input type="checkbox"  name="php" value="PHP"> PHP
    
    <input type="checkbox"  name="c" value="C++"> C++
    
    <br>

    <?php 
    echo $vvv; 
    ?>
<br>
</td>

</tr>
    <tr>
        
    <td> 
        Email:  
        <br>
        <br>
    </td>
    
    <td> 
        <input type="email" name="email">

        <?php 
        echo $emailErr; 
        ?>
        <br>
        <br>
        
    </td>
</tr>

    <tr>
        
    <td> 
        Password: 
        <br>

    </td>
    
    <td>  
        <input type="text" name="password">
        <?php 
        echo $passwordErr; 
        echo $passwordSave; 
        ?>
        <br>

    </td>

</tr>
    
<tr>
        <td> 
        <br>
        Please choose a file: 
    </td>
    
    <td>  
    <br>
        <input type="file"  name="myfile">
    </td>

</tr>
    <tr> 
        
    <td> 
    <br>
    <br>
        <input type="submit" value="Submit" name="submit">
        <input type="reset" value="Reset" name="reset">
    </td>
    
    <td>
        
    </td>

</tr>

</form>
</table>

<br> <br>


</body>
</html>
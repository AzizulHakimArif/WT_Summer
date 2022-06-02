<html>
<head>
<title>Lab2 - Form data validation</title>
</head>
<body>

<?php
echo "";
?>
<h1 align="left">Registration Form</h1>
<hr>

<table align="left">

<form action="../control/process.php" method="post">
    
    <tr>
        
    <td>    
    First Name:  
    </td> 
    
    <td>
    
    <input type="text" name="fname">
    
</td>

</tr>
    <tr>
        <td>    
    Last Name:  
    </td> 
    <td>
    <input type="text" name="lname">
    </td>
</tr>
    
<tr>
        
    <td>    
    
    Age:  
    </td>
     <td>
    <input type="text" name="age">
    
</td>

</tr>

    <tr>
        
    <td> 
        
    
    Designation:  
    </td><td> 
        
    <input type="radio" name="degignation" value="Junior Programmer"> Junior Programmer 
     
    <input type="radio" name="degignation" value="Senior Programmer"> Senior Programmer
    
    <input type="radio" name="degignation" value="Project Lead"> Project Lead
    
</td>
</tr>

<tr> 
    
<td> 
        
Preferred languages:  
    </td>
    <td>
    
    <input type="checkbox"  name="java" value="JAVA"> JAVA
    
    <input type="checkbox"  name="php" value="PHP"> PHP
    
    <input type="checkbox"  name="c++" value="C++"> C++
    
</td>

</tr>
    <tr>
        
    <td> 
        Email:  
    </td>
    
    <td> 
        <input type="email" name="email">
    </td>
</tr>

    <tr>
        
    <td> 
        Password: 
    </td>
    
    <td>  
        <input type="text" name="password">
    </td>

</tr>
    
<tr>
        <td> 
        Please choose a file: 
    </td>
    
    <td>  
        <input type="file"  name="filename">
    </td>

</tr>
    <tr> 
        
    <td> 
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </td>
    
    <td>
        
    </td>

</tr>

</form>
</table>

<br> <br>


</body>
</html>

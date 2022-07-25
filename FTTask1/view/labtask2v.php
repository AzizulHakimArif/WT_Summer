<html>
<head>
<title>Lab1 - Form data input in database</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
<div class="header">
<br>
<h1 class="h1head" align="center"> ABC Management System </h1>
<h3 class="h3head" align="center"> We Create Future </h3>
<br>


</div>

<div class="sticky">
    <div class="topnav">
<a href="#"> Home</a>
<a href="#"> About Us</a>
<a href="../view/index.php"> Shop</a>
    </div>
</div>

<div class="registration">
<h1 class="toph1">Registration</h1>
</div>


<table align="left">

<form action="" method="post" enctype="multipart/form-data">
    
    <tr  class="row">
        
    <td>    
    First Name:  

    </td> 
    
    <td>
    
    <input type="text" name="fname">


</td>

</tr>
    <tr  class="row">
        <td>    
    Last Name:  

    </td> 
    <td>
    <input type="text" name="lname">


    </td>
</tr>
    
<tr  class="row">
        
    <td>    
    
    Age:  

    </td>
     <td>
    <input type="text" name="age">

</td>

</tr>

    <tr  class="row">
        
    <td> 
        
    
    Designation:  

    </td><td> 
        
    <input type="radio" name="designation" value="Junior Programmer"> Junior Programmer 
     
    <input type="radio" name="designation" value="Senior Programmer"> Senior Programmer
    
    <input type="radio" name="designation" value="Project Lead"> Project Lead

</td>
</tr>

<tr  class="row"> 
    
<td> 
        
Preferred languages:  

    </td>
    <td>
    
    <input type="checkbox"  name="java" value="JAVA"> JAVA
    
    <input type="checkbox"  name="php" value="PHP"> PHP
    
    <input type="checkbox"  name="c" value="C++"> C++
    

</td>

</tr>
    <tr   class="row">
        
    <td> 
        Email:  
   
    </td>
    
    <td> 
        <input type="email" name="email">



        
    </td>
</tr>

    <tr   class="row">
        
    <td> 
        Password: 


    </td>
    
    <td>  
        <input type="text" name="password">



    </td>

</tr>
    
<tr   class="row">
        <td> 

        Please choose a file: 
    </td>
    
    <td>  

        <input type="file"  name="myfile">
    </td>

</tr>
    <tr> 
        
    <td> 

    <input class="button submit" type="submit" value="Submit">
        <input class="button reset" type="reset" value="Reset">
    </td>
    
    <td>
        
    </td>

</tr>

</form>
</table>



</body>
</html>
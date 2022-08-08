var error = 0;
function fnameCheck(){
    var fname= document.getElementById("fname").value;
    if(fname == ""){
        document.getElementById("fnameError").innerHTML= "Please Enter name";
        return error +=1;
    }
    else if(!isNaN(fname)){
        document.getElementById("fnameError").innerHTML= "Name Must be Alphabets";
        return false;
    }
    else{
        document.getElementById("fnameError").innerHTML= "OK";
        return true;           
    }

}
function lnameCheck(){
    var lname= document.getElementById("lname").value;
    if(lname == ""){
        document.getElementById("lnameError").innerHTML= "Please Enter name";
        return false;
    }
    else if(!isNaN(lname)){
        document.getElementById("lnameError").innerHTML= "Name Must be Alphabets";
        return false;
    }
    else{
        document.getElementById("lnameError").innerHTML= "OK";
        return true;           
    }

}

function ageCheck(){
    var age = document.getElementById("age").value;
    if(age == ""){
        document.getElementById("ageError").innerHTML="Please Enter age";
        return false;
    }
    else if(!Number(age)){
        document.getElementById("ageError").innerHTML="Age must be number";
        return false;
    }
    else{
        document.getElementById("ageError").innerHTML= "OK";
        return true;
    }
}

function emailCheck(){
    var email = document.getElementById("email").value;
    if(email == ""){
        document.getElementById("emailError").innerHTML="Please Enter Email";
        return false;
    }
    else if(!email.includes("@") || !email.includes(".com")){
        document.getElementById("emailError").innerHTML="Must contain @ and '.com'";
        return false;
    }
    else{
        document.getElementById("emailError").innerHTML="OK";
        return true;
    }
}
function isPasswordSecure(password) {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(password);
};
function passCheck(){
 
    var pass =  document.getElementById("pass").value;
    if(pass == ""){
        document.getElementById("passError").innerHTML="Please Enter Password";
        return false;
    }
    else if(pass.length < 8){
        document.getElementById("passError").innerHTML =' Weak Password. ';
        error += 1;
        return false;
    }
    else{
        document.getElementById("passError").innerHTML="OK";
        return true;
    }
}

function validateForm(){
    if(fnameCheck() == false || lnameCheck() == false || ageCheck() == false || emailCheck() == false || passCheck()== false      ){
        return false;
    }
    else {
        return true;
    }
}
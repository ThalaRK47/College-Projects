function registeration(){
    let name=document.getElementById("name");
    let mail =document.getElementById("mail");
    let pass=document.getElementById("pass");
    let cpass=document.getElementById("cpass");

    if(name.value==""){
        document.getElementById("nameerror").innerHTML="please enter name";
        name.focus();
        return false;
    }
    else{
        document.getElementById("nameerror").innerHTML="";

    }
    if(mail.value==""){
        document.getElementById("mailerror").innerHTML="please enter email";
        mail.focus();
        return false;
    }
    else{
        document.getElementById("mailerror").innerHTML="";

    }
    if(pass.value==""){
        document.getElementById("passerror").innerHTML="please enter password";
        pass.focus();
        return false;
    }
    else{
        document.getElementById("passerror").innerHTML="";

    }
    if(pass.value.length <=8){

        document.getElementById("passerror").innerHTML="password is minmum 8 characters";
        pass.focus();
        return false;

    }
    else{
        document.getElementById("passerror").innerHTML="";

    }

    if(cpass.value==""){
        document.getElementById("cpasserror").innerHTML="please enter confirm password";
        cpass.focus();
        return false;
    }
    else{
        document.getElementById("cpasserror").innerHTML="";
    }
    


    if(pass.value != cpass.value){
        document.getElementById("cpasserror").innerHTML="password is not match";
        cpass.focus();
        return false;

    }
}

function verification(){
    let name=document.getElementById("aname");
    let mail =document.getElementById("aemail");
    let pass=document.getElementById("apass");
    let cpass=document.getElementById("cpass");

    if(name.value==""){
        document.getElementById("nameerror").innerHTML="Enter admin name";
        name.focus();
        return false;
    }
    else{
        document.getElementById("nameerror").innerHTML="";

    }
    if(mail.value==""){
        document.getElementById("mailerror").innerHTML="Enter admin email";
        mail.focus();
        return false;
    }
    else{
        document.getElementById("mailerror").innerHTML="";

    }
    if(pass.value==""){
        document.getElementById("passerror").innerHTML="Enter admin password";
        pass.focus();
        return false;
    }
    else{
        document.getElementById("passerror").innerHTML="";

    }
    if(pass.value.length < 8){

        document.getElementById("passerror").innerHTML="password is minmum 8 characters";
        pass.focus();
        return false;

    }
    else{
        document.getElementById("passerror").innerHTML="";

    }

    if(cpass.value==""){
        document.getElementById("cpasserror").innerHTML="Enter confirm password";
        cpass.focus();
        return false;
    }
    else{
        document.getElementById("cpasserror").innerHTML="";
    }
    


    if(pass.value != cpass.value){
        document.getElementById("cpasserror").innerHTML="password is not match";
        cpass.focus();
        return false;

    }
}
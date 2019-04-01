function Myfunction()
{
var mail=document.jassem.mail.value;
var firstname=document.jassem.firstname.value;
var lastname=document.jassem.lastname.value;
var password=document.jassem.password.value;
var repassword=document.jassem.repassword.value; 
if(lastname=="" || firstname="" || password !== repassword || mail="")
{
alert("un des champs est invalide");	
}

}
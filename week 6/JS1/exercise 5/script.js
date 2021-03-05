function processInfo(){
    var name=document.getElementById("name");
    var email=document.getElementById("email");
    var country=document.getElementById("countries").options[countries.selectedIndex];
    var result=document.getElementById("result");
    var emailRegex=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(name.value.trim()==''){
        result.innerHTML='-Name is invalid <br>';
        result.style.color='red';
        name.style.border="1px solid red";
    }else{
        name.style.border="1px solid black";
    }
    if(emailRegex.test(email.value)==false){
        result.innerHTML+='-Email is invalid <br>';
        result.style.color='red';
        email.style.border="1px solid red";
    }else{
        email.style.border="1px solid black";
    }
    if(country.value=="-1"){
        result.innerHTML+='-Country is invalid!!';
        result.style.color='red';
        document.getElementById("countries").style.border="1px solid red";
    }else{
        document.getElementById("countries").style.border="1px solid black";
    }
    if(name.value.trim()!='' && emailRegex.test(email.value)!=false && country.value!="-1"){
        result.innerHTML='Name: '+name.value+'<br> Email: '+email.value+'<br> Country: '+country.text;
        result.style.color='black';
    }
}
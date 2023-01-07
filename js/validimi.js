let bini = document.getElementById("validate");
let msg = document.getElementById("msg");


function ValidateEmail(inputText)
{
const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.match(mailformat))
{
return false;
}
else
{
return true;
}
}

bini.addEventListener('submit', (e)=>{

    e.preventDefault();
    let emri = e.target[1].value;
    let mbiemri = e.target[2].value;
    let email = e.target[3].value;
    let pw = e.target[4].value;

    if(emri == "" || emri == null){
       msg.innerHTML = "Emri nuk duhet te jet i zbrazet";
    }else if(mbiemri == "" || mbiemri == null){
        msg.innerHTML = "Mbiemri nuk duhet te jet i zbrazet";
    }else if(email == null ||  email == ""){
        msg.innerHTML = "Email nuk duhet te jet i zbrazet";
    }
    else if(pw == null || pw == ""){
        msg.innerHTML = "Passwordi eshte i shkurt";
    }
    else if(ValidateEmail(email)){
        msg.innerHTML = "Emaili nuk eshte valid";
    }
    else{
        msg.innerHTML = "Infot jan valide";
    }


});